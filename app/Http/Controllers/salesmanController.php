<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salesman;

class salesmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('salesman.index');
    }

    public function data()
    {
        $salesman = salesman::orderBy('id', 'desc')->get();

        return datatables()
            ->of($salesman)
            ->addIndexColumn()
            ->addColumn('id', function ($salesman) {
                return ($salesman->id);
            })
            ->addColumn('aksi', function ($salesman) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('salesman.update', $salesman->id) .'`)" class="btn btn-info btn-xs btn-flat"><i class="fas fa-edit"></i></i></button>
                    <button onclick="deleteData(`'. route('salesman.destroy', $salesman->id) .'`)" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i></button>
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
        $salesman=salesman::latest()->first();
        $request['kode']='SLS'.tambah_nol_didepan($salesman->id+1,6);
        // $request['kode']='C'.tambah_nol_didepan((int)$customer->id+1,6);
        $salesman=salesman::create($request->all());
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
        $salesman = salesman::find($id);
        return response()->json($salesman);
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
        $salesman = salesman::find($id);
        $salesman->nama = $request->nama;
        $salesman->alamat = $request->alamat;
        $salesman->telepon = $request->telepon;
        $salesman->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salesman = salesman::find($id);
        $salesman->delete();
        return response(null, 204);
    }
}
