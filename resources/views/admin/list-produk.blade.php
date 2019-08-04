@extends('master.app')
@section('content')
<div class="card">
  <div class="card-header">
    <i class="fa fa-align-justify"></i> List {{$view}}
    <button class="btn btn-primary float-right" type="button" data-toggle="modal" data-target="#primaryModal">
        <i class="fa fa-plus"></i>&nbsp;Tambah {{$view}}</button>
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
          <th>Nama Paket</th>
          <th>Harga</th>
          <th>Diskon</th> 
          <th>Status Produk</th>
          <th>Status Diskon</th>
          <th>Lama Paket</th>
          <th>Kategori</th>
          <th style="width:  20%">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datas as $data)
        <tr>
          <td>{{$data->id}}</td>
          <td>{{$data->nama}}</td>
          <td>{{$data->harga}}</td>
          <td>
            @if ($data->diskon == 0)
            <span class="badge badge-danger">Tidak Ada</span>
            @else
            {{$data->diskon}}%  
            @endif  
          </td>
          <td>
              @switch($data->status_produk)
                  @case(1)
                  <span class="badge badge-success">Ready</span>
                      @break
                  @case(0)
                  <span class="badge badge-danger">Kosong</span>
                      @break
                  @default
              @endswitch
            </td>
          <td>
            @switch($data->status_diskon)
                @case(1)
                <span class="badge badge-success">Ready</span>
                    @break
                @case(0)
                <span class="badge badge-danger">Kosong</span>
                    @break
                @default
            @endswitch
            </td>
            <td>{{$data->expire_date}} Bulan</td>
          <td>{{$data->kategori->nama_kategori}}</td>
          <td >
            @if ($view == 'Vps')
            <form action="{{ route('list-vps.destroy', $data->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{ route('list-vps.edit',$data->id) }}" class=" btn btn-sm btn-success">Ubah</a>
                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
            </form>
            @else
            <form action="{{ route('list-collocation.destroy', $data->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{ route('list-collocation.edit',$data->id) }}" class=" btn btn-sm btn-success">Ubah</a>
                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
            </form>
            @endif

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@if($view == 'Vps')
<div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-primary" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah VPS</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{route('list-vps.store')}}" method="post">
            {{ csrf_field() }}
        <div class="modal-body">
                <div class="form-group">
                  <label for="nama">Nama Paket</label>
                  <input class="form-control" id="nama" type="text" name="nama" placeholder="Masukan Nama Paket ..">
                </div>
                <div class="form-group">
                  <label for="expire_date">Lama Paket</label>
                  <div class="input-prepend input-group">
                      <input class="form-control" id="expire_date" size="16" type="text" name="expire_date">
                      <div class="input-group-prepend">
                          <span class="input-group-text">Bulan</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Produk Ready?</label>
                    <div class="col-md-9 col-form-label">
                      <div class="form-check">
                        <input class="form-check-input" id="status_produk" type="radio" value="1" name="status_produk">
                        <label class="form-check-label" for="status_produk">Ya</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="status_produk" type="radio" value="0" name="status_produk">
                        <label class="form-check-label" for="status_produk">Tidak</label>
                      </div>    
                    </div>
                  </div>
                <div class="form-group row">
                        <label class="col-md-3 col-form-label">Ada Diskon?</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check">
                            <input class="form-check-input" id="status_diskon" type="radio" value="1" name="status_diskon">
                            <label class="form-check-label" for="status_diskon">Ya</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="status_diskon" type="radio" value="0" name="status_diskon">
                            <label class="form-check-label" for="status_diskon">Tidak</label>
                          </div>    
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="diskon">Diskon</label>
                          <div class="input-prepend input-group">
                              <input class="form-control" name="diskon" id="diskon" size="16" type="text">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">%</span>
                                </div>
                            </div> 
                          <span class="help-block">Contoh masukan diskon: 20</span>
                      </div>
                      <div class="form-group">
                          <label for="ram">RAM</label>
                          <div class="input-prepend input-group">
                              <input class="form-control" name="ram" id="ram" size="16" type="text">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">GB</span>
                                </div>
                            </div> 
                          <span class="help-block">Contoh masukan ram: 1</span>
                      </div>
                      <div class="form-group">
                          <label for="hdd">HDD</label>
                          <div class="input-prepend input-group">
                              <input class="form-control" name="hdd" id="hdd" size="16" type="text">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">GB</span>
                                </div>
                            </div> 
                          <span class="help-block">Contoh masukan HDD: 1</span>
                      </div>
                      <div class="form-group">
                          <label for="ram">Core</label>
                          <div class="input-prepend input-group">
                              <input class="form-control" name="core" id="core" size="16" type="text">
                            </div> 
                          <span class="help-block">Contoh masukan core: 1</span>
                      </div>
                      <div class="form-group">
                          <label for="harga">Harga</label>
                          <div class="input-prepend input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                              </div>
                              <input class="form-control currency" id="harga" size="16" type="number" name="harga">
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
  @endif
