<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Masterbarang extends Model
{
    protected $table = "MASTERBARANG";
    protected $fillable = ["KODEMASTERBARANG", "NAMAMASTERBARANG", "JUMLAH"];

}
