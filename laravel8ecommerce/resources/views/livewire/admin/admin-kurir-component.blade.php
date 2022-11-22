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
                        <a class="btn btn-primary btn-m text-uppercase" href="{{route('admin.tambahkurir')}}">Tambah Kurir</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>nama_lengkap</th>
                                    <th>alamat_lengkap</th>
                                    <th>alamat_tambahan</th>
                                    <th>nomor_handphone</th>
                                    <th>email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kurir as $kurirs)
                                    <tr>
                                        <td>{{$kurirs->id}}</td>
                                        <td>{{$kurirs->nama_lengkap}}</td>
                                        <td>{{$kurirs->alamat_lengkap}}</td>
										<td>{{$kurirs->alamat_tambahan}}</td>
										<td>{{$kurirs->nomor_handphone}}</td>
										<td>{{$kurirs->email}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$kurir->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
