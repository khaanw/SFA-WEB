<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;

class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supplier.index');
    }

    public function data()
    {
        $supplier = supplier::orderBy('id', 'desc')->get();

        return datatables()
            ->of($supplier)
            ->addIndexColumn()
        //     // ->addColumn('id', function ($vendor) {
        //     //     return ($vendor->vendorID);
        //     // })
            ->addColumn('aksi', function ($vendor) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('supplier.update', $vendor->vendorID) .'`)" class="btn btn-info btn-xs btn-flat"><i class="fas fa-edit"></i></i></button>
                    <button onclick="deleteData(`'. route('supplier.destroy', $vendor->vendorID) .'`)" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier=supplier::latest()->first();
        $request['kode']='S'.tambah_nol_didepan(1+1,6);
        $supplier=supplier::create($request->all());
        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = supplier::find($id);
        return response()->json($supplier);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vendor = supplier::find($id);
        // $vendor->nama = $request->nama;
        // $vendor->alamat = $request->alamat;
        // $vendor->telepon = $request->telepon;
        // $vendor->top = $request->top;
        $vendor->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = supplier::find($id);
        $supplier->delete();
        return response(null, 204);
    }
}
