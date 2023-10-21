@extends('admin.layouts.app')
@section('content')

<div class="main-content">
    <div class="container-fluid"> 
        <div class="card-header"><h3>Ajouter produit</h3></div> 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{ url('add-produits')}}" method="POST" enctype="multipart/form-data">
                            @csrf 

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Catégorie</label>
                                        <select class="form-control select2" name="categorie_id" id="categorie_id">
                                            @foreach ($categorie as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->lib }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Sous-catégorie</label>
                                        <select class="form-control select2" multiple="multiple" name="sous_categorie_id" id="sous_categorie_id">
                                            <!-- Les options seront mises à jour dynamiquement avec jQuery -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Categorie </label>
                                            <select class="form-control select2" name="categorie_id">
                                                @foreach ($categorie as $cat )
                                                    <option value="{{ $cat->id }}" required>{{ $cat->lib }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Sous-categorie </label>
                                            <select class="form-control select2" multiple="multiple" name="sous_categorie_id">
                                                @foreach ($sous_categorie as $scat )
                                                    <option value="{{ $scat->id }}" required>{{ $scat->lib }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                            </div>  -->




                            <div class="form-group">
                                <label for="exampleInputName1">Titre</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Titre" name="lib" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Référence</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Référence" name="ref" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Statut</label>
                                        <select class="form-control" id="exampleSelectGender" name="status" required>
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
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Prix" name="prix" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Prix promo</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Prix promo" name="prix_promo" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Quantité</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Quantité" name="qte" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Image</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="img[]" multiple class="form-control file-upload-info" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Sale</label>
                                        <select class="form-control" id="exampleSelectGender" name="sale" required>
                                            <option value="0">False</option>
                                            <option value="1">True</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Best Seller</label>
                                        <select class="form-control" id="exampleSelectGender" name="bestseller" required>
                                            <option value="0">False</option>
                                            <option value="1">True</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Description</label>
                                        <textarea class="form-control" id="desc" rows="4" name="desc" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Court Description</label>
                                        <textarea class="form-control" id="small_desc" rows="4" name="small_desc" required></textarea>
                                    </div> 
                            </div>
                            
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#categorie_id').change(function() {
            var categorie_id = $(this).val();
            $('#sous_categorie_id').empty(); // Réinitialiser les options

            @foreach ($sous_categorie as $scat)
                if ({{ $scat->categorie_id }} == categorie_id) {
                    $('#sous_categorie_id').append('<option value="{{ $scat->id }}">{{ $scat->lib }}</option>');
                }
            @endforeach
        });
    });
</script>

@endsection