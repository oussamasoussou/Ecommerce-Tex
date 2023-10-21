@extends('admin.layouts.app')
@section('content')

 <div class="main-content">
    <div class="container-fluid"> 
        <div class="card-header"><h3>Ajouter produit</h3></div> 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{ url('update-produits/'.$produit->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Categorie </label>
                                            <select class="form-control select2" name="categorie_id"  > 
                                                @foreach($categorie as $ct)
                                                    <option :selected="<?php $ct->id==$produit->categorie_id ? 'selected' : '' ?>" value="{{$ct->id}}"> {{$ct->lib}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Sous-categorie  </label>
                                            <select class="form-control select2"  name="sous_categorie_id"  > 
                                            @foreach($sous_categorie as $ct)
                                                    <option :selected="<?php $ct->id==$produit->sous_categorie_id ? 'selected' : '' ?>" value="{{$ct->id}}"> {{$ct->lib}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputName1">Titre</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Titre" name="lib" value="{{ $produit->lib }}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Référence</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Référence" name="ref" value="{{ $produit->ref }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Statut</label>
                                        <select class="form-control" id="exampleSelectGender" name="status" value="{{ $produit->status }}">
                                            <option>Disponible</option>
                                            <option>Pas disponible</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Prix</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Prix" name="prix" value="{{ $produit->prix }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Prix promo</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Prix promo" name="prix_promo" value="{{ $produit->prix_promo }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Quantité</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Quantité" name="qte" value="{{ $produit->qte }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Image</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="img[]" multiple class="form-control file-upload-info"  >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Sale</label>
                                        <select class="form-control" id="exampleSelectGender" name="sale" required>
                                            <option :selected="<?php $produit->sale==0 ? 'selected' : '' ?>" value="0">False</option>
                                            <option :selected="<?php $produit->sale==1 ? 'selected' : '' ?>" value="1">True</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Best Seller </label>
                                        <select class="form-control" id="exampleSelectGender" name="bestseller" required>
                                            <option :selected="<?php $produit->bestseller==false ? 'selected' : '' ?>" value="0">False</option>
                                            <option :selected="<?php $produit->bestseller==true ? 'selected' : '' ?>" value="1">True</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Description</label>
                                        <textarea class="form-control" id="desc" rows="4" name="desc" value="{{ $produit->desc }}">{{ $produit->small_desc }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Court Description</label>
                                        <textarea class="form-control" id="small_desc" rows="4" name="small_desc" value="{{ $produit->small_desc }}">{{ $produit->small_desc }}</textarea>
                                    </div> 
                            </div>
                            <div class="row">
                                @foreach ($image_produit as $image)
                                <div class="col-md-3">
                                   
                                        <img  src="/{{ $image->img }}" style="height: 100px;width:100px" />
                                        <a href="{{ url('delete-image/'.$image->id) }}">Supprimer</a>
                                    </div>
                                    @endforeach
                            </div>
                            <br> <br>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- ********************************************************************************************************************************************************************** --}}

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                     
                 <div style="display: none">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-xl-4 mb-30">
                                <input class="js-single">
                                <input class="js-default" >
                                <input class="js-primary" >
                                <input class="js-success" >
                                <input class="js-info" >
                                <input class="js-warning" >
                                <input class="js-danger" >
                                <input class="js-inverse" >
                                <input class="js-switch"> 
                                <input class="js-large">
                                <input class="js-medium">
                                <input class="js-small">
                            </div>
                            <div class="col-sm-12 col-xl-4 mb-30"> 
                                <input class="js-dynamic-state">
                                <span class="btn btn-primary js-dynamic-enable">Enable</span>
                                <span class="btn btn-inverse js-dynamic-disable">Disable</span>
                            </div>
                        </div>
                    </div>
                 </div>
                </div>
            </div>
        </div>         
    </div>
</div>

@endsection