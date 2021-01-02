<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Beasiswa::all();

        return view('pages.admin.beasiswa.index',[
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
            'title' => 'required|max:255',
            'tenggat' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($files = $request->file('image')){
            $profileImage = $files->getClientOriginalName();
            $path = $files->storeAs('public/images', $profileImage);
            $url = Storage::url($path);
            $imgUrl = url($url);
            Beasiswa::create([
                'title' => $request->title,
                'tenggat' => $request->tenggat,
                'description' => $request->description,
                'image' => $imgUrl
            ]);

            return redirect('admin/beasiswa');
        }

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
