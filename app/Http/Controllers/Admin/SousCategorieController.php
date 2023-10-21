<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\SousCategorie;
use Illuminate\Http\Request;

class SousCategorieController extends Controller
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
        return view('admin.sousCategories.create', compact('categorie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sous_categorie = new SousCategorie();
        $sous_categorie->lib = $request->input('lib');
        $sous_categorie->categorie_id = $request->categorie_id;
        $sous_categorie->save();
        return redirect('/sous-categories')->with('status', 'Catégorie a été ajouté avec succès');
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
        $categorie = Categorie::where('id',$sous_categorie->id)->first();
        return view('admin.sousCategories.edit', compact('categorie', 'sous_categorie'));
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
        $sous_categorie = SousCategorie::findOrFail($id);
        if ($request->has('lib')) {
            $sous_categorie->lib = $request->lib;
        }
        if ($request->has('categorie_id')) {
            $sous_categorie->categorie_id = $request->categorie_id;
        }
        $sous_categorie->save();
        return redirect('/sous-categories')->with('status', 'Sous Catégorie a été modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sous_categorie = SousCategorie::findOrFail($id);
        $sous_categorie->delete();
        return redirect('/sous-categories')->with('status', 'Catégorie a été Supprimer avec succès');
    }
}
