<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = Information::all();
        return view('admin.information.index', compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $information = Information::all();
        return view('admin.information.create', compact('information'));
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
            'facebook' => 'sometimes',
            'instagram' => 'sometimes',
            'tel1' => 'sometimes',
            'tel2' => 'sometimes',
            'email' => 'sometimes',
            'rue' => 'sometimes',
            'localisation' => 'sometimes',
        ]);
        $information = new Information();
        $information->facebook = $request->facebook;
        $information->instagram = $request->instagram;
        $information->tel1 = $request->tel1;
        $information->tel2 = $request->tel2;
        $information->email = $request->email;
        $information->rue = $request->rue;
        $information->localisation = $request->localisation;
        if ($request->hasFile('logo') != null) {
            $this->validate($request, [
                'logo' => 'mimes:jpg,png,jpeg',
            ]);
            $fileName = time() . '.' . $request->logo->getClientOriginalName();

            $path = 'logo/';
            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }
            $path = public_path('logo/') . $fileName;
            Image::make($request->logo)->resize(215, 60)->save($path);
            $information->logo = 'logo/' . $fileName;
        }
        $information->save();
        return redirect('/information')->with('status', 'Informations a été ajouté avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $information = Information::findOrFail($id);
        return view('admin.information.edit', compact('information'));
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
            'facebook' => 'sometimes',
            'instagram' => 'sometimes',
            'tel1' => 'sometimes',
            'tel2' => 'sometimes',
            'email' => 'sometimes',
            'rue' => 'sometimes',
            'localisation' => 'sometimes',
        ]);
        $information = Information::findOrFail($id);
        if ($request->has('facebook')) {
            $information->facebook = $request->facebook;
        }
        if ($request->has('instagram')) {
            $information->instagram = $request->instagram;
        }
        if ($request->has('tel1')) {
            $information->tel1 = $request->tel1;
        }
        if ($request->has('tel2')) {
            $information->tel2 = $request->tel2;
        }
        if ($request->has('email')) {
            $information->email = $request->email;
        }
        if ($request->has('rue')) {
            $information->rue = $request->rue;
        }
        if ($request->has('localisation')) {
            $information->localisation = $request->localisation;
        }
        if ($request->has('logo')) {
            if ($request->hasFile('logo') != null) {
                $this->validate($request, [
                    'logo' => 'mimes:jpg,png,jpeg',
                ]);
                $fileName = time() . '.' . $request->logo->getClientOriginalName();

                $path = 'logo/';
                if (!is_dir($path)) {
                    mkdir($path, 0755, true);
                }
                $path = public_path('logo/') . $fileName;
                Image::make($request->logo)->resize(215, 60)->save($path);
                $information->logo = 'logo/' . $fileName;
            }
        }
        $information->save();
        return redirect('/information')->with('status', 'Information a été modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $information = Information::findOrFail($id);
        $information->delete();
        return redirect('/information')->with('status', 'Information a été Supprimer avec succès');
    }
}
