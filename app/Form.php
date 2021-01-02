<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama','email','universitas','prodi', 'jenpen', 'telpon', 'alamat', 'berkas1', 'berkas2', 'berkas3'];
    protected $guard = [];
}
