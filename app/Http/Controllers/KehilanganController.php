<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KehilanganController extends Controller
{
    public function index()
    {
        $data = DB::select('SELECT * FROM KEHILANGAN K JOIN STOKBARANG S ON K.KODESTOKBARANG = S.KODESTOKBARANG JOIN PEGAWAI P ON K.NIP = P.NIP');
        // var_dump($usulan);
        return view('kehilangan/daftarkehilangan', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
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
        //
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
