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
                                    <th>Aksi</th>
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
                                        <!-- untuk memberikan foreign key ... RUMUS KERAMAT SAKTI -->
                                        <td>{{ \Illuminate\Support\Facades\DB::table('tipe_pelanggans')->where('id',$promoz->tp_id)->value('tipe_pelanggan')}}</td>
                                        <td>
                                            <a href="{{route('admin.editpromo',['promo_kode'=>$promoz->kode_promo])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                        </td>
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
