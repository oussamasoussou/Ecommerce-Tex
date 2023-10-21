@extends('admin.layouts.app')
@section('content')

 <div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>Catégorie</h3></div>
                    <div class="card-body">
                        <form class="forms-sample" action="{{ url('add-categorie') }}" method="POST" >
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Titre</label>
                                <input type="text" disabled="disabled" class="form-control" id="exampleInputName1" placeholder="Name" name="lib">
                            </div>  
                            <div style="padding-top: 60px">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>Sous-catégorie</h3></div>
                    <div class="card-body">
                        <form class="forms-sample" action="{{ url('add-sous-categorie') }}" method="POST" >
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Titre</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="lib" required>
                            </div>
                            <div style="padding-bottom: 60px">
                                <div class="row"> 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Catégories</label>
                                            <select class="form-control" id="exampleSelectGender" name="categorie_id" required>
                                                @foreach ($categorie as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->lib }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
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