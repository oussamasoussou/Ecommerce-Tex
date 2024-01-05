@extends('admin.layouts.app')

@section('content')

 <div class="main-content">
    <div class="container-fluid"> 
        <div class="card-header"><h3>Modifier Commande    </h3></div> 

   
 

        <div class="row">
            <div class="col-sm-12"> 
                <div class="card"> 
                    <div class="card-body">
                        <div style="display:block">
                            <div style="float:left">
                                    <h6> <strong> Client : </strong> {{$commande->nom}}   {{$commande->prenom}}     <br>
                            
                                    <strong>Téléphone : </strong>{{$commande->tel }} <br>
                                    <strong>Email : </strong> {{$commande->email}}  <br><br><br>
                                    </h6>
                            </div>
                            <div style="float:right"> 
                                <form class="forms-sample" action="{{ url('confirmation-commande/'.$commande->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                <button style="    padding: 6px;    background-color: #272d36; color: white;"> Confirmer la commande </button>
                                </form>
                            </div>
                        </div>
                        <div class="dt-responsive">

                            <table id="simpletable"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Produit</th>
                                        <th>Prix</th> 
                                        <th>Quantité</th> 
                                        <th>Couleur</th> 
                                        <th>Taille</th> 
                                        <th>Prix Total</th>   
                                        <th>Image</th>   
                                    </tr>
                                </thead>
                                <tbody>  
                                    @foreach ($listeProduitparcommande as $com )
                                        <tr>
                                          
                                            <td>{{ $com['nom'] }}</td>
                                            <td>{{ $com['prix'] }} &nbsp;TND</td> 
                                            <td>{{ $com['qte'] }}</td> 
                                            <td>{{ $com['couleur'] }}</td> 
                                            <td>{{ $com['taille'] }}</td> 
                                            <td>{{ $com['prix_total'] }}&nbsp;TND</td> 
                                            <td><img src="{{ asset($com['image']) }}" alt="Image Produit" class="image-hover" style="width:100px; height:100px"></td>


                                          </tr> 
                                     @endforeach 
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Produit</th>
                                        <th>Prix</th> 
                                        <th>Quantité</th> 
                                        <th>Couleur</th> 
                                        <th>Taille</th> 
                                        <th>Prix Total : {{$commande->prix}} &nbsp;TND</th>
                                        <th>Image</th>   

                                    </tr>
                                </tfoot>
                            </table>
                        </div>


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