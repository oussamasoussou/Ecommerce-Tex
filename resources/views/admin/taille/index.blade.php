@extends('admin.layouts.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        
        <div class="row align-items-end">
            <div class="col-lg-9">
                <p style="padding:0px 0px 0px 50px;font-size:20px; font-weight:bolder">  Liste des tailles    </p>
            </div>
            <div style="margin-bottom:20px">
                <div class="col-lg-3">
                    <a href="{{ url('create-taille') }}" class="btn btn-outline-primary"><p style="padding:0px 90px 0px 90px;">   AJOUTER TAILLE </p></a>
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
                                        <th style="width:54px">Taille</th> 
                                        <th style="width:5px">Modifier</th> 
                                    </tr>
                                </thead>
                                <tbody>  
                                    @foreach ($taille as $tail )
                                        <tr>
                                            <td>{{ $tail->id }}</td>
                                            <td>{{ $tail->taille }}</td>
                                            <td><div style="text-align: center"><a href="{{ url('edit-taille/'.$tail->id) }}" class="btn btn-icon btn-outline-success"><i class="ik ik-file"></i></a></div></td> 
                                        </tr> 
                                     @endforeach 
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th style="width:3px">ID</th>
                                        <th style="width:54px">Taille</th> 
                                        <th style="width:5px">Modifier</th> 
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