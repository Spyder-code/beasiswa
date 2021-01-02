<?php

namespace App\Http\Controllers;

use App\Beasiswa;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(Beasiswa $beasiswa)
    {
        return view('pages.info',compact('beasiswa'));
    }
}
