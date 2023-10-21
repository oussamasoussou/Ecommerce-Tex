@extends('admin.layouts.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        
        <div class="row align-items-end">
            <div class="col-lg-9">
                <p style="padding:0px 0px 0px 50px;font-size:20px; font-weight:bolder">  Liste des informations    </p>
            </div>
            <div style="margin-bottom:20px">
                <div class="col-lg-3">
                    <a href="{{ url('create-information') }}" class="btn btn-outline-primary"><p style="padding:0px 90px 0px 90px;">   AJOUTER INFORMATION </p></a>
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
                                        <th style="width:54px">Image</th> 
                                        <th style="width:54px">Email</th> 
                                        <th style="width:10px">Téléphone1</th> 
                                        <th style="width:10px">Téléphone2</th> 
                                        <th style="width:3px">Rue</th> 
                                        <th style="width:10px">Localisation</th> 
                                        <th style="width:5px">Modifier</th> 
                                        <th style="width:5px">Supprimer</th> 
                                    </tr>
                                </thead>
                                <tbody>  
                                    @foreach ($information as $info )
                                        <tr>
                                            <td>{{ $info->id }}</td>
                                            <td> 
                                                <img  src="{{$info->img}}" style="height: 50px;width:50px">
                                            </td> 
                                            <td>{{ $info->email }}</td>
                                            <td>{{ $info->tel1 }}</td>
                                            <td>{{ $info->tel2 }}</td>
                                            <td>{{ $info->rue }}</td>
                                            <td>{{ $info->localisation }}</td>
                                            <td><div style="text-align: center"><a href="{{ url('edit-information/'.$info->id) }}" class="btn btn-icon btn-outline-success"><i class="ik ik-file"></i></a></div></td> 
                                        </tr> 
                                     @endforeach 
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="width:3px">ID</th>
                                        <th style="width:54px">Image</th> 
                                        <th style="width:54px">Email</th> 
                                        <th style="width:10px">Téléphone1</th> 
                                        <th style="width:10px">Téléphone2</th> 
                                        <th style="width:3px">Rue</th> 
                                        <th style="width:10px">Localisation</th> 
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