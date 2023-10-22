@extends('admin.layouts.app')

@section('content')

 <div class="main-content">
    <div class="container-fluid"> 
        <div class="card-header"><h3>Ajouter taille</h3></div> 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{ url('update-taille/'.$taille->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputName1">Taille</label>
                                <input type="text" class="form-control" id="exampleInputName1" value="{{ $taille->taille }}" name="taille">
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

@endsection