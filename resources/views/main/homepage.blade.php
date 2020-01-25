@extends('layout.master-front')
@section('title')
    Torang Hosting
@endsection
@section('style')
   <style>
    .bannerimage{
      background-image: url("https://images.pexels.com/photos/1714205/pexels-photo-1714205.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
      background-color: #cccccc;
      height: 600px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      
    }
    .bannertext{
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }
    .content-product{
      margin-top: 25px;
      background-image: url("https://www.pixelstalk.net/wp-content/uploads/images2/White-cloud-minimalistic-wallpapers.png");
      background-color: aqua;
      color: beige;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .content-product-text .card{
      margin-top: 20px;
      margin-bottom: 30px;
      background-color: transparent;
      border-color:grey;
    }
    .content-product .card{
      background-color: #f4f7f6;
      opacity: 0.89898;
      color: black;
    }
    .card-premium{
      border-color:#7cdcef;
    }
    .link-hover {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100%;
      width: 100%;
      opacity: 0;
      transition: .5s ease;
      background-color: whitesmoke;
    }
    .card:hover .link-hover {
      opacity: 1;
    }
    .text-link{
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      text-align: center;
      background-color: #4CAF50;
      color: white;
      font-size: 20px;
    }
    .content-deskripsi{
      background-image: url("https://images.pexels.com/photos/1624895/pexels-photo-1624895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .content-deskripsi .box-deskripsi{
      background-color: #3e4654;
      opacity: 0.9;
      
    }
    .box-deskripsi-text{
      margin-top: 40px;
      color: white;
    }
    .box-deskripsi-text p{
      margin-top: 20px;
      font-size: 25px;
      font-family: 'Alegreya';
    }
    .footer-class{
      background-color:#272828;
      color:white;
      font-family: 'Alegreya';
      font-size: 15px;
      margin: 0;
    }
    .link-footer li a{
      text-decoration: none;
      color: white;
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
          @if(isset(Auth::user()->email))
          <li class="nav-item">
              <a href={{route('member.cart')}}>
                <button type="button" class="btn btn-light btn-sm">
                <img src="https://img.icons8.com/ios/15/000000/shopping-cart.png"> Keranjang <span class="badge badge-danger">{{$datacart}}</span>
                </button>
              </a>
          </li>
          @else
          <li class="nav-item">
              <a href={{route('member.cart')}}>
                <button type="button" class="btn btn-light btn-sm">
                <img src="https://img.icons8.com/ios/15/000000/shopping-cart.png"> Keranjang <span class="badge badge-danger"></span>
                </button>
              </a>
          </li>
          @endif
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
    {{-- Banner --}}
    <div class="bannerimage">
        <div class="container-fluid text-center bannertext">
            <h1 class="display-4">Myhosting Indonesia</h1>
            <p class="lead">VPS Murah dengan teknologi Cloud Computing dengan performa tercepat!</p>
            <p class="lead">Mulai dari</p>
        <p class="lead">Rp.<small class="lead" style="font-size:50px;">{{$dataproduk[0]->harga}}</small>/bln</p>
            <a class="btn btn-lg btn-ini" href="/vps" role="button" style="background-color:#77ffbf;">Learn more</a>
        </div>
    </div>

    {{-- Content Deskripsi --}}
    <div class="container-fluid content-deskripsi">
      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 box-deskripsi">
              <div class="box-deskripsi-text">
                <h1 class="display-4">Kenapa menggunakan jasa Hostingku?</h1>
                <p><img src="https://img.icons8.com/color/24/000000/cloud-checked.png"> Garansi 30 hari uang kembali</p>
                <p><img src="https://img.icons8.com/color/24/000000/cloud-checked.png"> Server Cepat dan Handal</p>
                <P><img src="https://img.icons8.com/color/24/000000/cloud-checked.png"> Jaminan Harga Termurah</P>
                <p><img src="https://img.icons8.com/color/24/000000/cloud-checked.png"> Support 24/7</p>
                <p><img src="https://img.icons8.com/color/24/000000/cloud-checked.png"> Fasilitas cPanel hosting murah unlimited dengan CloudLinux dan SpamExperts bisa Anda dapatkan di</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Content Pricelist --}}
    <div class="container-fluid" style="margin-top:40px;">
        <div class="row text-center">
          <div class="col-sm" >
              <h3 class="display-4">Paket Cloud VPS Hosting yang Tepat</h3>
              <h5>Full SSD dengan Diskon up to 30% untuk Anda</h5>
              <p class="lead" style="font-size:15px;">Tingkatkan performa website Anda dengan dedicated resource VPS murah Indonesia, akses penuh SSH root, serta infrastruktur cloud dengan harga terjangkau. Pilih paket VPS murah & mudah, bayar dengan harga web hosting!</p>
          </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top:40px;" id="pricelistvps">
        <div class="row text-center">
          <div class="col-sm" >
              <h3 class="display-4">Paket Cloud VPS Hosting yang Tepat</h3>
              <h5>Full SSD dengan Diskon up to 30% untuk Anda</h5>
              <p class="lead" style="font-size:15px;">Tingkatkan performa website Anda dengan dedicated resource VPS murah Indonesia, akses penuh SSH root, serta infrastruktur cloud dengan harga terjangkau. Pilih paket VPS murah & mudah, bayar dengan harga web hosting!</p>
          </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top:20px;">
      <div class="row text-center">
        @foreach ($dataproduk as $produk)
        <div class="col-sm">
          <div class="card">
            <div class="card-body ">
              <h5 class="card-title lead" style="font-size:35px;">{{$produk->nama}}</h5>
              <p class="card-text display-4" style="font-size:18px;">Rp. <small style="font-size:25px;font-family: 'Amaranth';">{{$produk->harga}}</small>/bln</p>
              @php
               $detail = json_decode($produk->deskripsi);   
              @endphp
              <p class="display-4" style="font-size:18px;">Ram {{$detail->ram}}</p>
              <p class="display-4" style="font-size:18px;">Core {{$detail->core}}</p>
              <p class="display-4" style="font-size:18px;">HDD {{$detail->hdd}}</p>
              <a class="btn btn-lg btn-ini" href="{{ route('produk.addToOrder', ['idkat' => $produk->id_kategori, 'id' => $produk->id])}}" role="button" style="background-color:#77ffbf;">Beli Sekarang</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Content Promo --}}
    <div class="container-fluid content-product text-center">
      <h1 class="display-4">Small or large. We have plans for everyone</h1>
      <div class="row content-product-text no-gutters justify-content-center ">
          {{-- <div class="card" style="width: 15rem;">
              <div class="card-body">
                <img src="https://img.icons8.com/dusk/64/000000/geography-filled.png">
                <h5 class="card-title">Web Hosting</h5>
                <p class="card-text">Get started with a web hosting solution optimized for the best WordPress performance.</p>
                <div class="link-hover">
                  <div class="text-link"><a href="/hosting" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">Selengkapnya</a>
                  </div>  
                </div>
              </div>
          </div> --}}
          <div class="card" style="width: 15rem;">
            <div class="card-body">
              <img src="https://img.icons8.com/dusk/64/000000/cloud.png">
              <h5 class="card-title">VPS Hosting</h5>
              <p class="card-text">Get root access, dedicated resources, and complete freedom to set your own rules.</p>
              <div class="link-hover">
                <div class="text-link"><a href="/vps" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">Selengkapnya</a></div>  
              </div>
            </div>
          </div>
          <div class="card" style="width: 15rem;">
            <div class="card-body">
              <img src="https://img.icons8.com/dusk/64/000000/web.png">
              <h5 class="card-title">Collocation</h5>
              <p class="card-text">Powerful and managed web hosting solution for large scale projects and high-traffic sites.</p>
              <div class="link-hover">
                <div class="text-link"><a href="#" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">Selengkapnya</a></div>  
              </div>
            </div>
          </div>
      </div>
    </div>

    {{-- Content 4 --}}
    <div class="container-fluid text-center" style="margin-bottom:70px;">
      <div class="row">
        <div class="col col-sm" style="margin-top:50px;">
          <h1 class="display-1">Garansi 30 Hari uang kembali</h1>
        </div>
      </div>
      <div class="row">
        <div class="col col-sm" style="margin-top:60px;">
          <img class="img-fluid" src="https://www.hostinger.com/assets/images/guarantee-badge-fdc4599f16.png">
        </div>
      </div>
    </div>

    {{-- Footer --}}
      
@endsection

