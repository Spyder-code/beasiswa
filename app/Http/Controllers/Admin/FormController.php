<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Form::all();

        return view('pages.admin.formulir.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.beasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $berkas1 = Storage::putFile(
            'public/berkas1',
            $request->file('berkas1'),
        );
        $berkas2 = Storage::putFile(
            'public/berkas1',
            $request->file('berkas2'),
        );
        $berkas3 = Storage::putFile(
            'public/berkas1',
            $request->file('berkas3'),
        );
            // $berkas1 = $request->file('berkas1')->storeAs('public/berkas1', 'berkas1.pdf');
            // $berkas2 = $request->file('berkas2')->storeAs('public/berkas2', 'berkas2.pdf');
            // $berkas3 = $request->file('berkas3')->storeAs('public/berkas3', 'berkas2.pdf');
            Form::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'universitas' => $request->universitas,
                'prodi' => $request->prodi,
                'jenpen' => $request->jenpen,
                'telpon' => $request->telpon,
                'alamat' => $request->alamat,
                'berkas1' => '/storage/berkas1/berkas1.pdf',
                'berkas2' => '/storage/berkas2/berkas2.pdf',
                'berkas3' => '/storage/berkas3/berkas3.pdf'
            ]);

            return redirect()->route('form.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Beasiswa::find($id);
        return view('pages.admin.beasiswa.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
        
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'tenggat' => 'required|max:255',
            'description' => 'required',
        ]);

        Beasiswa::where('id',$request->id)->update([
            'title' => $request->title,
            'tenggat' => $request->tenggat,
            'description' => $request->description,
        ]);

        return redirect('admin/beasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Beasiswa::destroy($request->id);
        return back();
    }
}