@if($view == 'Collocation')
<div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-primary" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Collocation</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{route('list-collocation.store')}}" method="post">
            {{ csrf_field() }}
        <div class="modal-body">
                <div class="form-group">
                  <label for="nama">Nama Paket</label>
                  <input class="form-control" id="nama" type="text" name="nama" placeholder="Masukan Nama Paket ..">
                </div>
                <div class="form-group">
                  <label for="expire_date">Lama Paket</label>
                  <div class="input-prepend input-group">
                      <input class="form-control" id="expire_date" size="16" type="text" name="expire_date">
                      <div class="input-group-prepend">
                          <span class="input-group-text">Bulan</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Produk Ready?</label>
                    <div class="col-md-9 col-form-label">
                      <div class="form-check">
                        <input class="form-check-input" id="status_produk" type="radio" value="1" name="status_produk">
                        <label class="form-check-label" for="status_produk">Ya</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="status_produk" type="radio" value="0" name="status_produk">
                        <label class="form-check-label" for="status_produk">Tidak</label>
                      </div>    
                    </div>
                  </div>
                <div class="form-group row">
                        <label class="col-md-3 col-form-label">Ada Diskon?</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check">
                            <input class="form-check-input" id="status_diskon" type="radio" value="1" name="status_diskon">
                            <label class="form-check-label" for="status_diskon">Ya</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="status_diskon" type="radio" value="0" name="status_diskon">
                            <label class="form-check-label" for="status_diskon">Tidak</label>
                          </div>    
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="diskon">Diskon</label>
                          <div class="input-prepend input-group">
                              <input class="form-control" name="diskon" id="diskon" size="16" type="text">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">%</span>
                                </div>
                            </div> 
                          <span class="help-block">Contoh masukan diskon: 20</span>
                      </div>
                      <div class="form-group">
                          <label for="ram">U?</label>
                          <div class="input-prepend input-group">
                              <input class="form-control" name="u" id="u" size="16" type="text">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">U</span>
                                </div>
                            </div> 
                          <span class="help-block">Contoh masukan U: 1</span>
                      </div>
                      <div class="form-group">
                          <label for="hdd">Daya</label>
                          <div class="input-prepend input-group">
                              <input class="form-control" name="daya" id="daya" size="16" type="text">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">Watt</span>
                                </div>
                            </div> 
                          <span class="help-block">Contoh masukan Watt: 200</span>
                      </div>
                      <div class="form-group">
                          <label for="ram">Bandwith</label>
                          <div class="input-prepend input-group">
                              <input class="form-control" name="bandwith" id="bandwith" size="16" type="text">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">Mbps</span>
                                </div>
                            </div> 
                          <span class="help-block">Contoh masukan bandwith: 1</span>
                      </div>
                      <div class="form-group">
                          <label for="hdd">IIX</label>
                          <div class="input-prepend input-group">
                              <input class="form-control" name="iix" id="ixx" size="16" type="text">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">IXX</span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Mbps</span>
                                  </div>
                            </div> 
                          <span class="help-block">Contoh masukan IXX: 100</span>
                      </div>
                      <div class="form-group">
                          <label for="ram">IP-Public</label>
                          <div class="input-prepend input-group">
                              <input class="form-control" name="ip_public" id="ip_public" size="16" type="text">
                            </div> 
                          <span class="help-block">Contoh masukan bandwith: 1</span>
                      </div>
                      <div class="form-group">
                          <label for="harga">Harga</label>
                          <div class="input-prepend input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                              </div>
                              <input class="form-control currency" id="harga" size="16" type="number" name="harga">
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
  @endif
@endsection