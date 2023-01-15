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
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addPaket" method="POST">
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Nama Paket</label>
                        		<div>
                        			<input type="text" placeholder="Nama Paket" class="form-control input-md" wire:model="nama_paket" />
                        		</div>
                        	</div>
                        	<div class="form-group" wire:ignore>
                        		<label class="col-md-4 control-label">Deskripsi Paket</label>
								<textarea wire:model.defer="deskripsi" name="deskripsi" id="mytextarea" ></textarea>
                        	</div>
							<div class="form-group" wire:ignore>
                        		<label class="col-md-4 control-label">Deskripsi Lainnya</label>
								<textarea wire:model.defer="long_desc" name="long_desc" id="mytextarea2" ></textarea>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Harga Paket</label>
                        		<div>
                        			<input type="number" placeholder="10000" class="form-control input-md" wire:model="harga"/>
                        		</div>
                        	</div>
							<div class="form-group">
                        		<label class="col-md-4 control-label">Tanggal Mulai</label>
                        		<div>
                        			<input type="date" class="form-control input-md" wire:model="date_start"/>
                        		</div>
                        	</div>
							<div class="form-group">
                        		<label class="col-md-4 control-label">Tanggal Selesai</label>
                        		<div>
                        			<input type="date" class="form-control input-md" wire:model="date_end"/>
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Gambar Paket</label>
                        		<div class="col-md-4">
                        			<input type="file" class="input-file" wire:model="gambar_paket"/>
                                    @if($gambar_paket)
                                        <img src="{{$gambar_paket->temporaryUrl()}}" width="120">
                                    @endif
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label"></label>
                        		<div class="col-md-4">
                        			<button type="submit" class="btn btn-primary">Submit</button>
                        		</div>
                        	</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
	ClassicEditor
		.create(document.querySelector('#mytextarea'))
		.then(editor => {
			editor.model.document.on('change:data', () => {
				@this.set('deskripsi', editor.getData());
			})
		})
		.catch(error => {
			console.error(error);
		});
</script>
<script>
	ClassicEditor
		.create(document.querySelector('#mytextarea2'))
		.then(editor => {
			editor.model.document.on('change:data', () => {
				@this.set('long_desc', editor.getData());
			})
		})
		.catch(error => {
			console.error(error);
		});
</script>
