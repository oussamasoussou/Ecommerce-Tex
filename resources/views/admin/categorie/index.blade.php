@extends('admin.layouts.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        
        <div class="row align-items-end">
            <div class="col-lg-6">
                <p style="padding:0px 0px 0px 50px;font-size:20px; font-weight:bolder">  liste des Catégories    </p>
            </div> 
            <!-- <div style="margin-bottom:20px">
                <div class="col-lg-3">
                    <div style= ><a href="{{ url('create-categorie') }}" class="btn btn-outline-primary"><p style="padding:0px 45px 0px 45px;">   AJOUTER CATEGORIE </p></a> </div>  
                </div>
            </div>
                <div style="margin-bottom:20px">
                    <div class="col-lg-3">
                        <a href="{{ url('create-sous-categorie') }}" class="btn btn-outline-info"><p style="padding:0px 40px 0px 45px;">   AJOUTER SOUS CATEGORIE </p></a> 
                    </div> 
                </div>  -->
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card"> 
                    <div class="card-body">
                        <div class="dt-responsive">
                            @foreach ($listeCateg as $index => $cat )
                                <table id="simpletable" class="table table-striped table-bordered nowrap"> 
                                    <thead> 
                                        <th colspan="2">
                                            <span style="color: white">Categorie {{$index+1}} :</span>
                                            <strong> <span style="color: white">{{ $cat->lib }} </span></strong>
                                            <a href=" {{ url('edit-categorie/'.$cat->id) }}" class="btn btn-icon">
                                                <span style="color: green;padding:100px"> Modifier</span>
                                            </a>
                                            <a href="{{ url('delete-categorie/'.$cat->id) }} " class="ml-3 btn btn-icon">
                                                <span style="color: red;padding:200px"> Supprimer</span>
                                            </a>
                                        </th> 
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th><span style="color: white">Sous catégorie</span></th> 
                                            <th><span style="color: white">Actions</span></th> 
                                        </tr>
                                    </thead>
                                    @foreach ( $cat->sous_categorie as $key=>$sous_categorie )
                                    <tbody> 
                                        <tr> 
                                            <td style="width: 90%">{{$index+1}}. {{$key+1}}  {{ $sous_categorie->lib }} </td> 
                                            <td colspan="2" style="width: 10%">
                                                <div style="text-align: center"> 
                                                    <a href="{{ url('edit-sous-categorie/'.$sous_categorie->id) }}" class="btn btn-icon btn-outline-success"><i class="ik ik-file"></i></a>
                                                    <a href="{{ url('delete-sous-categorie/'.$sous_categorie->id) }}" class="btn btn-icon btn-outline-danger"><i class="ik ik-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr> 
                                    </tbody>
                                    @endforeach

                                    @if(count($cat->sous_categorie) == 0 )
                                        <tbody> 
                                            <tr>
                                                <td colspan=" 2" style="width: 90%">Aucune sous catégorie </td> 
                                            </tr> 
                                        </tbody>
                                    @endif
                                </table>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection