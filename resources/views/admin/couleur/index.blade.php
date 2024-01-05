@extends('admin.layouts.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        
        <div class="row align-items-end">
            <div class="col-lg-9">
                <p style="padding:0px 0px 0px 50px;font-size:20px; font-weight:bolder">  Liste des couleurs    </p>
            </div>
            <div style="margin-bottom:20px">
                <div class="col-lg-3">
                    <a href="{{ url('create-couleur') }}" class="btn btn-outline-primary"><p style="padding:0px 90px 0px 90px;">   AJOUTER COULEUR </p></a>
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
                                        <th style="width:3px">ID</th>
                                        <th style="width:54px">Code</th> 
                                        <th style="width:54px">Nom couleur</th> 
                                        <th style="width:5px">Modifier</th> 
                                        <th style="width:5px">Supprimer</th> 
                                    </tr>
                                </thead>
                                <tbody>  
                                    @foreach ($couleur as $coul )
                                        <tr>
                                            <td>{{ $coul->id }}</td>
                                            <td>{{ $coul->code }}</td>
                                            <td>{{ $coul->nom }}</td>
                                            <td><div style="text-align: center"><a href="{{ url('edit-couleur/'.$coul->id) }}" class="btn btn-icon btn-outline-success"><i class="ik ik-file"></i></a></div></td> 
                                            <td><div style="text-align: center"><a href="{{ url('delete-couleur/'.$coul->id) }}" class="btn btn-icon btn-outline-danger"><i class="ik ik-trash"></i></a></div></td> 

                                        </tr> 
                                     @endforeach 
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th style="width:3px">ID</th>
                                        <th style="width:54px">Code</th> 
                                        <th style="width:54px">Nom couleur</th> 
                                        <th style="width:5px">Modifier</th> 
                                        <th style="width:5px">Supprimer</th> 
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