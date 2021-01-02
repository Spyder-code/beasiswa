<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beasiswa;

class KatalokController extends Controller
{
    public function index(Request $request)
    {
        $data = Beasiswa::all();
        return view('pages.katalok', compact('data'));
    }
}
