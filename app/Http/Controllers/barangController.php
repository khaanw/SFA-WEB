<?php

namespace App\Http\Controllers;
use App\Models\barang;
use App\Models\groupbarang;
use App\Models\supplier;
use Illuminate\Http\Request;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier=supplier::all()->pluck('nama','id');
        $groupbarang=groupbarang::all()->pluck('nama','id');
        return view('barang.index',compact('groupbarang','supplier'));
    }

    public function data()
    {
        $barang = barang::orderBy('id', 'desc')->get();
        return datatables()
        ->of($barang)
        ->addIndexColumn()
        ->addColumn('id', function ($barang) {
            return ($barang->id);
        })
        ->addColumn('hargaBeli', function ($barang) {
            return format_uang($barang->hargaBeli);
        })
        ->addColumn('hargaJual', function ($barang) {
            return format_uang($barang->hargaJual);
        })
        ->addColumn('aksi', function ($barang) {
            return '
            <div class="btn-group">
                <button onclick="editForm(`'. route('barang.update', $barang->id) .'`)" class="btn btn-info btn-xs btn-flat"><i class="fas fa-edit"></i></i></button>
                <button onclick="deleteData(`'. route('barang.destroy', $barang->id) .'`)" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i></button>
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
        $barang=barang::latest()->first();
         $request['kode']='P'.tambah_nol_didepan((int)$barang->id+1,7);

        $barang=barang::create($request->all());
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
        $barang = barang::find($id);
        return response()->json($barang);
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
        $barang = barang::find($id);
        // $barang->update($request->all());
        $barang->nama = $request->nama;
        $barang->packaging = $request->packaging;
        $barang->group = $request->group;
        $barang->barcode = $request->barcode;
        $barang->supplier = $request->supplier;
        $barang->kodesupplier = $request->kodesupplier;
        $barang->uom1 = $request->uom1;
        $barang->uom2 = $request->uom2;
        $barang->uom3 = $request->uom3;
        $barang->conv1 = $request->conv1;
        $barang->conv2 = $request->conv2;
        $barang->conv3 = $request->conv3;
        $barang->hargaBeli = $request->hargaBeli;
        $barang->hargaJual = $request->hargaJual;
        $barang->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = barang::find($id);
        $barang->delete();

        return response(null, 204);
    }
}
