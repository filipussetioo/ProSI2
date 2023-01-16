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
                        <a class="btn btn-primary btn-m text-uppercase" href="{{route('owner.tambahproduct')}}">Tambah Paket</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Paket</th>
                                    <th>Harga Paket</th>
                                    <th>Deskripsi Paket</th>
                                    <th>Tanggal Dibentuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pakets as $paket)
                                    <tr>
                                        <td>{{$paket->id}}</td>
                                        <td>{{$paket->nama_paket}}</td>
                                        <td>{{$paket->harga}}</td>
                                        <td>{{$paket->deskripsi}}</td>
                                        <td>{{$paket->created_at}}</td>
                                        <td>
                                            <a href="{{route('owner.editproduct',['paket_id'=>$paket->id])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$pakets->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
