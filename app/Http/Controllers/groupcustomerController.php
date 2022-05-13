<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\groupcustomer;

class groupcustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('groupCustomer.index');
    }
    public function data()
    {
        $groupcustomer = groupcustomer::orderBy('id', 'desc')->get();

        return datatables()
            ->of($groupcustomer)
            ->addIndexColumn()
            ->addColumn('id', function ($groupcustomer) {
                return ($groupcustomer->id);
            })
            ->addColumn('aksi', function ($groupcustomer) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('groupcustomer.update', $groupcustomer->id) .'`)" class="btn btn-info btn-xs btn-flat"><i class="fas fa-edit"></i></i></button>
                    <button onclick="deleteData(`'. route('groupcustomer.destroy', $groupcustomer->id) .'`)" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i></button>
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
        $groupcustomer=groupcustomer::create($request->all());
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
        $groupcustomer = groupcustomer::find($id);
        return response()->json($groupcustomer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $groupcustomer = groupcustomer::find($id);
        $groupcustomer->nama = $request->nama;
        $groupcustomer->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groupcustomer = groupcustomer::find($id);
        $groupcustomer->delete();
        return response(null, 204);
    }
}
