@extends('layouts.apps')
@section('title')
<title>Add_Delivery</title>
@endsection

@section('content')
    <section class="header1 cid-st2eElkdSs" id="header01-0">

        <div class="container">
            <br/><br/>
            <div class="card shadow mb-4" style="background-color:  #f6f5f3;">
                <div class="btn-group">
                    <a  class ="btn btn-secondary"  href="{{ route('create-client') }}">Ajouter client</a>
                    <a  class ="btn btn-primary" id="addEvaluateurBtn" data-toggle="modal" data-target="#addEvaluateurModal">Ajouter Collis</a>
                    
                </div>


                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold " style="color: black">Liste des Collis</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Noms et Prenom</th>
                                <th>Email</th>
                                <th>Ville</th>
                                <th>Heure_depart</th>
                                <th>status</th>

                                <th>Actions</th>

                            </tr>
                            </thead>


                            @foreach($deliverys as $delivery)

                            <tr>

                                <td>{{$delivery->id}}</td>
                                <td>{{$delivery->user_delivery->nom}}</td>
                                <td>{{$delivery->user_delivery->email}}</td>
                                <td>{{$delivery->ville}}</td>
                                <td>{{$delivery->heure_depart}}</td>
                                <td>{{$delivery->status}}</td>

                                <td class="text-center">
                                    <div class="btn-group">

                                        <a href="{{route('get-delivery', ['id' => $delivery->id])}}" class ="btn btn-secondary" id="EditDeliveryBtn"><i class="fas fa-pencil-alt" ></i>modifier</a>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>





    </section>
    <!-- modal ajouter delivery-->


    <div class="container modal fade" id="addEvaluateurModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                    <div class="modal-header">
                        <div class="row align-content-center">
                            <h4 class="text-center" style="">Créer une commande</h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('save-delivery')}}">
                            @csrf
                            <div class="col-lg-12" >
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label" for="region">Code client</label>
                                            <select name="codeClient" class="custom-select" >
                                                <option selected>Choisir le code...</option>
                                                @foreach($clients as $client)
                                                <option value="{{ $client->id}}">{{ $client->code}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="date">status :</label>
                                            <select name="status" class="custom-select" id="status" required>
                                                <option value="Shipped">Shipped</option>
                                                <option value="Delivered">Delivered</option>
                                                <option value="Canceled">Canceled</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label" for="departement">Starting city :</label>
                                            <input name="ville" type="text" class="form-control" placeholder="Starting city :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label" for="CCE">Arrival city :</label>
                                            <input name="destination" type="text" class="form-control" placeholder="Arrival city :" required>
                                        </div>
                                    </div><!--end col-->
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="date">Start time :</label>
                                            <input class="form-control"  name="heure_depart" required placeholder="MM/DD/YYY" type="date"/>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="date">Arrival time :</label>
                                            <input class="form-control"  name="heure_arrive" required placeholder="MM/DD/YYY" type="date"/>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-4">
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="date">Localisation :</label>
                                            <input class="form-control"  name="localisation" required placeholder="localisation" type="text"/>
                                        </div>
                                    </div>

                                </div><!--end col-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <button type="submit" id="button" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>
              </div>
          </div>
        </div>


    <!-- modal modifier delivery -->
    <div class="modal fade" id="EditDeliveryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Modification Informations collis</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('update-delivery')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">

                                            <input class="form-control" id="id" name="id"  type="hidden" />

                                            <label class="control-label" for="codeClient">Code client</label>
                                            <input class="form-control"  name="codeClient" type="text" id="codeClient" readonly/>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="date">status :</label>
                                            <select name="status" class="custom-select" id="status" required>

                                                <option value="Shipped">Shipped</option>
                                                <option value="Delivered">Delivered</option>
                                                <option value="Canceled">Canceled</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label" for="ville">Starting city :</label>
                                            <input name="ville" type="text" id="ville" class="form-control" placeholder="Starting city :" readonly>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label" for="destination">Arrival city :</label>
                                            <input name="destination" type="text" id="destination" class="form-control" placeholder="Arrival city :"  readonly>
                                        </div>
                                    </div><!--end col-->
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="heure_depart">Start time :</label>
                                            <input class="form-control"  name="heure_depart" id="heure_depart"  placeholder="MM/DD/YYY" type="date"/ readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="heure_arrive">Arrival time :</label>
                                            <input class="form-control"  name="heure_arrive" id="heure_arrive" required placeholder="MM/DD/YYY" type="date"/ readonly>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-4">
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="localisation">Localisation :</label>
                                            <input class="form-control" id="localisation" name="localisation" required placeholder="localisation" type="text"/ >
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" id="button" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>


    <div class="modal" id="deleteModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation de suppression</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Etes vous sur de  vouloir le supprimer?</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" id="confirmDeleteButton" href="">Oui supprimer</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>

@endsection
