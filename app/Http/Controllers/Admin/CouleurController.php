<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Couleur;
use Illuminate\Http\Request;

class CouleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $couleur = Couleur::all();
        return view('admin.couleur.index', compact('couleur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $couleur = Couleur::all();
        return view('admin.couleur.create', compact('couleur'));
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
            'code' => 'required|unique:couleurs',
            'nom' => 'sometimes',
        ]);
        $couleur = new Couleur();
        $couleur->code = $request->code;
        $couleur->nom = $request->nom;

        $couleur->save();
        return redirect('/couleur')->with('status', 'Couleur a été ajouté avec succès');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $couleur = Couleur::findOrFail($id);
        return view('admin.couleur.edit', compact('couleur'));
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
            'code' => 'sometimes|unique:couleurs',
            'nom' => 'sometimes',
        ]);
        $couleur = couleur::findOrFail($id);
        if ($request->has('code')) {
            $couleur->code = $request->code;
        }
        if ($request->has('nom')) {
            $couleur->nom = $request->nom;
        }
        $couleur->save();
        return redirect('/couleur')->with('status', 'Couleur a été modifier avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $couleur = Couleur::findOrFail($id);
        $couleur->delete();
        return redirect('/couleur')->with('status', 'Couleur a été Supprimer avec succès');
    }
}
