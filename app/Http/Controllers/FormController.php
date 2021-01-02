<?php

namespace App\Http\Controllers;

use App\Beasiswa;
use App\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index(Beasiswa $beasiswa)
    {
        return view('pages.form',compact('beasiswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|max:255',
            'universitas' => 'required|max:255',
            'prodi' => 'required|max:255',
            'jenpen' => 'required|max:255',
            'telpon' => 'required|max:255',
            'alamat' => 'required',
            'berkas1' => 'required|mimes:pdf|max:2048',
            'berkas2' => 'required|mimes:pdf|max:2048',
            'berkas3' => 'required|mimes:pdf|max:2048',
        ]);

            $berkas1 = $request->file('berkas1')->storeAs('public/'.$request->nama, 'berkas1.pdf');
            $berkas2 = $request->file('berkas2')->storeAs('public/'.$request->nama, 'berkas2.pdf');
            $berkas3 = $request->file('berkas3')->storeAs('public/'.$request->nama, 'berkas3.pdf');
            Form::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'universitas' => $request->universitas,
                'prodi' => $request->prodi,
                'jenpen' => $request->jenpen,
                'telpon' => $request->telpon,
                'alamat' => $request->alamat,
                'berkas1' => '/storage/'.$request->nama.'/berkas1.pdf',
                'berkas2' => '/storage/'.$request->nama.'/berkas2.pdf',
                'berkas3' => '/storage/'.$request->nama.'/berkas3.pdf'
            ]);

            return back()->with('success','Data berhasil terkirim!');
    }
}
