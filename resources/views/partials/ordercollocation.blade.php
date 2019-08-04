@extends('layout.master-front')
@section('title')
    Order Collocation Server
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
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="display-4 text-left border-bottom">Konfigurasi VPS Hosting</h1>
                <h5 class="text-left lead">Konfigurasikan server anda lalu checkout.</h5>
            </div>   
        </div>
    </div>
    <div class="container" style="margin-top:35px;margin-bottom:80px;">
        <div class="row justify-content-around">
            <div class="col-sm col-md col-lg-7 col-xl-7 border text-right">
                <form action="{{route('cart.addToStore', ['idkat' => request()->idkat, 'id' => request()->id ])}}" class="needs-validation" novalidate method="POST">
                    <h5 class="text-left lead" style="margin-top:5px;">Pilih Periode Penagihan</h5>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="durasi">
                          <option value=1>Rp. {{$produk->harga}} (1 bulan)</option>
                          <option value=3>Rp. {{$produk->harga * 3}} (3 bulan)</option>
                          <option value=6>Rp. {{$produk->harga * 6}} (6 bulan)</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-lg btn-ini" style="background-color:#77ffbf;">Beli Sekarang</button>
                    {{ csrf_field() }}
                </form>
            </div> 
            <div class="w-20"></div>
            <div class="col-sm col-md col-lg-4 col-xl-4 border text-right cart-box" style="">
                <div style="background-color:#d5dae2;">
                    <h5 class="text-center lead border-bottom" style="margin-top:5px;font-size:25px;"><b>Keranjang Belanja Anda</b></h5>
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
                            <a class="btn btn-sm btn-ini btn-block" href="/checkout" role="button" style="background-color:#77ffbf;margin-bottom:5px;">Checkout Sekarang</a>
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
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
            })();
    </script>
@endsection