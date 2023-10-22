<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Taille;
use Illuminate\Http\Request;

class TailleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taille = Taille::all();
        return view('admin.taille.index', compact('taille'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taille = Taille::all();
        return view('admin.taille.create', compact('taille'));
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
            'taille' => 'required|unique:tailles',
        ]);
        $taille = new Taille();
        $taille->taille = $request->taille;

        $taille->save();
        return redirect('/taille')->with('status', 'Taille a été ajouté avec succès');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taille = Taille::findOrFail($id);
        return view('admin.taille.edit', compact('taille'));
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
            'taille' => 'required|unique:tailles',
        ]);
        $taille = Taille::findOrFail($id);
        if ($request->has('taille')) {
            $taille->taille = $request->taille;
        }
        $taille->save();
        return redirect('/taille')->with('status', 'Taille a été modifier avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taille = Taille::findOrFail($id);
        $taille->delete();
        return redirect('/taille')->with('status', 'Taille a été Supprimer avec succès');
    }
}
