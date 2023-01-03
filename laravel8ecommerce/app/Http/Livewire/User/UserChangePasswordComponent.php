<?php

namespace App\Http\Livewire\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Component;

class UserChangePasswordComponent extends Component
{
	public $Current_password;
	public $password;
	public $password_confirmation;

	public function updated($fields){
		$this->validateOnly($fields,[
			'Current_password'=>'required',
			'password' => 'required|min:8|confirmed|different::Current_password'
		]);
	}

	public function changePassword(){
		$this->validate([
			'Current_password'=>'required',
			'password' => 'required|min:8|confirmed|different::Current_password'
		]);

		if(Hash::check($this->Current_password,Auth::user()->password)){
			$user = User::findOrFail(Auth::user()->id);
			$user->password = Hash::make($this->password);
			$user->save;
			session()->flash('password_error','Password sudah diubah!');
		}
		else{
			session()->flash('password_success','Password tidak cocok');
		}
	}

    public function render()
    {
        return view('livewire.user.user-change-password-component')->layout('layouts.base');
    }
}
