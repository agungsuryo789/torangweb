@extends('layout.master-front')
@section('title')
    Collocation murah dan lengkap
@endsection
@section('style')
    <style>
        body{
          
        }
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
        .row-deskripsi-vps .col-sm{
          margin: 40px;
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
            <h1 class="display-4">Collocation</h1>
            <p class="lead">Solusi datacenter terpecaya dan berkualitas</p>
            <a class="btn btn-lg btn-ini" href="#pricelistcoll" role="button" style="background-color:#77ffbf;">Learn more</a>
        </div>
    </div>

    {{-- Content Deskripsi --}}
    <div class="container-fluid" style="background-color:#d4d7db;font-family: 'Raleway';">
        <div class="row " >
          <div class="col-sm col-xl-10 text-left" style="margin-top:50px;margin-bottom:40px;">
              <h2 class="">Punya server sendiri dan bingung memilih data center mana ?</h2>
              <p class="lead" style="font-size:18px;">Colocation services merupakan layanan rack space yang kami sediakan bagi anda yang memiliki server dan ingin ditempatkan pada data center kami yang memiliki beberapa kelebihan yang tidak dimiliki data center lainnya. Service yang handal dan harga kompetitif, membuat colocation server anda lebih stabil.</p>
          </div>
          <div class="col-sm-12 col-xl-2" style="margin-top:50px;margin-bottom:40px;">
            <img class="img-fluid" src="https://img.icons8.com/clouds/150/000000/server.png">
          </div>
        </div>
    </div>

    {{-- Content Pricelist --}}
    <div class="container-fluid pricelistcoll" style="margin-top:60px;" id="pricelistvps">
        <div class="row text-center">
          <div class="col-sm" >
              <h2 class="lead" style="font-size:35px;"><b>Paket Collocation server yang Tepat untuk Anda</b></h2>
          </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top:40px;">
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
              <p class="display-4" style="font-size:18px;"><b>{{$detail->u}}U</b> Space</p>
              <p class="display-4" style="font-size:18px;"><b>{{$detail->daya}}Watt</b> Power Supply</p>
              <p class="display-4" style="font-size:18px;"><b>Up to {{$detail->bandwith}}Mbps</b> Bandwith International</p>
              <p class="display-4" style="font-size:18px;"><b>Up to {{$detail->iix}}Mbps</b></p>
              <p class="display-4" style="font-size:18px;"><b>Free {{$detail->ip_public}} IP Public</b></p>
              <a class="btn btn-lg btn-ini" href="{{ route('produk.collToOrder', ['idkat' => $produk->id_kategori, 'id' => $produk->id])}}" role="button" style="background-color:#77ffbf;">Beli Sekarang</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Content Deskripsi 2 --}}
    <div style="background-color:#d4d7db;font-family:'Raleway';">
    <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-sm">
                <h1 class="text-center">Fitur Colocation Services</h1>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:35px;">
        <div class="row">
            <div class="col-sm col-md">
              <h3><img src="https://img.icons8.com/carbon-copy/45/000000/server.png" alt="" class="img-fluid">Private Rack</h3>
              <p class="lead">Private Rack Data Center di Gedung Tifa Jakarta untuk kenyamanan server Anda.</p>
            </div>
            <div class="col-sm col-md">
              <h3><img src="https://img.icons8.com/doodle/45/000000/internet.png" alt="" class="img-fluid">Internet Bandwidth</h3>
              <p class="lead">Local Bandwidth up to 10 Gbps dan Shared International Bandwidth up to 50 Mbps.</p>
            </div>
            <div class="col-sm col-md">
              <h3><img src="https://img.icons8.com/office/45/000000/filing-cabinet.png" alt="" class="img-fluid">Rack System</h3>
              <p class="lead">Close Rack system by Fortuna Rack, integrated cooling system and UPS system.</p>
            </div>
            <div class="w-100"></div>
            <div class="col-sm col-md">
              <h3><img src="https://d2slcw3kip6qmk.cloudfront.net/marketing/enterprise/99.9-uptime@2x.png" alt="" class="img-fluid" width="45px" height="45px">99% Uptime</h3>
              <p class="lead">Service Level Agreement 99% Uptime, full redundancy system disisi elektrikal & internet.</p>
            </div>
            <div class="col-sm col-md">
              <h3><img src="https://img.icons8.com/dusk/45/000000/cooling.png" alt="" class="img-fluid">Cooling System</h3>
              <p class="lead">Integrated cooling system, data center standard cooling system.</p>
            </div>
            <div class="col-sm col-md">
              <h3><img src="https://img.icons8.com/office/45/000000/maintenance.png" alt="" class="img-fluid">Self Managed</h3>
              <p class="lead">Self server managed and free ‘Remote On Hands’ Reboot.</p>
            </div>
        </div>
    </div>
    </div>

@endsection
