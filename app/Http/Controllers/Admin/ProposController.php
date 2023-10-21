<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apropos;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

class ProposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propos = Apropos::all();
        return view('admin.propos.index', compact('propos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propos = Apropos::all();
        return view('admin.propos.create', compact('propos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titre' => 'required', 
            'desc' => 'sometimes',
            'img' => 'sometimes',
        ]);
        $propos = new Apropos();
        $propos->titre = $request->titre; 
        $propos->desc = $request->desc;
        if ($request->hasFile('img') != null) {
            $this->validate($request, [
                'img' => 'mimes:jpg,png,jpeg',
            ]);
            $fileName = time() . '_' . $request->img->getClientOriginalName();
            $path = 'img_propos/';
            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }
            $path = public_path('img_propos/') . $fileName;
            Image::make($request->img)->save($path);
            $propos->img = 'img_propos/' . $fileName;
        }
        $propos->save();
        return redirect('/propos-admin')->with('status', 'propos a été ajouté avec succès');
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propos = Apropos::find($id);
        return view('admin.propos.edit', compact('propos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'titre' => 'sometimes', 
            'desc' => 'sometimes',
            'img' => 'sometimes',
        ]);
        $propos = Apropos::findOrFail($id);
        if ($request->has('titre')) {
            $propos->titre = $request->titre;
        }
        if ($request->has('small_desc')) {
            $propos->small_desc = $request->small_desc;
        }
        if ($request->has('desc')) {
            $propos->desc = $request->desc;
        }
        if ($request->hasFile('img') != null) {
            $this->validate($request, [
                'img' => 'mimes:jpg,png,jpeg',
            ]);
            $fileName = time() . '_' . $request->img->getClientOriginalName();
            $path = 'img_propos/';
            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }
            $path = public_path('img_propos/') . $fileName;
            Image::make($request->img)->save($path);
            $propos->img = 'img_propos/' . $fileName;
        }
        
        $propos->save();
        return redirect('/propos-admin')->with('status', 'propos a été modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propos = Apropos::findOrFail($id);
        $propos->delete();
        return redirect('/propos-admin')->with('status', 'propos a été Supprimer avec succès');
    }
}
