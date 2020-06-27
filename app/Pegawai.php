<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Pegawai extends Model
{
    protected $table = "PEGAWAI";
    protected $fillable = ["NIP", "NAMA", "UNIT", "USERNAME","PASSWORD", "JABATAN"];
}
