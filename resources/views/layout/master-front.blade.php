<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="hosting, vps, collocation, webhosting">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>    
    <title>@yield('title')</title>
  </head>
  <style>
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
  @yield('style')
  <body>
    @yield('navbar')
    @yield('content')
    
    <footer class="page-footer lead">
        <div class="container-fluid footer-class">
          <div class="row">
            <div class="col-sm-3">
              <h4>Tentang kami</h4>
              <div class="row">
                <div class="col-sm-6 tentang-kami">
                  <p>Telp: 0274-2885822
                     WA: 085943258274
                     Senin - Minggu 
                     24/7</p>
                </div>
                <div class="w-100"></div>
                <div class="col-sm-6">
                  <p>Jl. Palagan Tentara Pelajar
                  No 81 Jongkang, Sariharjo, Ngaglik, Sleman
                  Daerah Istimewa Yogyakarta 
                  55581</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <h4>Layanan</h4>
              <ul class="link-footer" style="list-style-type: none;margin: 0;padding: 0;">
                <li><a href="/hosting">Web Hosting</a></li>
                <li><a href="/vps">VPS Hosting</a></li>
                <li><a href="/collocation">Collocation</a></li>
                <li><a href="/hosting">Hosting murah</a></li>
                <li><a href="/vps">VPS Hosting murah</a></li>
              </ul>
            </div>
            <div class="col-sm-6">
              <h4>PEMBAYARAN</h4>
              <img src="https://www.niagahoster.co.id/assets/images/new_design/logo-bni-bordered.svg" alt="" width="80" height="80">
              <img src="https://www.niagahoster.co.id/assets/images/new_design/logo-bca-bordered.svg" alt="" width="80" height="80">
              <img src="https://www.niagahoster.co.id/assets/images/new_design/bri.svg" alt="" width="80" height="80">
              <img src="https://www.niagahoster.co.id/assets/images/new_design/atmbersama.svg" alt="" width="80" height="80">
              <img src="https://www.niagahoster.co.id/assets/images/new_design/mandiriclickpay.svg" alt="" width="80" height="80">
              <img src="https://www.niagahoster.co.id/assets/images/new_design/prima.svg" alt="" width="80" height="80">
            </div>
          </div>
        </div>
    </footer>

    {{-- JS --}}
    @yield('js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}
  </body>
</html>
