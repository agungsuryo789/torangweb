<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Admin::all();
        $datas2 = Role::all();
        return view('admin.list-admin',compact('datas','datas2'));
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
        $data = new Admin();
        $data->username = $request->username;
        $data->password = $request->password;
        $data->nama = $request->nama;
        $data->id_role = $request->id_role;
        $data->save();
        return redirect()->route('list-admin.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $data = Admin::where('id',$id)->first();
        $datas2 = Role::all();
        return view('admin.update_admin',compact('data','datas2'));
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
        $data = Admin::where('id',$id)->first();
        $data->username = $request->username;
        $data->password = $request->password;
        $data->nama = $request->nama;
        $data->id_role = $request->id_role;
        $data->save();
        return redirect()->route('list-admin.index')->with('alert-success','Data berhasil diubah!');
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
        $data = Admin::where('id',$id)->first();
        $data->delete();
        return redirect()->route('list-admin.index')->with('alert-success','Data berhasi dihapus!');
    }
}
