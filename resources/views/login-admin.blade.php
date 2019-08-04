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
            background-image: url("http://static.simpledesktops.com/uploads/desktops/2019/03/04/zurich.png");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .login-class{
            height: 300px;
            max-width: 400px;
            position:fixed;
            top: 50%;
            left: 50%;
            margin-top: -9em; /*set to a negative number 1/2 of your height*/
            margin-left: -15em; /*set to a negative number 1/2 of your width*/
        }
    </style>
  </head>
  <body>
    <Div class="container-fluid login-class">
        <div class="row">
            <div class="col-md">
               <div class="card">
                <div class="card-body text-center">
                    <img src="https://img.icons8.com/ios/100/000000/user-male-circle.png" class="img-fluid justify-content-center" width="100px" height="100px">
                    <p class="lead">Admin Login</p>
                    <div class="form-group text-left">
                        <input type="text" class="form-control" id="formUsername" placeholder="Username" required>
                    </div>
                    <div class="form-group text-left">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <a href="#" class="btn btn-primary btn-block">Log in</a>
                </div>
                </div> 
            </div>
        </div>
    </Div>
    
    {{-- JS --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}
  </body>
</html>
