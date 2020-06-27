<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    protected $table = "USULAN";
    protected $fillable = ["LOKASI", "EXIST", "KOORDINAT_EXIST", "STATUS","TGL_USULAN", "JML_GANGGUAN", "ID_UNIT", "TAHAPAN","GAMBAR", "TGL_PELAKSANAAN", "TGL_SELESAI",
    "BUKTI_UID", "LOKASI", "EXIST", "KOORDINAT_EXIST", "STATUS"];
}
