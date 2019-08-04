<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>    
    <title>@yield('title')</title>
  </head>
  <style>
    
  </style>
  @yield('style')
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
      <a class="navbar-brand" href="/"><img src="https://tbncdn.freelogodesign.org/93ed1ded-ff6a-4821-9fa4-8e4e8c5ac6e3.png?1552647182207" alt="" width="75px" height="75px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <a href="/" style="text-decoration:none;color:white;"><h2>Torang Hosting</h2></a>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          @yield('auth')
        </ul>
      </div>
    </nav>
    {{-- Sidebar --}}
    <div class="w3-sidebar w3-bar-block w3-collapse w3-card" style="width:20%;" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
        <button class="w3-button w3-xlarge w3-hide-small w3-hide-medium" onclick="w3_hide()" style="float:right;">&#9776;</button>
        <a href={{route('member.cart')}} class="w3-bar-item w3-button"><img src="https://img.icons8.com/ios-glyphs/18/000000/home.png" style="margin-bottom:5px;"> Beranda</a>
        <a href={{route('member.tagihan')}} class="w3-bar-item w3-button"><img src="https://img.icons8.com/material/18/000000/invoice-1.png" style="margin-bottom:5px;"> Tagihan <span class="badge badge-danger">@yield('countTagihan')</span></a>
    </div>
    <div class="w3-main" style="margin-left:20%;" id="main">
        <div style="background-color:black">
            <button class="w3-button w3-xlarge w3-hide-large" onclick="w3_open()" style="color:white;">&#9776;</button>
            <button class="w3-button w3-xlarge w3-hide-small w3-hide-medium" id="toggleOpen" onclick="w3_open2()" style="display:none;color:white;">&#9776;</button>
        </div>
        <div class="w3-container">
            @yield('content')
        </div>
    </div>
          
    {{-- JS --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @yield('js')
    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("mySidebar").style.transitionDelay = "0.4s";
            document.getElementById("mySidebar").style.width = "25%";
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("mySidebar").style.transitionDelay = "0.4s";
        }
        function w3_hide() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("toggleOpen").style.display = "block";
            document.getElementById("mySidebar").style.width = "0%";
            document.getElementById("mySidebar").style.transitionDelay = "0s";
            document.getElementById("main").style.marginLeft = "0%";
        }
        function w3_open2() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("toggleOpen").style.display = "none";
            document.getElementById("mySidebar").style.transitionDelay = "0.2s";
            document.getElementById("mySidebar").style.width = "20%";
            document.getElementById("main").style.marginLeft = "20%";
        }
    </script>
  </body>
</html>
