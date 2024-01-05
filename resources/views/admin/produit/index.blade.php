@extends('admin.layouts.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        
        <div class="row align-items-end">
            <div class="col-lg-9">
                <p style="padding:0px 0px 0px 50px;font-size:20px; font-weight:bolder">  liste des produits    </p>
            </div>
            <div style="margin-bottom:20px">
                <div class="col-lg-3">
                    <a href="{{ url('create-produits') }}" class="btn btn-outline-primary"><p style="padding:0px 90px 0px 90px;">   AJOUTER PRODUIT </p></a>
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
                                        <th style="width:5%">ID</th>
                                        <th style="width:40%">Titre</th> 
                                        <th style="width:10%">Référence</th> 
                                        <th style="width:10%">Qte</th> 
                                        <th style="width:10%">Prix</th> 
                                        <th style="width:8%">Status</th>

                                        <th style="width:5%">
                                            <div style="text-align: right">
                                                Modifier
                                            </div>
                                        </th>

                                        <th style="width:7%">
                                            <div style="text-align: right">
                                                Supprimer
                                            </div>
                                        </th> 
                                    </tr>
                                </thead>
                                <tbody>  
                                    @foreach ($produit as $prod )
                                        <tr>
                                            <td>{{ $prod->id }}</td>
                                            <td>{{ $prod->lib }}</td> 
                                            <td>{{ $prod->ref }}</td> 
                                            <td>{{ $prod->qte }}</td> 
                                            <td>{{ $prod->prix }}</td> 
                                            <td>{{ $prod->status }}</td> 
                                            <td><div style="text-align:center"><a href="{{ url('edit-produits/'.$prod->id) }}" class="btn btn-icon btn-outline-success"><i class="ik ik-file"></i></a></div></td> 
                                            <td><div style="text-align:center"><a href="{{ url('delete-produits/'.$prod->id) }}" class="btn btn-icon btn-outline-danger"><i class="ik ik-trash"></i></a></div></td>                                        
                                        </tr> 
                                     @endforeach 
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="width:5%">ID</th>
                                        <th style="width:40%">Titre</th> 
                                        <th style="width:10%">Référence</th> 
                                        <th style="width:10%">Qte</th> 
                                        <th style="width:10%">Prix</th> 
                                        <th style="width:8%">Status</th>

                                        <th style="width:5%">
                                            <div style="text-align: right">
                                                Modifier
                                            </div>
                                        </th>

                                        <th style="width:7%">
                                            <div style="text-align: right">
                                                Supprimer
                                            </div>
                                        </th> 
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