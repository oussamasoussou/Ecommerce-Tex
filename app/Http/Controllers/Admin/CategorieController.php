<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\SousCategorie;
use Illuminate\Http\Request;
use Image;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sous_categorie = SousCategorie::all();
        $categorie = Categorie::all();
        $listeCateg = [];

        foreach ($categorie as $ca) {

            $ca['sous_categorie'] = $ca->sous_categorie;
            $listeCateg[] = $ca;
        }
        return view('admin.categorie.index', compact('listeCateg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = Categorie::all();
        return view('admin.categorie.create', compact('categorie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie = new Categorie();
        $categorie->lib = $request->input('lib');
        $categorie->save();
        return redirect('/categories')->with('status', 'Catégorie a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sous_categorie = SousCategorie::findOrFail($id);
        $categorie = Categorie::findOrFail($id);
        return view('admin.categorie.edit', compact('categorie', 'sous_categorie'));
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
        $categorie = Categorie::findOrFail($id);
        if ($request->has('lib')) {
            $categorie->lib = $request->lib;
        }
        $categorie->save();
        return redirect('/categories')->with('status', 'Catégorie a été modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();
        return redirect('/categories')->with('status', 'Catégorie a été Supprimer avec succès');
    }
}
