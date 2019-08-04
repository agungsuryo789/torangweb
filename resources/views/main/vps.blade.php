@extends('layout.master-front')
@section('title')
    VPS Hosting murah dan lengkap
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
            <h1 class="display-4">VPS Hosting</h1>
            <h3 class="lead">VPS Murah dengan teknologi Cloud Computing dengan performa tercepat!</h3>
            <p class="lead">Solusi server VPS murah namun berkualitas</p>
            <a class="btn btn-lg btn-ini" href="#" role="button" style="background-color:#77ffbf;">Learn more</a>
        </div>
    </div>

    {{-- Content Deskripsi --}}
    <div class="container-fluid content-deskripsi-vps" style="margin-top:35px;">
      <div class="row" >
        <div class="col-sm">
          <h1 class="display-4 text-center">Solusi cloud server dengan harga termurah</h1>
          <div class="row" style="margin-top:35px;">
            <div class="col-sm-6 box-deskripsi-vps">
              <h4 class="lead" style="font-size:25px;">VPS murah dengan keandalan & performa virtual server terbaik! Kecepatan virtual server tanpa batas.</h4>
              <img src="https://www.bluegrasswebworks.com/wp-content/uploads/2018/05/banner-img.png" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6">
              <div class="row text-center row-deskripsi-vps">
                <div class="col-sm">
                  <h2 class="lead" style="font-size:25px;"><img src="https://img.icons8.com/dotty/50/000000/dns.png"> IP Dedicated</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-sm">
                  <h2 class="lead" style="font-size:25px;"><img src="https://img.icons8.com/wired/50/000000/password.png"> Akses Root penuh</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-sm">
                  <h2 class="lead" style="font-size:25px;"><img src="https://img.icons8.com/wired/50/000000/ssd.png"> SSD Disk Drive</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-sm">
                  <h2 class="lead" style="font-size:25px;"><img src="https://img.icons8.com/dotty/50/000000/network-cable.png"> Network 100MB/S</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Content Pricelist --}}
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

    {{-- Content Deskripsi 2 --}}
    <div class="container-fluid" style="margin-top:40px;">
      <div class="row text-center">
        <div class="col-sm">
          <p class="display-4">Performa Website Lebih Hebat dengan Cloudflare dan VPS Hosting</p>
          <div class="row" style="margin-top:30px;">
            <div class="col-sm-5 text-right">
              <img src="https://www.niagahoster.co.id/assets/images/vps-cloud/cloudflare-logo-horizontal.svg" class="img-fluid">
            </div>
            <div class="col-sm-7 text-left">
              <p>Menggunakan teknologi Cloudflare, website yang Anda kelola dapat bekerja lebih baik. Optimasi dari sisi kecepatan, keamanan, hingga SEO dapat Anda lakukan menggunakan fitur-fitur ini. VPS Hosting menjamin keamanan website Anda yang lebih baik, terlindung dari ancaman hacker, malware, serta DDoS penyebab overload. VPS server yang kami miliki tangguh dan bisa Anda andalkan kapan saja.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="margin-top:40px;">
      <div class="row text-center">
        <div class="col-sm">
          <p class="display-4">Pertanyaan Yang Sering Diajukan</p>
          <div class="row" style="margin-top:30px;">
            <div class="col-sm text-left">
              <p class="font-weight-bold">Apa itu VPS?</p>
              <p>Layanan VPS menggabungkan keleluasaan ala dedicated hosting dan harga terjangkau milik layanan shared hosting. Sesuai namanya, VPS (Virtual Private Server) merupakan layanan hosting dengan server yang dikonfigurasi secara virtual.</p>
              <p class="font-weight-bold">Bagaimana cara kerja VPS?</p>
              <p>Dalam VPS hosting, server pada data center dibagi menjadi beberapa bagian secara virtual. Tiap server virtual ini memiliki resource masing-masing seperti operating system, bandwidth, serta disk space sehingga perubahan yang dilakukan oleh pengguna lain tidak akan memengaruhi performa website Anda.</p>
              <p class="font-weight-bold">Mengapa saya memerlukan VPS?</p>
              <p>Kami sangat merekomendasikan layanan VPS cloud hosting Indonesia bagi website yang membutuhkan resource besar. VPS hosting memiliki resource sendiri yang mampu memastikan website Anda berjalan tanpa gangguan, keunggulan yang tidak dimiliki layanan shared hosting. Keleluasaan kontrol, konfigurasi, kustomisasi, serta privasi penggunaan juga akan menjadi milik Anda sepenuhnya. Berkat teknologi cloud, Anda pun dapat melakukan upgrade secara sempurna tanpa mengorbankan performa!
                Segala kelebihan yang ditawarkan VPS cloud hosting memerlukan pemahaman teknis yang mumpuni mengingat konfigurasi VPS cukup rumit bagi pengguna awam.
              </p>
              <p class="font-weight-bold">Apa Control Panel VPS yang bisa saya gunakan?</p>
              <p>Layanan VPS Myhosting menyediakan paket tanpa control panel, juga pilihan menggunakan Webuzo maupun WHM cPanel. Pilihan ini sifatnya opsional mengingat ada beragam control panel lain yang bisa Anda gunakan. Anda bisa memilih paket tanpa control panel jika berencana menggunakan control panel VPS Anda sendiri.
              </p>
              <p class="font-weight-bold">Apakah saya bisa melakukan upgrade VPS?</p>
              <p>Tentu saja! Resource layanan VPS murah Niagahoster dapat Anda tingkatkan kapan pun Anda inginkan dengan cara klik tombol "Upgrade" pada member area. Silakan hubungi tim customer support kami untuk bantuan lebih lanjut.
              </p>
              <p class="font-weight-bold">Apakah Myhosting menyediakan layanan Managed VPS?</p>
              <p>Untuk saat ini Niagahoster hanya menyediakan layanan self-managed VPS. Artinya, segala bentuk instalasi & konfigurasi VPS perlu Anda lakukan sendiri. Meskipun demikian, kami menyediakan beragam tutorial guna membantu Anda melakukan instalasi hingga website dapat diakses.
              </p>
              <p class="font-weight-bold">Apakah Saya Mendapatkan Bantuan Migrasi ke VPS?</p>
              <p>Ya, tentu saja! Menggunakan layanan VPS Niagahoster, Anda akan mendapatkan bantuan instalasi cPanel di VPS dan bantuan migrasi dari cPanel hosting ke VPS cPanel oleh tim customer support secara gratis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
