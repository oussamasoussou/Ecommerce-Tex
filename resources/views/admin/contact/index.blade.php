@extends('admin.layouts.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        
        <div class="row align-items-end">
            <div class="col-lg-9">
                <p style="padding:0px 0px 0px 50px;font-size:20px; font-weight:bolder">  liste des contacts    </p>
            </div>
                
            <div style="margin-bottom:20px">
                <div class="col-lg-3">
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
                                        <th style="width:54px">Nom</th> 
                                        <th style="width:3px">Prénom</th> 
                                        <th style="width:10px">Téléphone</th> 
                                        <th style="width:10px">Email</th> 
                                        <th style="width:10px">Message</th> 
                                        <th style="width:5px">Supprimer</th> 
                                    </tr>
                                </thead>
                                <tbody>  
                                    @foreach ($contact as $cont )
                                        <tr>
                                            <td>{{ $cont->id }}</td>
                                            <td>{{ $cont->nom }}</td> 
                                            <td>{{ $cont->prenom }}</td> 
                                            <td>{{ $cont->tel }}</td> 
                                            <td>{{ $cont->email }}</td> 
                                            <td>{{ $cont->desc }}</td> 
                                            <td><div style="text-align: center"><a href="{{ url('delete-contact-admin/'.$cont->id) }}" class="btn btn-icon btn-outline-danger"><i class="ik ik-trash"></i></a></div></td> 
                                        </tr> 
                                     @endforeach 
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th style="width:3px">ID</th>
                                        <th style="width:54px">Nom</th> 
                                        <th style="width:3px">Prénom</th> 
                                        <th style="width:10px">Téléphone</th> 
                                        <th style="width:10px">Email</th> 
                                        <th style="width:10px">Message</th> 
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