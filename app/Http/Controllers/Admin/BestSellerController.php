<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BestSeller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

class BestSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bestseller = BestSeller::all();
        return view('admin.bestseller.index', compact('bestseller'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bestseller = BestSeller::all();
        return view('admin.bestseller.create', compact('bestseller'));
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
            'lib' => 'required|unique:produit',
            'ref' => 'sometimes',
            'status' => 'sometimes',
            'small_desc' => 'sometimes|max:80',
            'desc' => 'sometimes',
            'prix' => 'sometimes',
            'prix_promo' => 'sometimes',
            'img' => 'sometimes',
            'qte' => 'sometimes',
        ]);
        $bestseller = new BestSeller();
        $bestseller->lib = $request->lib;
        $bestseller->ref = $request->ref;
        $bestseller->status = $request->status;
        $bestseller->small_desc = $request->small_desc;
        $bestseller->desc = $request->desc;
        $bestseller->prix = $request->prix;
        $bestseller->prix_promo = $request->prix_promo;
        $bestseller->qte = $request->qte;

        if ($request->hasFile('img') != null) {
            $this->validate($request, [
                'img' => 'mimes:jpg,png,jpeg',
            ]);
            $fileName = time() . '.' . $request->img->getClientOriginalName();
            $path = 'img_bestseller/';
            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }
            $path = public_path('img_bestseller/') . $fileName;
            Image::make($request->img)->save($path);
            $bestseller->img = 'img_bestseller/' . $fileName;
        }

        $bestseller->save();
        return redirect('/bestseller')->with('status', 'Best seller a été ajouté avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bestseller = BestSeller::findOrFail($id);
        return view('admin.bestseller.edit', compact('bestseller'));
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
            'lib' => 'required|unique:produit',
            'ref' => 'sometimes',
            'status' => 'sometimes',
            'small_desc' => 'sometimes',
            'desc' => 'sometimes',
            'prix' => 'sometimes',
            'prix_promo' => 'sometimes',
            'img' => 'sometimes',
            'qte' => 'sometimes',
        ]);
        $bestseller = BestSeller::findOrFail($id);
        if ($request->has('lib')) {
            $bestseller->lib = $request->lib;
        }
        if ($request->has('ref')) {
            $bestseller->ref = $request->ref;
        }
        if ($request->has('status')) {
            $bestseller->status = $request->status;
        }
        if ($request->has('small_desc')) {
            $bestseller->small_desc = $request->small_desc;
        }
        if ($request->has('desc')) {
            $bestseller->desc = $request->desc;
        }
        if ($request->has('prix_promo')) {
            $bestseller->prix_promo = $request->prix_promo;
        }
        if ($request->has('prix')) {
            $bestseller->prix = $request->prix;
        }
        if ($request->has('qte')) {
            $bestseller->qte = $request->qte;
        }
        $bestseller->save();
        return redirect('/bestseller')->with('status', 'Best seller a été modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bestseller = BestSeller::findOrFail($id);
        $bestseller->delete();
        return redirect('/bestseller')->with('status', 'Best seller a été Supprimer avec succès');
    }
}
