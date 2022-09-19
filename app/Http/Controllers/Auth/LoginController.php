<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
	public function index(Request $request){
		return view('auth.login');
	}


	public function login(Request $request)
    {
		// dd($request);
		$this->validate($request, [
            'email'     => 'required|string|email|max:255',
            'password'  => 'required|string|min:6|max:64',
        ]);
		// dd($validated->fails());
		// dd(Auth::attempt());
			if (Auth::attempt($request->only('email', 'password'))) {
			
				return redirect()->route('dasboard');
			} else {
		
				return ;
			}     
  
        // return redirect("login")->withSuccess('Login details are not valid');
    }
}
