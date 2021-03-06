<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produk; 
use App\Kategori;

class AdminVpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Produk::where('id_kategori','2')->get();
        $datas2 = Kategori::all();
        $view = 'Vps';
        return view('admin.list-produk',compact('datas','datas2','view'));
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
        $diskon = null;
        if ($request->diskon == null) {
            # code...
            $diskon = 0;
        } else {
            # code...
            $diskon = $request->diskon;
        }
        $deksripsi['ram'] = $request->ram;
        $deksripsi['core'] = $request->core;
        $deksripsi['hdd'] = $request->hdd;
        $data = new Produk();
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->status_produk = $request->status_produk;
        $data->status_diskon = $request->status_diskon;
        $data->diskon = $diskon;
        $data->id_kategori = '2';
        $data->expire_date = $request->expire_date;
        $data->deskripsi = (string) json_encode($deksripsi);
        $data->save();
        return redirect()->route('list-vps.index')->with('alert-success','Berhasil Menambahkan Data!');

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
        $data = Produk::where('id',$id)->first();
        return view('admin.update_vps',compact('data'));
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
        $data = Produk::where('id',$id)->first();
        $deksripsi['ram'] = $request->ram;
        $deksripsi['core'] = $request->core;
        $deksripsi['hdd'] = $request->hdd;  
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->status_produk = $request->status_produk;
        $data->status_diskon = $request->status_diskon;
        $data->diskon = $request->diskon;
        $data->id_kategori = '2';
        $data->expire_date = $request->expire_date;
        $data->deskripsi = (string) json_encode($deksripsi);
        $data->save();
        return redirect()->route('list-vps.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = Produk::where('id',$id)->first();
        $data->delete();
        return redirect()->route('list-vps.index')->with('alert-success','Data berhasi dihapus!');
    }
}
