<div>
	<div class="container" style="padding: 100px 0">
	 <div class="row">
	  <div class="panel panel-default" › 
		  	<div class="panel-heading"><h1>Profile </h1> </div>
		  		
		  <div class="panel-body" style="padding: 20px 0">
		    <div class="col-md-8" ›  

		    <h1> <i class="fas fa-user"></i>  <b>{{$user->name}} </b> </h1> 
		    <p>Pelanggan sejak <b>{{$user->profile->created_at}} </b></p>

		    </div>
		    <div class="col-md-8" style="padding: 20px 0">
		    	<h5>Informasi Privasi </h5>
		    	<p><b>Email : </b>{{$user->email}}</p>
		    	<p><b>Phone : </b>{{$user->profile->nomor_handphone}}</p>
		    	<p><b>Subscribe : </b>
		    		@if($user->profile->status_berlangganan == 0)
		    			No
		    		@else
		    			Yes
		    		@endif</p>
		    		<p><b>Alamat : </b>{{$user->alamat->alamat}} </p>
		    		<a href="">Tambah Alamat</a>
		    </div>

		    <div class="col-md-8" style="padding: 20px 0">
		    	<a href="{{route('user.changepassword')}}">Ganti Password?</a>

		    </div>
		</div>
	  </div>
	</div>
<div>