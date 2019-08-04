<?php

namespace App\Http\Controllers;
use App\Produk;
use Illuminate\Http\Request;
use Session;
use App\Carts;
use App\Order;
use App\OrderDetail;
use Auth;
class ProdukController extends Controller
{
    public function getIndex()
    {
        
        $dataproduk = Produk::where('id_kategori', 2)->get();
        //dd($dataproduk);
        if(isset(Auth::user()->email))
        {
            $id_user = Auth::user()->id;
            $datacart = Carts::where('id_user', $id_user)->count();
            return view('main.homepage',compact('dataproduk', 'datacart'));
        }
        return view('main.homepage',compact('dataproduk'));
        
    }
    public function getIndexVps()
    {
        $dataproduk = Produk::where('id_kategori', 2)->get();
        if(isset(Auth::user()->email))
        {
            $id_user = Auth::user()->id;
            $datacart = Carts::where('id_user', $id_user)->count();
            return view('main.vps',compact('dataproduk', 'datacart'));
        }
        return view('main.vps',compact('dataproduk'));
    }
    public function getCollocation()
    {
        $dataproduk = Produk::where('id_kategori', 3)->get();
        if(isset(Auth::user()->email))
        {
            $id_user = Auth::user()->id;
            $datacart = Carts::where('id_user', $id_user)->count();
            return view('main.collocation',compact('dataproduk', 'datacart'));
        }
        return view('main.collocation',compact('dataproduk'));
    }
    public function getOrderVPS(Request $request)
    {
        $id_user = Auth::user()->id;
        $id_produk = request()->id;
        $produk = Produk::find($id_produk);
        $datacart = Carts::where('id_user', $id_user)->count();
        $datacarts = Carts::where('id_user', $id_user)->get();
        $totalHarga = Carts::where('id_user', $id_user)->get()->sum('penagihan');
        return view('partials.ordervps',compact('datacart', 'produk', 'datacarts', 'totalHarga'));
    }
    public function getCartToCheckout()
    {
        $id_user = Auth::user()->id;
        $id_produk = request()->id;
        $produk = Produk::find($id_produk);
        $datacart = Carts::where('id_user', $id_user)->count();
        $datacarts = Carts::where('id_user', $id_user)->get();
        $totalHarga = Carts::where('id_user', $id_user)->get()->sum('penagihan');
        return view('partials.checkout',compact('datacart', 'produk', 'datacarts', 'totalHarga'));
    }
    public function getOrderColl(Request $request)
    {
        $id_user = Auth::user()->id;
        $id_produk = request()->id;
        $produk = Produk::find($id_produk);
        $datacart = Carts::where('id_user', $id_user)->count();
        $datacarts = Carts::where('id_user', $id_user)->get();
        $totalHarga = Carts::where('id_user', $id_user)->get()->sum('penagihan');
        return view('partials.ordercollocation',compact('datacart', 'produk', 'datacarts', 'totalHarga'));
    }
    public function getCartMember(Request $request)
    {
        $id_user = Auth::user()->id;

        $datacarts = Carts::where('id_user', $id_user)->get();
        $dataorder = OrderDetail::where('id_user', $id_user)->get();
        $totalHarga = Carts::where('id_user', $id_user)->get()->sum('penagihan');
        $datalayanan = Order::where('id_user', $id_user)->get();
        return view('user.member',compact('datacarts', 'totalHarga', 'dataorder', 'datalayanan'));
    }
}
