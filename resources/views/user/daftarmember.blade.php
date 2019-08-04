<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <title>Hello, world!</title>
    <style>
        body{
            background-image: url("https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .content1{
            background-color: white;
        }
        .content2{
            background-color: #2f71e2; 
            color: white;
            opacity: 0.9;
        }
        .content1 .form-group .form-control{
            border: none;
            border-bottom: 2px solid grey;
        }
    </style>
  </head>
  <body>
      @if($message = Session::get('error'))
            <div class="alert alert-danger" id="alertDanger">
                <button class="close" type="button" onclick="close()">x</button>
                <strong>{{$message}}</strong>
            </div>
        @endif
    <Div class="container login-class" style="margin-top:130px;">
        <div class="row">
            <div class="col-sm-7 content1" style="padding-top:10px;">
                <h5 class="lead text-left" style="padding-top:10px;font-size:23px;">Daftar member sekarang juga!</h5>
                <form action="{{route('daftarmember.store')}}" method="post" id="formCheckPassword">
                    {{ csrf_field() }}
                <div class="row" style="margin-top:10px;">
                    <div class="col-sm" >
                        <p style="font-size:16px;">Email *</p>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="masukkan email.." required>
                    </div>
                    <div class="col-sm">
                        <p style="font-size:16px;">Password *</p>
                        <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password.." required>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-sm" style="margin-top:10px;">
                        <p style="font-size:16px;">Nama lengkap *</p>
                        <input class="form-control" id="name" name="name" type="text" placeholder="masukkan nama lengkap.." required>
                    </div>
                    <div class="col-sm" style="margin-top:10px;">
                        <p style="font-size:16px;">Nomor HP *</p>
                        <input class="form-control" id="no_hp" name="no_hp" type="text" placeholder="masukkan nomor HP.." required>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-sm" style="margin-top:10px;">
                        <p style="font-size:16px;">Alamat *</p>
                        <input class="form-control" id="alamat" name="alamat" type="text" placeholder="masukkan alamat.." required>
                    </div>
                </div>
                <button class="btn btn-secondary" type="button" data-dismiss="modal" style="margin-top:10px;">Close</button>
                <button class="btn btn-primary" type="submit" style="margin-top:10px;">Save changes</button>
                <a href="/" style="color:black;"><p class="lead text-left" style="font-size:15px;padding-top:20px;">< Kembali ke halaman utama</p></a>
                </form>
            </div>
            <div class="col-sm-5 content2 text-center">
                <h2 class="lead text-left" style="font-size:45px;"><img src="https://tbncdn.freelogodesign.org/93ed1ded-ff6a-4821-9fa4-8e4e8c5ac6e3.png?1552647182207" alt="" width="90px" height="90px">MyHosting</h2>
                <h2 class="lead text-left" style="font-size:34px;margin-top:30px;">Log in to see your Special Offers!</h2>
                <p class="lead text-left" style="font-size:15px;margin-top:30px;">Di MyHosting kami percaya bahwa pelanggan harus menjadi prioritas utama. Kami ada untuk memberikan yang terbaik bagi Anda.</p>
                <a href="/userlogin"><button type="button" class="btn btn-outline-warning" style="margin-top:30px;">Login sekarang</button></a>
            </div>
        </div>
    </Div>
    
    {{-- JS --}}
    <script>
        function close() {
            document.getElementById("alertDanger").style.display = "none";
            document.getElementById("mySialertDangerdebar").style.transitionDelay = "0.4s";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
