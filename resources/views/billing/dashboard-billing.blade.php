@extends('master.app')
@section('content')
<div class="card">
        <div class="card-header">
          <i class="fa fa-align-justify"></i> List Admin
          <button class="btn btn-primary float-right" type="button" data-toggle="modal" data-target="#primaryModal">
              <i class="fa fa-plus"></i>&nbsp;Tambah Admin</button>
        </div>
        @if(Session::has('alert-success'))
        <div class="alert alert-success">
            <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
        </div>
        @endif
        <div class="card-body">
          <table class="table table-responsive-sm">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Role</th> 
                <th style="width:  20%">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($datas as $data)
              <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->username}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->role->nama_role}}</td>
                <td >
                    <a href="{{ route('dashboard-billing.edit',$data->id) }}" class=" btn btn-sm btn-success">Ubah</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
@endsection