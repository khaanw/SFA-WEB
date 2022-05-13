<?php

namespace App\Http\Controllers;
use App\Models\groupbarang;

use Illuminate\Http\Request;

class groupbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('groupBarang.index');
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

    public function data(){
        $groupbarang = groupbarang::orderBy('id', 'desc')->get();

        return datatables()
            ->of($groupbarang)
            ->addIndexColumn()
            ->addColumn('id', function ($groupbarang) {
                return ($groupbarang->id);
            })
            // // ->addColumn('nama', function ($groupbarang) {
            // //     return ($groupbarang->nama);
            // })
            ->addColumn('aksi', function ($groupbarang) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('groupbarang.update', $groupbarang->id) .'`)" class="btn btn-info btn-xs btn-flat"><i class="fas fa-edit"></i></i></button>
                    <button onclick="deleteData(`'. route('groupbarang.destroy', $groupbarang->id) .'`)" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groupbarang=groupbarang::create($request->all());
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
        $groupbarang = groupbarang::find($id);
        return response()->json($groupbarang);
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
        $groupbarang = groupbarang::find($id);
        $groupbarang->nama = $request->nama;
        $groupbarang->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groupbarang = groupbarang::find($id);
        $groupbarang->delete();

        return response(null, 204);
    }
}
