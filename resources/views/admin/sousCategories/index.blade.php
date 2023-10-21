@extends('admin.layouts.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        
        <div class="row align-items-end">
            <div class="col-lg-9">
                <p style="padding:0px 0px 0px 50px;font-size:20px; font-weight:bolder">  liste des Catégories    </p>
            </div>
            <div style="margin-bottom:20px">
                <div class="col-lg-3">
                    <a href="{{ url('create-categorie') }}" class="btn btn-outline-primary"><p style="padding:0px 90px 0px 90px;">   AJOUTER CATEGORIE </p></a>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-sm-12">
                <div class="card"> 
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="simpletable"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Titre</th> 
                                    <th>Catégories</th> 
                                    <th>Modifier</th> 
                                    <th>Supprimer</th> 
                                </tr>
                                </thead>
                                <tbody>  
                                    @foreach ($sous_categorie as $scat )
                                        <tr>
                                            <td style="width: 5%">{{ $scat->id }}</td>
                                            <td style="width: 45%">{{ $scat->lib }}</td> 
                                            <td style="width: 45%">{{ $scat->categorie->lib }}</td> 
                                            <td style="width: 5%"><div style="text-align: center"><a href="{{ url('edit-sous-categorie/'.$scat->id) }}" class="btn btn-icon btn-outline-success"><i class="ik ik-file"></i></a></div></td> 
                                            <td style="width: 5%"><div style="text-align: center"><a href="{{ url('delete-sous-categorie/'.$scat->id) }}" class="btn btn-icon btn-outline-danger"><i class="ik ik-trash"></i></a></div></td> 
                                        </tr> 
                                     @endforeach 
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th> 
                                    <th>Catégories</th> 
                                    <th>Modifier</th> 
                                    <th>Supprimer</th> 
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection