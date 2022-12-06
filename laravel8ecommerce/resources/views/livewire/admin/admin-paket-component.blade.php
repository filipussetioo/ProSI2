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
                        <a class="btn btn-primary btn-m text-uppercase" href="{{route('admin.tambahpaket')}}">Tambah Paket</a>
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
                                @foreach ($paket as $pakets)
                                    <tr>
                                        <td>{{$pakets->nama_paket}}</td>
                                        <td>{{$pakets->harga}}</td>
                                        <td>{{$pakets->deskripsi}}</td>
                                        <td>{{$pakets->created_at}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$paket->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
