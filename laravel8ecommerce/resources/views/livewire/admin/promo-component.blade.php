<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .container .row{
            padding-top: 5%; 
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a class="btn btn-primary btn-m text-uppercase" href="{{route('admin.tambahpromo')}}">Tambah Promo</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Promo</th>
                                    <th>Potongan Promo</th>
                                    <th>Deskripsi Promo</th>
                                    <th>Kode Promo</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Tipe Pelanggan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($promo as $promoz)
                                    <tr>
                                        <td>{{$promoz->nama_promo}}</td>
                                        <td>{{$promoz->potongan_promo}}</td>
                                        <td>{{$promoz->deskripsi_promo}}</td>
                                        <td>{{$promoz->kode_promo}}</td>
                                        <td>{{$promoz->tanggal_mulai}}</td>
                                        <td>{{$promoz->tanggal_selesai}}</td>
                                        <td>{{$promoz->id_tipe_pelanggan}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$promo->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
