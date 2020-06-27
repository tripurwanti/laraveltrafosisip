<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm()
    {
        return view('user.login');
    }

    public function postLogin(Request $request)
    {
  
        // Validate the form data
      $this->validate($request, [
        'username' => 'required',
        'password' => 'required'
      ]);
  
        // Attempt to log the user in
        // Passwordnya pake bcrypt
        if (AuthenticatesUsers::attemptLogin(['username' => $request->username, 'password' => $request->password])) {
            //return redirect()->intended('/home');
            return redirect('/home');
          }
          else{
             echo "gagal";
          }
      
    }
  
}
