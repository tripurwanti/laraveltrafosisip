<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Msemployee;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Auth::check()) {
        // return Redirect::route('/login');
        // }
        if (!Session::get('username')) {
            return redirect('/login');
        }
        

        $employees = Msemployee::all();
        return view('pegawai.daftarpegawai', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Session::get('username')) {
            return redirect('/login');
        }
        return view('pegawai.tambahPegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Session::get('username')) {
            return redirect('/login');
        }
        $validatedData = $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'unit' => 'required',
            'jabatan' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        $employee = new Msemployee;
        $employee->nip = $request->nip;
        $employee->nama = $request->nama;
        $employee->unit = $request->unit;
        $employee->jabatan = $request->jabatan;
        $employee->username = $request->username;
        $employee->password = Hash::make($request->password);
        
        $employee->save();

        $user = new User;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->name = $request->nama;
        $user->email = "noo-reply@gmail.com";
        $user->save();
        //Msemployee::create($request->all());
        return redirect('/employeeadd')->with('status','Data pegawai berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $employee = Msemployee::where('nip', session('nip'))->first();
        return view('pegawai.editpegawai', ['employee' => $employee]);
        //var_dump($employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (!Session::get('username')) {
            return redirect('/login');
        }
        Msemployee::where('nip',session('nip'))
                    ->update([
                        'nama' => $request->nama,
                        'username' => $request->username,
                        'password' => Hash::make($request->password)
                    ]);
        //$employee = Msemployee::where('nip', $id)->first();        
        //return redirect('/employee/{employee}', ['employee' => $employee])->with('status','Data pegawai berhasil diperbarui.');
        return redirect('/employee/edit')->with('status','Data pegawai berhasil ditambahkan.');
        //return view('pegawai.editpegawai', ['employee' => $employee])->with('status','Data pegawai berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Session::get('username')) {
            return redirect('/login');
        }
        //Msemployee::destroy($nip);
        $deletedRows = Msemployee::where('nip', $id)->delete();
        return redirect('/employee')->with('status','Data pegawai berhasil dihapus.');
    }
}
