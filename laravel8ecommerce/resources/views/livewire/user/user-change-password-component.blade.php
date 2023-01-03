<div>
    <div class="container" style="padding: 100px 0">
    	<div class="row">
    		<div class="col_md_12">
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					<h2>Change Password</h2>
    				</div>
    				<div class="panel-body" style="padding: 20px 0">
    					@if(Session::has('password_success'))
    						<div class="alert alert-success" role="alert">{{Session::get('password_success')}}</div>
    					@endif
    					@if(Session::has('password_error'))
    						<div class="alert alert-success" role="alert">{{Session::get('password_error')}}</div>
    					@endif
    					<form class="form-horizontal" wire:submit.prevent="changePassword">
    						<div class="form-group">
    							<label class="col-md-4 control-label">Current Password</label>
    							<div class="col-md-4">
    								<input type="Password" placeholder="Current Password" class="form-control input-md" name="Current_password" wire:model="Current_password">
    								@error('Current_password') <p class="text-danger">{{$message}}</p>@enderror
    							</div>
    						</div>
    						<div class="form-group">
    							<label class="col-md-4 control-label">New Password</label>
    							<div class="col-md-4">
    								<input type="Password" placeholder="New Password" class="form-control input-md" name="New_password" wire:model="password">
    								@error('password') <p class="text-danger">{{$message}}</p>@enderror
    							</div>
    						</div>
    						<div class="form-group">
    							<label class="col-md-4 control-label">Confirm Password</label>
    							<div class="col-md-4">
    								<input type="Password" placeholder="Confirm Password" class="form-control input-md" name="password_confirmation" wire:model="password_confirmation">
    								@error('password_confirmation') <p class="text-danger">{{$message}}</p>@enderror
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
