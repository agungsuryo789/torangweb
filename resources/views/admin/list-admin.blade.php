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
              <form action="{{ route('list-admin.destroy', $data->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a href="{{ route('list-admin.edit',$data->id) }}" class=" btn btn-sm btn-success">Ubah</a>
                  <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
              </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-primary" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Admin</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{route('list-admin.store')}}" method="post" id="formCheckPassword">
            {{ csrf_field() }}
        <div class="modal-body">
                <div class="form-group">
                  <label for="nf-email">Username</label>
                  <input class="form-control" id="username" type="text" name="username" placeholder="Masukan username ..">

                </div>
                <div class="form-group">
                  <label for="nf-password">Password</label>
                  <input class="form-control" id="password" type="password" name="password" placeholder="Enter Password..">

                </div>
                <div class="form-group">
                  <label for="nf-password">Verifikasi Password</label>
                  <input class="form-control" id="cfmPassword" type="password" name="cfmPassword" placeholder="Enter Password..">

                </div>
                <div class="form-group">
                    <label for="nf-email">Nama</label>
                    <input class="form-control" id="nama" type="text" name="nama" placeholder="Masukan nama ..">
                </div>
                <div class="form-group row">
                    <label class="col-md-1 col-form-label" for="select1">Role </label>
                    <div class="col-md-6">
                      <select class="form-control" id="select1" name="id_role">
                        @foreach ($datas2 as $item)
                          <option  value="{{$item->id}}">{{$item->nama_role}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit">Save changes</button>
        </div>
      </form>
      </div>
      <!-- /.modal-content-->
    </div>
    <!-- /.modal-dialog-->
  </div>
@endsection