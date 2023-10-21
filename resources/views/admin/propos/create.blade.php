@extends('admin.layouts.app')

@section('content')

 <div class="main-content">
    <div class="container-fluid"> 
        <div class="card-header"><h3>Ajouter A propos</h3></div> 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{ url('add-propos-admin')}}" method="POST" enctype="multipart/form-data">
                            @csrf   

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Titre</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Titre" name="titre" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Image</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="img" class="form-control file-upload-info" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header"><h3>Description</h3></div>
                                        <div class="card-body">
                                            <textarea class="form-control html-editor" rows="10" name="desc" ></textarea>
                                        </div>
                                    </div>
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

@endsection