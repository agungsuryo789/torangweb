<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <title>Myhosting --Silahkan login untuk masuk sebagai member</title>
    <style>
        body{
            background-image: url("https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            background-repeat: no-repeat;
            background-size: cover;
            /* background-color: #3c65a8; */
        }
        .content1{
            background-color: white;
            height:400px;
        }
        .content2{
            background-color: #2f71e2; 
            height:400px;
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
        @if(Session::has('alert-success'))
        <div class="alert alert-success" id="success-alert">
            <button class="close" type="button" data-dismiss="alert">x</button>
            <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
        </div>
        @endif
        @if(isset(Auth::user()->email))
            <script>window.location="/";</script>
        @endif
        @if($message = Session::get('error'))
            <div class="alert alert-danger">
                <button class="close" type="button" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>
            </div>
        @endif
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $errors)
                        <li>{{$errors}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <Div class="container login-class" style="margin-top:150px;">
        <div class="row">
            <div class="col-sm-4 content1" style="padding-top:10px;">
                <h5 class="lead text-left" style="padding-top:10px;">Login Member Area</h5>
                
                <form action="{{route('user.signin')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group text-left" style="padding-top:10px;">
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group text-left" style="padding-top:10px;">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button class="btn btn-primary" type="submit">Log in</button>
                </form>
                <a href="" style="color:black;"><p class="lead text-left" style="font-size:14px;padding-top:15px;">Lupa password?</p></a>
                <a href="/daftarmember" style="color:black;"><p class="lead text-left" style="font-size:14px;padding-top:15px;">Belum mempunyai akun? Daftar sekarang</p></a>
                <a href="/" style="color:black;"><p class="lead text-left" style="font-size:15px;padding-top:20px;">Kembali ke halaman utama</p></a>
            </div>
            <div class="col-sm-8 content2 text-center">
                <h2 class="lead text-left" style="font-size:45px;"><img src="https://tbncdn.freelogodesign.org/93ed1ded-ff6a-4821-9fa4-8e4e8c5ac6e3.png?1552647182207" alt="" width="90px" height="90px">MyHosting</h2>
                <h2 class="lead text-left" style="font-size:34px;margin-top:30px;">Log in to see your Special Offers!</h2>
                <p class="lead text-left" style="font-size:15px;margin-top:30px;">Di MyHosting kami percaya bahwa pelanggan harus menjadi prioritas utama. Kami ada untuk memberikan yang terbaik bagi Anda.</p>
                <a href="/daftarmember"><button type="button" class="btn btn-outline-warning" style="margin-top:30px;">Daftar Sekarang!</button></a>
            </div>
        </div>
    </Div>
    
    {{-- JS --}}
    <script>
        
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
