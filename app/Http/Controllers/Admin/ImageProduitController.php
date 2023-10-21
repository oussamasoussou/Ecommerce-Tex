<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImageProduit;
use Illuminate\Http\Request;

class ImageProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $image_produit = ImageProduit::where('produit_id', $id)->get();
        return view('admin.produit.imageproduit', compact('image_produit'));
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
            'produit_id' => 'required|exists:produit,id',
            'img' => 'required',
        ]);

        $image_produit = new ImageProduit();
        if ($request->img) {
            $this->validate($request, [
                'img' => 'mimes:jpg,png,jpeg',
            ]);
            foreach ($request->img as $img) {
                $fileName = time() . '.' . $img->extension();
                $path = 'uploads/image_produit/';
                if (!is_dir($path)) {
                    mkdir($path, 0755, true);
                }
                $path = public_path('uploads/image_produit/') . $fileName;
                Image::make($path)->save($path);
                $path_name = 'uploads/image_produit/' . $fileName;
                ImageProduit::create([
                    'produit_id' => $image_produit->id,
                    'path' => $path_name,
                ]);
            }
        }
        $image_produit->save();
        return redirect('/images')->with('status', 'images a été ajouté avec succès');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
