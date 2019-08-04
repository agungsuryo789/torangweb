<?php

namespace App\Http\Controllers;

use App\User;
use App\Produk;
use Carbon\Carbon;
use App\Carts;
use Illuminate\Http\Request;
use Session;
use Auth;
class CartController extends Controller
{
    public function index()
    {
        
    }
    public function store(Request $request, $idkat, $id)
    {
        $id_user = Auth::user()->id;
        $produk = Produk::find($id);
        $getcart = Carts::where('id_user',$id_user)->where('id_kategori',$idkat)->first();
        if(!$getcart)
        {
            $datacart = new Carts();
            $datacart->id_user = $id_user;
            $datacart->id_produk = $id;
            $datacart->nama = $produk->nama;
            $datacart->durasi = $request->durasi;
            $datacart->harga = $produk->harga - ($produk->harga * $produk->diskon / 100); //harga setelah diskon
            $datacart->diskon = $produk->diskon;
            $datacart->penagihan = $produk->harga * $request->durasi;
            $datacart->id_kategori = $idkat;
            $datacart->detail = $request->keterangan;
            $datacart->save();
            return redirect('/checkout');
        }
        elseif($getcart)
        {
            $getcart->id_produk = $id;
            $getcart->nama = $produk->nama;
            $getcart->durasi = $request->durasi;
            $getcart->harga = $produk->harga - ($produk->harga * $produk->diskon / 100); //harga setelah diskon
            $getcart->diskon = $produk->diskon;
            $getcart->penagihan = $produk->harga * $request->durasi;
            $getcart->id_kategori = $idkat;
            $getcart->detail = $request->keterangan;
            $getcart->save();
            return redirect('/checkout');
        }
        
    }
    public function destroy(request $request)
    {
        $id_user = Auth::user()->id;
        $cart = Carts::where('id_user',$id_user);
        $cart->delete();
        return redirect()->back()->with('alert-success','Data berhasi dihapus!');
    }
    public function destroyItem(request $request,$id)
    {
        $cart = Carts::where('id',$id);
        $cart->delete();
        return redirect()->back();
    }
}
