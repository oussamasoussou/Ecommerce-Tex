@extends('admin.layouts.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        
        <div class="row align-items-end">
            <div class="col-lg-9">
                <p style="padding:0px 0px 0px 50px;font-size:20px; font-weight:bolder">  liste des commandes    </p>
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
                                        <th>Nom</th> 
                                        <th>Prénom</th> 
                                        <th>Téléphone</th> 
                                        <th>Email</th> 
                                        <th>Couleur</th>
                                        <th>Taille</th>
                                        <th>Status</th>

                                        <th>
                                            <div style="text-align: right">
                                                Modifier
                                            </div>
                                        </th>

                                        <th>
                                            <div style="text-align: right">
                                                Supprimer
                                            </div>
                                        </th> 
                                    </tr>
                                </thead>
                                <tbody>  
                                    @foreach ($commande as $com )
                                        <tr>
                                            <td>{{ $com->id }}</td>
                                            <td>{{ $com->nom }}</td> 
                                            <td>{{ $com->prenom }}</td> 
                                            <td>{{ $com->tel }}</td> 
                                            <td>{{ $com->email }}</td> 
                                            <td>{{ $com->couleur }}</td> 
                                            <td>{{ $com->taille }}</td> 
                                            <td>{{ $com->status }}</td> 
                                            <td><div style="text-align:center"><a href="{{ url('edit-commandes/'.$com->id) }}" class="btn btn-icon btn-outline-success"><i class="ik ik-file"></i></a></div></td> 
                                            <td><div style="text-align:center"><a href="{{ url('delete-commande/'.$com->id) }}" class="btn btn-icon btn-outline-danger"><i class="ik ik-trash"></i></a></div></td> 
                                        </tr> 
                                     @endforeach 
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th> 
                                        <th>Prénom</th> 
                                        <th>Téléphone</th> 
                                        <th>Email</th> 
                                        <th>Couleur</th>
                                        <th>Taille</th>
                                        <th>Status</th>

                                        <th>
                                            <div style="text-align: right">
                                                Modifier
                                            </div>
                                        </th>

                                        <th>
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