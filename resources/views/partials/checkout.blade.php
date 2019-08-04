@extends('layout.master-front')
@section('title')
    Checkout Order
@endsection
@section('style')
<style>
  .cart-box{
    max-height:350px;
    white-space: nowrap;
    overflow-x: hidden;
    overflow-y: scroll;
  }
</style>
@endsection
@section('navbar')
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <a class="navbar-brand" href="/"><img src="https://tbncdn.freelogodesign.org/93ed1ded-ff6a-4821-9fa4-8e4e8c5ac6e3.png?1552647182207" alt="" width="75px" height="75px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="/">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="/hosting">Web Hosting</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="/vps">VPS Hosting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/collocation">Collocation</a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item ">
            <p style="margin-top:4px;margin-right:5px;"><img src="https://img.icons8.com/wired/15/000000/phone.png"> 0274-123456</p>
          </li>
          <li class="nav-item">
            <p style="margin-top:4px;margin-right:5px;"><img src="https://img.icons8.com/wired/15/000000/facebook.png"> Facebook</p>
          </li>
          <li class="nav-item">
              <a href={{route('member.cart')}}>
                <button type="button" class="btn btn-light btn-sm">
                <img src="https://img.icons8.com/ios/15/000000/shopping-cart.png"> Keranjang <span class="badge badge-danger">{{$datacart}}</span>
                </button>
              </a>
          </li>
          @if(isset(Auth::user()->email))
          <li class="nav-item dropdown">
            <a href="#" type="button" class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><img src="https://img.icons8.com/metro/15/000000/contacts.png">
              Hi {{Auth::user()->name}}</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width: 16px;">
                <a class="dropdown-item" href={{route('member.cart')}}>Dashboard</a>
                <a class="dropdown-item" href={{route('user.logout')}}>Logout</a>
              </div>
          </li>
          @else
          <li class="nav-item">
            <a href="/userlogin"><button type="button" class="btn btn-light btn-sm"><img src="https://img.icons8.com/metro/15/000000/contacts.png"> Login</button></a>
          </li>
          @endif
        </ul>
      </div>
    </nav>
