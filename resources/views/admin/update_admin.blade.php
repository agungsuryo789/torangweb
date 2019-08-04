@extends('master.app')
@section('content')
<form class="form-horizontal" action="{{ route('list-admin.update', $data->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="col-md-6">
<div class="card">
        <div class="card-header">
          <strong>Edit Karyawan</strong> Form</div>
        <div class="card-body">
            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="username">Username</label>
              <div class="col-md-8">
                <input class="form-control" id="username" type="text" name="username" value="{{ $data->username }}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="nama_karyawan">Nama Karyawan</label>
              <div class="col-md-8">
                <input class="form-control" id="nama_karyawan" type="text" name="nama" value="{{ $data->nama }}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="password">Password</label>
              <div class="col-md-8">
                <input class="form-control" id="password" type="password" name="password">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="cfmPassword">New Password</label>
              <div class="col-md-8">
                <input class="form-control" id="cfmPassword" type="password">
              </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label" for="select1">Role </label>
                <div class="col-md-6">
                  <select class="form-control" id="select1" name="id_role">
                    @foreach ($datas2 as $item)
                      @if ($item->id == $data->id_role)
                        <option  selected="selected" value="{{$item->id}}">{{$item->nama_role}}</option>
                      @else
                        <option  value="{{$item->id}}">{{$item->nama_role}}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
            </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-sm btn-primary" type="submit">
            <i class="fa fa-dot-circle-o"></i> Submit</button>
        </div>
      </div>
    </div>
    </form>
@endsection
