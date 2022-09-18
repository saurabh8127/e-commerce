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
    protected $redirectTo = RouteServiceProvider::HOME;

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
		$validated = Validator::make($request->all(),[
			'email'			=> 'required',
            'password'		=> 'required',
		]);
		dd($validated->fails());
		if($validated->fails())	{
			dd($validated->errors()->messages());
			
		}else{
			$credentials = $request->only('email', 'password');
			if (Auth::attempt($credentials)) {
				// return redirect()->intended('dashboard')
				// 			->withSuccess('Signed in');
				return view('pages.home');
			}
		}
       
  
        // return redirect("login")->withSuccess('Login details are not valid');
    }
}
