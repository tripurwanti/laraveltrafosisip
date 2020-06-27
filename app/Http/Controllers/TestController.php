<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function test(){
        $usulan = DB::select('SELECT * FROM MASTERBARANG');
        var_dump($usulan);
    }
}
