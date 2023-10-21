<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel = Carousel::all();
        return view('admin.carousel.index', compact('carousel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carousel = Carousel::all();
        return view('admin.carousel.create', compact('carousel'));
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
            'lib' => 'required',
            'small_desc' => 'sometimes',
            'desc' => 'sometimes',
            'img' => 'sometimes',
        ]);
        $carousel = new Carousel();
        $carousel->lib = $request->lib;
        $carousel->small_desc = $request->small_desc;
        $carousel->desc = $request->desc;
        if ($request->hasFile('img') != null) {
            $this->validate($request, [
                'img' => 'mimes:jpg,png,jpeg',
            ]);
            $fileName = time() . '.' . $request->img->getClientOriginalName();
            $path = 'img_carousel/';
            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }
            $path = public_path('img_carousel/') . $fileName;
            Image::make($request->img)->save($path); 
            $carousel->img = 'img_carousel/' . $fileName;
        }
        $carousel->save();
        return redirect('/carousel')->with('status', 'carousel a été ajouté avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel = Carousel::findOrFail($id);
        return view('admin.carousel.edit', compact('carousel'));
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
            'small_desc' => 'sometimes',
            'desc' => 'sometimes',
            'img' => 'sometimes',
        ]);
        $carousel = Carousel::findOrFail($id);
        if ($request->has('lib')) {
            $carousel->lib = $request->lib;
        }
        if ($request->has('small_desc')) {
            $carousel->small_desc = $request->small_desc;
        }
        if ($request->has('desc')) {
            $carousel->desc = $request->desc;
        }
        $carousel->save();
        return redirect('/carousel')->with('status', 'carousel a été modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::findOrFail($id);
        $carousel->delete();
        return redirect('/carousel')->with('status', 'carousel a été Supprimer avec succès');
    }
}
