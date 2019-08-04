@extends('layout.master-front')
@section('title')
    Web Hosting Indonesia
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
@section('content')
      {{-- Banner --}}
      <div class="bannerimage">
          <div class="container-fluid text-center bannertext">
              <h1 class="display-4">Web Hosting</h1>
              <h3 class="lead">Web hosting murah dengan fitur cpanel web hosting Indonesia</h3>
              <h4 class="lead">Daftar hosting dengan Space dan Bandwidth Unlimited Buktikan Sekarang!</h4>
              <p class="lead">Garansi uang kembali 30 Hari*</p>
              <a class="btn btn-lg btn-ini" href="/hosting" role="button" style="background-color:#77ffbf;">Learn more</a>
          </div>
      </div>
  
      {{-- Content daftar harga --}}
      <div class="container-fluid" style="margin-top:40px;">
          <div class="row text-center">
              <div class="col col-sm">
                  <h3 class="display-4"><img src="https://img.icons8.com/plasticine/80/000000/paper-plane.png" class="img-fluid"> Paket Web Hosting yang murah untuk anda</h3>
                  <h4>Full SSD dengan Diskon up to 30% untuk Anda</h4>
                  <p class="lead">Tingkatkan performa website Anda dengan dedicated resource VPS murah Indonesia, akses penuh SSH root, serta infrastruktur cloud dengan harga terjangkau. Pilih paket VPS murah & mudah, bayar dengan harga web hosting!</p>
              </div>
          </div>
      </div>
      <div class="container-fluid" style="margin-top:20px;">
          <div class="row">
              <div class="col col-sm-12 table-responsive-lg">
                      <table class="table">
                          <thead class="thead-dark">
                              <tr>
                                  <th scope="col col-sm">Fitur</th>
                                  <th scope="col col-sm">Pelajar</th>
                                  <th scope="col col-sm">Reguler</th>
                                  <th scope="col col-sm">Premium</th>
                                  <th scope="col col-sm">Bisnis</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row">Minimal kontrak</th>
                                  <td>1 bulan</td>
                                  <td>6 bulan</td>
                                  <td>6 bulan</td>
                                  <td>6 bulan</td>
                              </tr>
                              <tr>
                                  <th scope="row">Domain gratis</th>
                                  <td><img src="https://img.icons8.com/color/15/000000/multiply.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                              </tr>
                              <tr>
                                  <th scope="row">Server IIX Indonesia</th>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                              </tr>
                              <tr>
                                  <th scope="row">Bandwith</th>
                                  <td>Unlimited</td>
                                  <td>Unlimited</td>
                                  <td>Unlimited</td>
                                  <td>Unlimited</td>
                              </tr>
                              <tr>
                                  <th scope="row">Disk Space</th>
                                  <td>500Mb</td>
                                  <td>Unlimited</td>
                                  <td>Unlimited</td>
                                  <td>Unlimited</td>
                              </tr>
                              <tr>
                                  <th scope="row">Aktivasi Instan</th>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                              </tr>
                              <tr>
                                  <th scope="row">Gratis Enkripsi SSL</th>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                              </tr>
                              <tr>
                                  <th scope="row">Garansi</th>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                              </tr>
                              <tr>
                                  <th scope="row">Support 24/7</th>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                              </tr>
                              <tr>
                                  <th scope="row">Website Builder</th>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                              </tr>
                              <tr>
                                  <th scope="row">Private Name Server</th>
                                  <td><img src="https://img.icons8.com/color/15/000000/multiply.png"></td>
                                  <td><img src="https://img.icons8.com/color/15/000000/multiply.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                                  <td><img src="https://img.icons8.com/flat_round/15/000000/checkmark.png"></td>
                              </tr>
                              <tr>
                                  <th scope="row"></th>
                                  <td><p>Rp. <b class="lead" style="font-size:50px;">8.000</b>/bln</p></td>
                                  <td><p>Rp. <b class="lead" style="font-size:50px;">20.000</b>/bln</p></td>
                                  <td><p>Rp. <b class="lead" style="font-size:50px;">34.500</b>/bln</p></td>
                                  <td><p>Rp. <b class="lead" style="font-size:50px;">56.000</b>/bln</p></td>
                              </tr>
                              <tr>
                                <th scope="row"></th>
                                <td><a href=""><button type="button" class="btn  btn-block" style="background-color:#77ffbf;height:60px;">Beli Sekarang!</button></a></td>
                                <td><a href=""><button type="button" class="btn  btn-block" style="background-color:#77ffbf;height:60px;">Beli Sekarang!</button></a></td>
                                <td><a href=""><button type="button" class="btn  btn-block" style="background-color:#77ffbf;height:60px;">Beli Sekarang!</button></a></td>
                                <td><a href=""><button type="button" class="btn  btn-block" style="background-color:#77ffbf;height:60px;">Beli Sekarang!</button></a></td>
                              </tr>
                          </tbody>
                      </table>
              </div>
          </div>
      </div>
  
      {{-- Content Keuntungan --}}
      <div class="container-fluid" style="margin-top:50px;">
              <div class="row">
                  <div class="col col-sm-12 text-center">
                      <h3 class="display-4">Murah, Cepat & Berkualitas</h3>
                  </div>
              </div>
              <div class="row text-center" style="padding:10px;margin-top:40px;">
                  <div class="col-sm">
                      <img src="https://img.icons8.com/dusk/64/000000/server.png">
                      <p>Server Berkualitas</p>
                      <p>Lokasi Server Indonesia yang disimpan di Datacenter terbaik dan canggih.</p>
                  </div>
                  <div class="col-sm">
                      <img src="https://img.icons8.com/color/64/000000/price-tag-euro.png">
                        <p>Harga Murah</p>
                        <p>Tersedia paket hosting terbaik dengan kualitas premium sesuai dengan kebutuhan Anda.</p>
                  </div>
                  <div class="col-sm">
                      <img src="https://img.icons8.com/dusk/64/000000/online-support.png">
                        <p>Support 24/7</p>
                        <p>Tim support siap sedia membantu Anda 24 jam setiap hari, 7 hari dalam seminggu non-stop.</p>
                  </div>
              </div>
              <div class="row text-center">
                <div class="col-sm">
                      <img src="https://img.icons8.com/dusk/64/000000/domain.png">
                      <p>Domain Gratis</p>
                      <p>Dengan membeli hosting di Indowebsite Anda berhak mendapatkan gratis domain berdasarkan jenis paket Anda.</p>
                </div>
                <div class="col-sm">
                    <img src="https://img.icons8.com/dusk/64/000000/bookmark-ribbon.png">
                      <p>Fitur Lengkap</p>
                      <p>Tersedia fitur lengkap apa pun yang Anda butuhkan untuk membuat website dapat Anda temukan disini.</p>
                </div>
                <div class="col-sm">
                    <img src="https://img.icons8.com/dusk/64/000000/guarantee.png">
                      <p>Garansi 30 Hari Uang Kembali</p>
                      <p>MyHosting memberikan garansi uang kembali dalam jangka waktu 30 hari pertama setelah layanan diaktifkan.</p>
                </div>
              </div>
            </div>
      
      
@endsection


    
    
