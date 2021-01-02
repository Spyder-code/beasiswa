<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beasiswa;
use App\Pengumuman;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data = Beasiswa::orderBy('created_at','desc')->paginate(2);
        return view('pages.home', compact('data'));
    }

    public function pengumuman()
    {
        $data = Pengumuman::all();
        return view('pages.pengumuman',compact('data'));
    }
}
