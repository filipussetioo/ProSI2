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
            					<a class="btn btn-primary btn-m text-uppercase" href="{{route('admin.promo')}}">BACK</a>
            					
                    </div>
                    <div class="panel-body">
                    	@if(Session::has('message'))
                    		<div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    	@endif
                        <form class="form-horizontal" wire:submit.prevent="storePromo">
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Nama Promo</label>
                        		<div class="col-md-4">
                        			<input type="text" placeholder="Nama Promo" class="form-control input-md" wire:model="nama_promo" />
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Potongan Promo</label>
                        		<div class="col-md-4">
                        			<input type="number" step=".01"placeholder="Potongan Promo" class="form-control input-md" wire:model="potongan_promo"/>
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Deskripsi Promo</label>
                        		<div class="col-md-4">
                        			<input type="text" placeholder="Deskripsi Promo" class="form-control input-md" wire:model="deskripsi_promo"/>
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Kode Promo</label>
                        		<div class="col-md-4">
                        			<input type="text" placeholder="Kode Promo" class="form-control input-md" wire:model="kode_promo"/>
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Tanggal Mulai</label>
                        		<div class="col-md-4">
                        			<input type="date" placeholder="Tanggal Mulai" class="form-control input-md" wire:model="tanggal_mulai"/>
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Tanggal Selesai</label>
                        		<div class="col-md-4">
                        			<input type="date" placeholder="Tanggal Selesai" class="form-control input-md" wire:model="tanggal_selesai"/>
                        		</div>
                        	</div>
                        	<div class="form-group">
                        		<label class="col-md-4 control-label">Tipe Pelanggan</label>
                        		<div class="col-md-4">
                        		<input type="radio" id="1" name="tipe_pelanggan" value="1" wire:model="tp_id">
  								<label for="bronze">Bronze</label><br>
								<input type="radio" id="2" name="tipe_pelanggan" value="2" wire:model="tp_id">
								<label for="gold"> Gold</label><br>
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
