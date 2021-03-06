@extends('master.app')
@section('content')
<div class="card">
        <div class="card-header">
          <strong>Normal</strong> Form</div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="nf-email">Email</label>
              <input class="form-control" id="nf-email" type="email" name="nf-email" placeholder="Enter Email..">
              <span class="help-block">Please enter your email</span>
            </div>
            <div class="form-group">
              <label for="nf-password">Password</label>
              <input class="form-control" id="nf-password" type="password" name="nf-password" placeholder="Enter Password..">
              <span class="help-block">Please enter your password</span>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <button class="btn btn-sm btn-primary" type="submit">
            <i class="fa fa-dot-circle-o"></i> Submit</button>
          <button class="btn btn-sm btn-danger" type="reset">
            <i class="fa fa-ban"></i> Reset</button>
        </div>
      </div>
@endsection