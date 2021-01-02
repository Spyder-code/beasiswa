<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $fillable = ['nama','universitas'];
    protected $table = 'pengumuman';
}
