<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Livraison;
use Illuminate\Http\Request;

class LivraisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livraison = Livraison::all();
        return view('admin.livraison.index', compact('livraison'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $livraison = Livraison::all();
        return view('admin.livraison.create', compact('livraison'));
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
            'prix' => 'sometimes',
        ]);
        $livraison = new Livraison();
        $livraison->prix = $request->prix;
        $livraison->save();
        return redirect('/livraison-admin')->with('status', 'livraison a été ajouté avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livraison = Livraison::findOrFail($id);
        return view('admin.livraison.edit', compact('livraison'));
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
            'prix' => 'sometimes',
        ]);
        $livraison = Livraison::findOrFail($id);
        if ($request->has('instagram')) {
            $livraison->prix = $request->prix;
        }  
        $livraison->save();
        return redirect('/livraison-admin')->with('status', 'Livraison a été modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livraison = Livraison::findOrFail($id);
        $livraison->delete();
        return redirect('/livraison-admin')->with('status', 'Livraison a été Supprimer avec succès');
    }
}