@endsection
@section('content')
    <div class="container-fluid" style="margin-top:35px;margin-bottom:90px;">
        <div class="row justify-content-around">
            <div class="col-sm col-md col-lg-7 col-xl-7 border">
                <div class="row">
                    <div class="col-sm">
                        <h3 class="text-center">Pilih Metode Pembayaran</h3>
                    </div>
                </div>
                <p>Metode Pembayaran Tersedia</p>
                <strong>Transfer Manual (Verifikasi Manual)</strong>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" aria-label="Radio button for following text input" checked>
                            <img class="img-fluid" src="https://3.bp.blogspot.com/-ZK6W9UlA3lw/V15RGexr3yI/AAAAAAAAAJ4/nkyM9ebn_qg3_rQWyBZ1se5L_SSuuxcDACLcB/s1600/Bank_Central_Asia.png" alt="" width="80" height="25">
                            <img class="img-fluid" src="http://1.bp.blogspot.com/-zkv5u5OGPEM/VKOWnIRRKBI/AAAAAAAAA7E/ovxa4ZW3I0o/s280/Logo%2BBank%2BMandiri.png" alt="" width="80" height="50">
                            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1280px-BNI_logo.svg.png" alt="" width="80" height="20">
                            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_BRI.png" alt="" width="80" height="20">
                        </div>
                    </div>
                </div>
                <div class="accordion border" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-sm" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Cara Pembayaran Transfer Bank <img src="https://img.icons8.com/color/15/000000/sort-down.png">Click me!
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                
                                <p>Lakukan pembayaran sejumlah tepat 3 digit terakhir (JANGAN DIBULATKAN) dan tambahkan berita <b>NH678943</b> agar dapat diproses oleh sistem secara otomatis (tidak perlu konfirmasi secara manual).</p>
                                <p>Pembayaran dapat dilakukan melalui transfer ke rekening berikut:</p>
                                <ul>
                                    <li><b>BCA</b></li>
                                    <p>No. Rekening: 0283116490</p>
                                    <p>a.n: PT. TORANG INDONESIA</p>
                                    <p>Berita : NH678943</p>
                                    <li><b>Bank Mandiri</b></li>
                                    <p>No. Rekening: 1030006055954</p>
                                    <p>a.n: PT. TORANG INDONESIA</p>
                                    <p>Berita : NH678943</p>
                                    <li><b>Bank BNI</b></li>
                                    <p>No. Rekening: 3300030034</p>
                                    <p>a.n: PT. TORANG INDONESIA</p>
                                    <p>Berita : NH678943</p>
                                    <li><b>Bank BRI</b></li>
                                    <p>No. Rekening: 040901000395302</p>
                                    <p>a.n: PT. TORANG INDONESIA</p>
                                    <p>Berita : NH678943</p>
                                </ul>
                                <P><b>Penting</b>: Jika setelah 15 menit dari pembayaran yang Anda lakukan dan tagihan Anda masih belum diproses, maka mohon melakukan konfirmasi secara manual dengan mengikuti panduan pada:</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-20"></div>
            <div class="col-sm col-md col-lg-4 col-xl-4 border text-right cart-box" style="">
                <div style="background-color:#d5dae2;">
                    <h5 class="text-center lead border-bottom" style="margin-top:5px;font-size:20px;"><b>Keranjang Belanja Anda</b></h5>
                </div>
                @if($datacarts->count() > 0)
                    @foreach ($datacarts as $detproduk)
                        <h6 class="text-left lead" style="text-align:left;float:left;font-size:18px;"><b>{{$detproduk->nama}}</b></h6>
                        <a href={{route('cart.destroyItem', ['id' => $detproduk->id])}} style="text-align:right;float:right;"><img src="https://img.icons8.com/flat_round/20/000000/delete-sign.png"></a>
                        <hr class="border-0" style="clear:both;"/>
                        <h6 class="text-left lead" style="text-align:left;float:left;font-size:15px;">{{$detproduk->nama}} untuk {{$detproduk->detail}} periode {{$detproduk->durasi}} bulan:</h6>
                        <h6 class="text-left lead" style="text-align:right;float:right;font-size:15px;">Rp.{{$detproduk->harga}}</h6>
                        <hr class="border-0" style="clear:both;"/>
                        @if($detproduk->diskon > 0)
                        <h6 class="text-left lead" style="text-align:left;float:left;font-size:15px;">Diskon:</h6>
                        <h6 class="text-left lead" style="text-align:right;float:right;font-size:15px;">{{$detproduk->diskon}}%</h6>
                        @endif
                        <hr class="" style="clear:both;"/>
                        <h6 class="text-left lead" style="text-align:left;float:left;font-size:15px;">Subtotal:</h6>
                        <h6 class="text-left lead" style="text-align:right;float:right;font-size:15px;">Rp.{{$detproduk->penagihan - ($detproduk->harga * $detproduk->diskon / 100)}}</h6>
                        <hr class="" style="clear:both;"/>
                    @endforeach
                    <h6 class="text-left lead" style="font-size:15px;">Total</h6>
                    <h2 class="" style="text-align:right;float:right;">Rp.{{$totalHarga}}</h2>
                    <hr class="border-0" style="clear:both;"/>
                    <div class="row">
                        <div class="col-sm col-md col-lg-6">
                            <a class="btn btn-sm btn-ini btn-block" href={{route('cart.deleteCart')}} role="button" style="background-color:#f44242;margin-bottom:5px;color:white;">Bersihkan Keranjang</a>
                        </div>
                        <div class="col-sm col-md col-lg-6">
                            <form action="{{route('order.postCheckout')}}" class="needs-validation" novalidate method="POST">
                              <input type="hidden" disabled>
                              <button type="submit" class="btn btn-sm btn-ini btn-block" style="background-color:#77ffbf;margin-bottom:5px;">Order</button>
                              {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @else
                <h6 class="text-center lead" style="margin-top:15px;">Keranjang belanja anda kosong</h6>
                @endif
            </div>  
        </div>
    </div>
@endsection
@section('js')
    <script>
        //document.getElementById("myTextarea").value = "Nama: No.Hp:";
    </script>
@endsection