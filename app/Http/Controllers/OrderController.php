<?php

namespace App\Http\Controllers;
use Session;
use App\Order;
use App\OrderDetail;
use App\Carts;
use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Validator;
class OrderController extends Controller
{
    public function postCheckout(Request $request)
    {
        $id_user = Auth::user()->id;
        $datacarts = Carts::where('id_user', $id_user)->get();
        $cart = Carts::where('id_user',$id_user);
        $totalHarga = Carts::where('id_user', $id_user)->get()->sum('penagihan');

        $dataOrder = new OrderDetail();
        $today = Carbon::now();
        $dataOrder->id_user = $id_user;
        $dataOrder->tgl_order = $today;
        $dataOrder->expired_order = $today->add('day', 4);
        $dataOrder->status_pembayaran = 0;
        $dataOrder->totalcost = $totalHarga;
        $dataOrder->save();
        foreach($datacarts as $datacarts)
        {
            $order = new Order();
            $order->id_orderdetail = $dataOrder->id;
            $order->id_produk = $datacarts->id_produk;
            $order->id_user = $id_user;
            $order->status_produk = 0;
            $order->durasi = $datacarts->durasi;
            $order->keterangan = $datacarts->detail;
            $order->id_produk = $datacarts->id_produk;
            $order->save();
        }
        $cart->delete();
        return redirect()->route('member.tagihan');
    }
    public function getCartTagihan(Request $request)
    {
        $id_user = Auth::user()->id;
        $dataorder = OrderDetail::where('id_user', $id_user)->get();
        return view('user.tagihan',compact('dataorder'));
    }
    public function storeKonfirmasi(Request $request)
    {
        $this->validate($request, [
            'foto' => 'mimes:jpeg,bmp,png,pdf|required'
        ]);
        $id = $request->orderid;
        $order = OrderDetail::where('id',$id)->first();
        $path = $request->file('foto')->store('fotopembayaran', 'public');
        $order->pathfoto = $path;
        $order->tg_konfirmasi = Carbon::now();
        $order->status_pembayaran = 1;
        $order->save();
        return redirect()->back()->with('alert-success','Konfirmasi berhasil , silahkan tunggu balasan dari kami untuk proses terlebih lanjut');;
    }
}
