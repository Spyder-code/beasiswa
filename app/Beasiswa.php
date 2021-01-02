<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Beasiswa extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','description','tenggat','image'];
    protected $guard = [];
}
