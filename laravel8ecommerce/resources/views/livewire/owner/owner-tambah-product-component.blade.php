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
								<textarea wire:model="deskripsi" name="deskripsi" id="mytextarea" >Hello, World!</textarea>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Harga Paket</label>
                        		<div>
                        			<input type="number" placeholder="10000" class="form-control input-md" wire:model="harga"/>
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

	tinymce.init({
		selector: '#mytextarea',
		forced_root_block: false,
		setup: function (editor) {
			editor.on('init change', function () {
				editor.save();
			});
			editor.on('change', function (e) {
				@this.set('deskripsi', editor.getContent());
			});
		}
	});
</script>
