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
            			<a class="btn btn-primary btn-m text-uppercase" href="{{route('owner.product')}}">BACK</a>
                    </div>
                    <div class="panel-body">
                    	@if(Session::has('message'))
                    		<div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    	@endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct" method="POST">
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Nama Paket</label>
                        		<div class="col-md-4">
                        			<input type="text" placeholder="Nama Paket" class="form-control input-md" wire:model="nama_paket" />
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Deskripsi Paket</label>
                        		<div class="col-md-4">
                        			<textarea type="text" placeholder="Deskripsi Paket" class="form-control input-md" wire:model="deskripsi"></textarea>
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Harga Paket</label>
                        		<div class="col-md-4">
                        			<input type="number" placeholder="10000" class="form-control input-md" wire:model="harga"/>
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Gambar Paket</label>
                        		<div class="col-md-4">
                        			<input type="file" class="input-file" wire:model="newimage"/>
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120">
									@else
										<img src="{{asset('../assets/images/pakets')}}/{{$gambar_paket}}" width="120">
                                    @endif
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
