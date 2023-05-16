<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KTP extends Model
{
    use HasFactory;

    protected $table = 'ktp';
    protected $fillable = ['nik','nama','tmplahir','tgllahir','kelamin','alamat','rt','rw','desa','kecamatan','agama','nikah','pekerjaan','warga'];
}
