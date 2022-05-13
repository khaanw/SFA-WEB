<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\channel;

class channelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('channel.index');
    }

    public function data()
    {
        $channel = channel::orderBy('id', 'desc')->get();

        return datatables()
            ->of($channel)
            ->addIndexColumn()
            ->addColumn('idDepartment', function ($channel) {
                return ($channel->id);
            })
            ->addColumn('aksi', function ($channel) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('channel.update', $channel->id) .'`)" class="btn btn-info btn-xs btn-flat"><i class="fas fa-edit"></i></i></button>
                    <button onclick="deleteData(`'. route('channel.destroy', $channel->id) .'`)" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i></button>
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
        $channel=channel::create($request->all());
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
        $channel = channel::find($id);
        return response()->json($channel);
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
        $channel = channel::find($id);
        $channel->namaChannel = $request->namaChannel;
        $channel->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $channel = channel::find($id);
        $channel->delete();
        return response(null, 204);
    }
}
