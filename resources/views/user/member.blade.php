@extends('layout.memberarea')
@section('title')
    Beranda member
@endsection
@section('auth')
    @if(isset(Auth::user()->email))
    <li class="nav-item dropdown">
    <a href="#" type="button" class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><img src="https://img.icons8.com/metro/15/000000/contacts.png">
        Hi {{Auth::user()->name}}</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width: 16px;">
        <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href={{route('user.logout')}}>Logout</a>
        </div>
    </li>
    @else
    <li class="nav-item">
    <a href="/userlogin"><button type="button" class="btn btn-light btn-sm"><img src="https://img.icons8.com/metro/15/000000/contacts.png"> Login</button></a>
    </li>
    @endif
@endsection
@section('content')
    <h3 class="display-4" style="font-size:32px;">Beranda...</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 text-right table-responsive" style="margin-top:20px;">
                <div>
                    <h5 class="text-center lead" style="margin-top:5px;font-size:25px;"><b>Keranjang Belanja Anda</b></h5>
                </div>
                <table class="table text-left table-borderless">
                    @if($datacarts->count() > 0)
                    <tr>
                        <th>Produk & Layanan</th>
                        <th>Durasi</th>
                        <th>Harga</th>
                        <th>Diskon</th>
                        <th>Penagihan</th>
                        <th>Keterangan</th>
                    </tr>
                    @foreach ($datacarts as $detproduk)
                    <tr>
                        <td>{{$detproduk->nama}}</td>
                        <td>{{$detproduk->durasi}} bulan</td>
                        <td>Rp. {{$detproduk->harga}}</td>
                        <td>{{$detproduk->diskon}}%</td>
                        <td>Rp. {{$detproduk->penagihan - ($detproduk->harga * $detproduk->diskon / 100)}}</td>
                        <td>{{$detproduk->detail}}</td>
                        <td><a href={{route('cart.destroyItem', ['id' => $detproduk->id])}} style="text-align:right;float:right;"><img src="https://img.icons8.com/flat_round/20/000000/delete-sign.png"></a></td>
                    </tr>
                    @endforeach
                    <th>Total</th>
                    <th colspan="4"></th>
                    <th>Rp. {{$totalHarga}}</th>
                </table>
                <div class="row">
                    <div class="col-sm col-md col-lg-6" style="text-align:right;">
                        <a class="btn btn-sm btn-ini" href={{route('cart.deleteCart')}} role="button" style="background-color:#f44242;margin-bottom:5px;color:white;">Bersihkan Keranjang</a>
                    </div>
                    <div class="col-sm col-md col-lg-6" style="text-align:left;">
                        <a class="btn btn-sm btn-ini" href="/checkout" role="button" style="background-color:#77ffbf;margin-bottom:5px;">Checkout Sekarang</a>
                    </div>
                </div>
                @else
                    <h6 class="text-center lead" style="margin-top:15px;">Keranjang belanja anda kosong</h6>
                @endif
            </div>
            <div class="col-sm-12 col-md-12 text-right table-responsive" style="margin-top:50px;">
                <div>
                    <h5 class="text-center lead" style="margin-top:5px;font-size:25px;"><b>Layanan Anda</b></h5>
                </div>
                <table class="table text-left table-borderless">
                    @if($datalayanan->count() > 0)
                    <tr>
                        <th>Produk & Layanan</th>
                        <th>Keterangan</th>
                        <th>Durasi</th>
                        <th>Status Layanan</th>
                        <th>Tanggal Aktif</th>
                        <th>Tanggal Expired</th>
                    </tr>
                    @foreach ($datalayanan as $datalayanan)
                    <tr>
                        @if($datalayanan->id_produk == 1)
                        <td>VPS 1</td>
                        @elseif($datalayanan->id_produk == 2)
                        <td>VPS 2</td>
                        @elseif($datalayanan->id_produk == 3)
                        <td>VPS 3</td>
                        @elseif($datalayanan->id_produk == 4)
                        <td>VPS 4</td>
                        @elseif($datalayanan->id_produk == 5)
                        <td>VPS 5</td>
                        @elseif($datalayanan->id_produk == 6)
                        <td>VPS 6</td>
                        @elseif($datalayanan->id_produk == 7)
                        <td>Collocation 1</td>
                        @elseif($datalayanan->id_produk == 8)
                        <td>Collocation 2</td>
                        @elseif($datalayanan->id_produk == 9)
                        <td>Collocation 3</td>
                        @elseif($datalayanan->id_produk == 10)
                        <td>Collocation 4</td>
                        @endif
                        <td>{{$datalayanan->keterangan}}</td>
                        <td>{{$datalayanan->durasi}} bulan</td>
                        @if($datalayanan->status_produk == 0)
                        <td><button class="btn btn-outline-secondary" disabled>Belum Aktif</button></td>
                        @elseif($datalayanan->status_produk == 1)
                        <td><button class="btn btn-outline-info" disabled>Sedang Dikerjakan</button></td>
                        @elseif($datalayanan->status_produk == 2)
                        <td><button class="btn btn-outline-success" disabled>Aktif</button></td>
                        @endif
                        <td>{{$datalayanan->tgl_aktif}}</td>
                        <td>{{$datalayanan->tgl_expired}}</td>
                    </tr>
                    @endforeach
                </table>
                @else
                    <h6 class="text-center lead" style="margin-top:15px;">Anda belum mempunyai layanan yang aktif</h6>
                @endif
            </div>
        </div>
    </div>   
@endsection
@section('countTagihan')
    {{count($dataorder)}}
@endsection