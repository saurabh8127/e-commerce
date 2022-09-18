<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public function index(Request $request){
		$roles = UserRole::all();
		return view('auth.register',[
			'roles'=>$roles
		]);
	}
	

	//add user
	public function addUser(Request $request){

		
		$validated = Validator::make($request->all(),[
			'name'          => 'required|max:255|min:4',
			'email'			=> 'required|unique:users',
			'password'		=> 'required|min:6', 
			'role_id'   	=> 'required',
		]);

		// dd($validated->fails())
		if($validated->fails())	{
			dd($validated->errors()->messages());
			
		}else{
			$user 			= new User;
			$user->name  	= $request->name;
			$user->email 	= $request->email;
			$user->password = $request->password;
			$user->role_id 	= $request->role_id;

			$user->save();

			return redirect()->route('login');
		}

	}
}
