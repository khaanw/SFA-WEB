<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stok;

class stokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stok.index');
    }

    public function data()
    {
        $stok =stok::leftjoin('barang','barang.kode','stok.kode')
        ->orderBy('stok.kode', 'desc')->get();

        return datatables()
            ->of($stok)
            ->addIndexColumn()
            ->addColumn('hargaBeli', function ($barang) {
                return format_uang($barang->hargaBeli*$barang->qtyPcs);
            })
            ->addColumn('hargaJual', function ($barang) {
                return format_uang($barang->hargaJual*$barang->qtyPcs);
            })
            ->addcolumn('Nama Barang',function($stok){
                return $stok->nama;
            })
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stok = stok::find($id);
        return response()->json($stok);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
