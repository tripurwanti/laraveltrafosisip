<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use DB;

class MasterbarangController extends Controller
{
    public function index()
    {
        // $data = DB::select('SELECT * FROM MASTERBARANG');
        // $data = DB::table('MASTERBARANG')->get();
        $data = \App\Masterbarang::all();

        // var_dump($usulan);
        return view('masterbarang/daftarmasterbarang', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
             
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        \App\Masterbarang::create(
            [
                'kodemasterbarang' => $request->get('kode'),
                'namamasterbarang' => $request->get('nama'),
                'jumlah' => $request->get('jumlah'),
            ]
            );
        return redirect(route('masterbarang.index'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
       // $data = \App\Masterbarang::all();   
        //$data = \App\Masterbarang::find($id);
        $data = \App\Masterbarang::where('KODEMASTERBARANG',$id)->get();
        //$data = DB::table('MASTERBARANG')->where('KODEMASTERBARANG', '=', $id)->get();
        return view('masterbarang/editmasterbarang', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
