@extends('layout.memberarea')
@section('title')
    Order tertagih
@endsection
@section('auth')
    @if(isset(Auth::user()->email))
    <li class="nav-item dropdown">
    <a href="#" type="button" class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><img src="https://img.icons8.com/metro/15/000000/contacts.png">
        Hi {{Auth::user()->name}}</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width: 16px;">
        <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href={{route('user.logout')}}>Logout</a>
        </div>
    </li>
    @else
    <li class="nav-item">
    <a href="/userlogin"><button type="button" class="btn btn-light btn-sm"><img src="https://img.icons8.com/metro/15/000000/contacts.png"> Login</button></a>
    </li>
    @endif
@endsection
@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(Session::has('alert-success'))
        <div class="alert alert-success" id="success-alert">
            <button class="close" type="button" data-dismiss="alert">x</button>
            <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
        </div>
    @endif
    <h3 class="display-4" style="font-size:32px;">Tagihan...</h3>
    <div class="col-sm col-md border text-right table-responsive" style="border-radius: 10px;border: 2px solid #ff1111;margin-top:15px;">
        <div>
            <h5 class="text-left lead" style="margin-top:5px;font-size:20px;"><b>My Invoice</b></h5>
        </div>
        <table class="table text-left table-borderless">
            @if($dataorder->count() > 0)
            <tr>
                <th>No. Tagihan</th>
                <th>Tgl. Tertagih</th>
                <th>Tgl. Jatuh Tempo</th>
                <th>Total</th>
            </tr>
            @foreach ($dataorder as $detproduk)
            <tr>
                <td>Tagihan No. #{{$detproduk->id}}</td>
                <td>{{$detproduk->tgl_order}}</td>
                <td>{{$detproduk->expired_order}}</td>
                <td>Rp. {{$detproduk->totalcost}}</td>
                @if($detproduk->status_pembayaran == 1)
                <td style="margin-bottom:5px;"><button class="btn btn-secondary" disabled>Pending</button></td>
                @elseif($detproduk->status_pembayaran == 0)
                <td style="margin-bottom:5px;"><a href="#" class="btn btn-warning" data-toggle="modal" data-id={{$detproduk->id}} data-target="#exampleModalCenter">Konfirmasi</a></td>
                @endif
            </tr>
            @endforeach
        </table>
        @else
            <h6 class="text-center lead" style="margin-top:15px;">Anda tidak mempunyai order yang tertagih</h6>
        @endif
    </div>
    <div class="col-sm col-md col border" style="margin-top:20px;">
        <p class="lead text-center" style="font-size:24px;">Metode Pembayaran Tersedia</p>
        <strong>Transfer Manual (Verifikasi Manual)</strong>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input" checked>
                    <img class="img-fluid" src="https://3.bp.blogspot.com/-ZK6W9UlA3lw/V15RGexr3yI/AAAAAAAAAJ4/nkyM9ebn_qg3_rQWyBZ1se5L_SSuuxcDACLcB/s1600/Bank_Central_Asia.png" alt="" width="80" height="25">
                    <img class="img-fluid" src="http://1.bp.blogspot.com/-zkv5u5OGPEM/VKOWnIRRKBI/AAAAAAAAA7E/ovxa4ZW3I0o/s280/Logo%2BBank%2BMandiri.png" alt="" width="80" height="50">
                    <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1280px-BNI_logo.svg.png" alt="" width="80" height="20">
                    <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_BRI.png" alt="" width="80" height="20">
                </div>
            </div>
        </div>
        <div class="accordion border" id="accordionExample" style="margin-bottom:15px;">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-sm" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Cara Pembayaran Transfer Bank <img src="https://img.icons8.com/color/15/000000/sort-down.png">Click me!
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Lakukan pembayaran sejumlah tepat 3 digit terakhir (JANGAN DIBULATKAN) dan tambahkan berita <b>NH678943</b> agar dapat diproses oleh sistem secara otomatis (tidak perlu konfirmasi secara manual).</p>
                        <p>Pembayaran dapat dilakukan melalui transfer ke rekening berikut:</p>
                        <ul>
                            <li><b>BCA</b></li>
                            <p>No. Rekening: 111111111</p>
                            <p>a.n: PT. TORANG INDONESIA</p>
                            <p>Berita : NH678943</p>
                            <li><b>Bank Mandiri</b></li>
                            <p>No. Rekening: 111111111</p>
                            <p>a.n: PT. TORANG INDONESIA</p>
                            <p>Berita : NH678943</p>
                            <li><b>Bank BNI</b></li>
                            <p>No. Rekening: 111111111</p>
                            <p>a.n: PT. TORANG INDONESIA</p>
                            <p>Berita : NH678943</p>
                            <li><b>Bank BRI</b></li>
                            <p>No. Rekening: 111111111</p>
                            <p>a.n: PT. TORANG INDONESIA</p>
                            <p>Berita : NH678943</p>
                        </ul>
                        <P><b>Penting</b>: Jika setelah 15 menit dari pembayaran yang Anda lakukan dan tagihan Anda masih belum diproses, maka mohon melakukan konfirmasi secara manual dengan mengikuti panduan pada:</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title lead" id="exampleModalScrollableTitle exampleModalCenterTitle" style="font-size:20px;"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col col-sm col-md lead" style="background-color:#ebef7f;font-size:13px;">
                    <p>Catatan:</p>
                    <ul>
                        <li>
                            Mohon pastikan Anda telah mentransfer uang Anda sebelum mengisi form ini.
                        </li>
                        <li>
                            Upload file foto transfer sebagai bukti pembayaran.
                        </li>
                        <li>
                            Hubungi kontak kami jika ada kendala.
                        </li>
                    </ul>
                </div>
                <form action="{{route('order.konfirm')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Input file foto</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto" required>
                        <input type="hidden" name="orderid" id="orderID" value=""/>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Konfirmasi</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('countTagihan')
    {{count($dataorder)}}
@endsection
@section('js')
    <script>
        $('#exampleModalCenter').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var recipient = button.data('id') 
            var modal = $(this)
            modal.find('.modal-title').text('Konfirmasi Pembayaran Manual Untuk Tagihan No. #' + recipient)
            modal.find('#orderID').val(recipient)
        })
    </script>
@endsection