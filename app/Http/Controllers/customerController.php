<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.index');
    }

    public function data()
    {
        $customer = customer::orderBy('id', 'desc')->get();

        return datatables()
            ->of($customer)
            ->addIndexColumn()
            // ->addColumn('idKaryawan', function ($karyawan) {
            //     return ($karyawan->idKaryawan);
            // })

            ->addColumn('aksi', function ($customer) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('customer.update', $customer->id) .'`)" class="btn btn-info btn-xs btn-flat"><i class="fas fa-edit"></i></i></button>
                    <button onclick="deleteData(`'. route('customer.destroy', $customer->id) .'`)" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i></button>
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
        $customer=customer::latest()->first();
        $request['kode']='C'.tambah_nol_didepan(0+1,6);
        // $request['kode']='C'.tambah_nol_didepan((int)$customer->id+1,6);
        $customer=customer::create($request->all());
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
        $customer = customer::find($id);
        return response()->json($customer);
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
        $customer = customer::find($id);
        // $customer->nama = $request->nama;
        // $customer->alamat = $request->alamat;
        // $customer->telepon = $request->telepon;
        // $customer->nik = $request->nik;
        // $customer->pkp = $request->pkp;
        // $customer->npwp = $request->npwp;
        // $customer->channel = $request->channel;
        // $customer->group = $request->group;
        $customer->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = customer::find($id);
        $customer->delete();
        return response(null, 204);
    }
}
