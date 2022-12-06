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
                        <a class="btn btn-primary btn-m text-uppercase" href="{{route('owner.tambahproduct')}}">Tambah Menu</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Menu</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar Paket</th>
                                    <th>Terjual</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $menu)
                                    <tr>
                                        <td>{{$menu->nama_menu}}</td>
                                        <td>{{$menu->deskripsi}}</td>
                                        <td>{{$menu->gambar_menu}}</td>
                                        <td>{{$menu->terjual}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$menus->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
