@extends('master.app')
@section('content')
@php
    $detail = json_decode($data->deskripsi);
@endphp
<form class="form-horizontal" action="{{ route('list-collocation.update', $data->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="col-md-6">
<div class="card">
        <div class="card-header">
          <strong>Edit Collocation</strong> Form</div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama Paket</label>
                <input class="form-control" id="nama" value="{{$data->nama}}" type="text" name="nama" placeholder="Masukan Nama Paket ..">
              </div>
              <div class="form-group">
                <label for="expire_date">Lama Paket</label>
                <div class="input-prepend input-group">
                    <input class="form-control" value="{{$data->expire_date}}" id="expire_date" size="16" type="text" name="expire_date">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Bulan</span>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-3 col-form-label">Produk Ready?</label>
                  <div class="col-md-9 col-form-label">
                    <div class="form-check">
                            @if ($data->status_produk == 1)
                            <input class="form-check-input" id="status_produk" type="radio" value="1" name="status_produk" checked>
                            @else
                            <input class="form-check-input" id="status_produk" type="radio" value="1" name="status_produk">
                            @endif
                      <label class="form-check-label" for="status_produk">Ya</label>
                    </div>
                    <div class="form-check">
                            @if ($data->status_produk == 0)
                            <input class="form-check-input" id="status_produk" type="radio" value="0" name="status_produk" checked>
                            @else
                            <input class="form-check-input" id="status_produk" type="radio" value="0" name="status_produk">
                            @endif
                      <label class="form-check-label" for="status_produk">Tidak</label>
                    </div>    
                  </div>
                </div>
              <div class="form-group row">
                      <label class="col-md-3 col-form-label">Ada Diskon?</label>
                      <div class="col-md-9 col-form-label">
                        <div class="form-check">
                            @if ($data->status_diskon == 1)
                                <input class="form-check-input" id="status_diskon" type="radio" value="1" name="status_diskon" checked>    
                            @else
                                <input class="form-check-input" id="status_diskon" type="radio" value="1" name="status_diskon">                                
                            @endif
                          <label class="form-check-label" for="status_diskon">Ya</label>
                        </div>
                        <div class="form-check">
                            @if ($data->status_diskon == 0)
                                <input class="form-check-input" id="status_diskon" type="radio" value="0" name="status_diskon" checked>    
                            @else
                                <input class="form-check-input" id="status_diskon" type="radio" value="0" name="status_diskon">                                
                            @endif
                          <label class="form-check-label" for="status_diskon">Tidak</label>
                        </div>    
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="diskon">Diskon</label>
                        <div class="input-prepend input-group">
                            <input class="form-control" name="diskon" value="{{$data->diskon}}" id="diskon" size="16" type="text">
                            <div class="input-group-prepend">
                                <span class="input-group-text">%</span>
                              </div>
                          </div> 
                        <span class="help-block">Contoh masukan diskon: 20</span>
                    </div>
                    <div class="form-group">
                        <label for="ram">U?</label>
                        <div class="input-prepend input-group">
                            <input class="form-control" value="{{$detail->u}}" name="u" id="u" size="16" type="text">
                          </div> 
                        <span class="help-block">Contoh masukan U: 1</span>
                    </div>
                    <div class="form-group">
                        <label for="hdd">Daya</label>
                        <div class="input-prepend input-group">
                            <input class="form-control" name="daya" value="{{$detail->daya}}" id="daya" size="16" type="text">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Watt</span>
                              </div>
                          </div> 
                        <span class="help-block">Contoh masukan Daya: 1</span>
                    </div>
                    <div class="form-group">
                        <label for="ram">Bandwith</label>
                        <div class="input-prepend input-group">
                            <input class="form-control" value="{{$detail->bandwith}}" name="bandwith" id="bandwith" size="16" type="text">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">Mbps</span>
                                  </div>
                          </div> 
                        <span class="help-block">Contoh masukan Bandwith: 1</span>
                    </div>
                    <div class="form-group">
                        <label for="ram">IIX</label>
                        <div class="input-prepend input-group">
                            <input class="form-control" value="{{$detail->iix}}" name="iix" id="iix" size="16" type="text">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">Mbps</span>
                                  </div>
                          </div> 
                        <span class="help-block">Contoh masukan Bandwith: 1</span>
                    </div>
                    <div class="form-group">
                        <label for="ram">IP Public</label>
                        <div class="input-prepend input-group">
                            <input class="form-control" value="{{$detail->ip_public}}" name="ip_public" id="ip_public" size="16" type="text">
                          </div> 
                        <span class="help-block">Contoh masukan Bandwith: 1</span>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <div class="input-prepend input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Rp.</span>
                            </div>
                            <input class="form-control currency" value="{{$data->harga}}" id="harga" size="16" type="number" name="harga">
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
