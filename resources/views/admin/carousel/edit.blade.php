@extends('admin.layouts.app')

@section('content')

 <div class="main-content">
    <div class="container-fluid"> 
        <div class="card-header"><h3>Modifier Carousel</h3></div> 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{ url('update-carousel')}}" method="POST" enctype="multipart/form-data">
                            @csrf   
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Titre</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Titre" name="lib" value="{{ $carousel->lib }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Image</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="img" class="form-control file-upload-info">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Description</label>
                                        <textarea class="form-control" id="desc" rows="4" name="desc" value="{{ $carousel->desc }}"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Court Description</label>
                                        <textarea class="form-control" id="small_desc" rows="4" name="small_desc" value="{{ $carousel->small_desc }}"></textarea>
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