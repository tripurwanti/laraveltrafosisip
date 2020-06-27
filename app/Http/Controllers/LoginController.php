<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Msemployee;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function showLogin()
    {
    	return view('login');
    }

    public function doLogin()
    {
    	return view('login');
    }

    public function getPegawai($nip){
        $pegawai = Pegawai::find($nip);
      
        
    }

    public function guard()
    {
        return auth()->guard('msemployee');
    }

    public function postLogin(Request $request)
    {
        if (!Session::get('username')) {
            return redirect('/login');
        }
        if (auth()->guard('msemployee')->attempt(['username' => $request->username, 'password' => $request->password ])) {
            $employee = Msemployee::where('username', $request->username)->first();
            //var_dump($employee);
            session(['nip' => $employee->nip]);
            session(['username' => $request->username]);
            session(['name' => $employee->nama]);
            //dd(session()->all());
            return redirect('/home');
            //return view('home',['employee' => $employee]);
        }
        return back()->with(['status' => 'Username atau password salah.']);
    }

    // public function postLogin(Request $request)
    // {
  
    //     // Validate the form data
    //   $this->validate($request, [
    //     'username' => 'required',
    //     'password' => 'required'
    //   ]);
        
    //   $credentials = $request->only($request->username,  $request->password);
    //     // Attempt to log the user in
    //     // Passwordnya pake bcrypt
    //   if (Auth::attempt($credentials)) {
    //     //return redirect()->intended('/home');
    //     return redirect('/home');
    //   }
    //   else{
    //      echo "gagal";
    //   }
  
    // }

    public function logout()
    {
        // if (Auth::check()) {
        // return Redirect::route('/login');
        // }// if (Auth::guard('web')->check()) {
        //Auth::logout();
        if (!Session::get('username')) {
          return redirect('/login');
        }
      
        Session::flush();
        return redirect('/login');
      // }   
      //return redirect('/login');
  
    }
}
