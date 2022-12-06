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
                    	<a>TAMBAH KURIR</a><br>
            					<a class="btn btn-primary btn-m text-uppercase" href="{{route('admin.kurir')}}">BACK</a>
            					
                    </div>
                    <div class="panel-body">
                    	@if(Session::has('message'))
                    		<div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    	@endif
                        <form class="form-horizontal" wire:submit.prevent="updateKurir">
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Nama Lengkap</label>
                        		<div class="col-md-4">
                        			<input type="text" placeholder="Nama Lengkap" class="form-control input-md" wire:model="nama_lengkap" />
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Alamat Lengkap</label>
                        		<div class="col-md-4">
                        			<input type="text" placeholder="Alamat Lengkap" class="form-control input-md" wire:model="alamat_lengkap" />
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Alamat Tambahan</label>
                        		<div class="col-md-4">
                        			<input type="text" placeholder="Alamat Tambahan" class="form-control input-md" wire:model="alamat_tambahan" />
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Nomor Handphone</label>
                        		<div class="col-md-4">
                        			<input type="tel" placeholder="Nomor Handphone" class="form-control input-md" wire:model="nomor_handphone" />
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Email</label>
                        		<div class="col-md-4">
                        			<input type="email" placeholder="Email" class="form-control input-md" wire:model="email" />
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label"></label>
                        		<div class="col-md-4">
                        			<button type="submit" class="btn btn-primary">Update</button>
                        		</div>
                        	</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
