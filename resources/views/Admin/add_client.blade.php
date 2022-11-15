@extends('layouts.apps')
@section('title')
<title>Add_client</title>
@endsection

@section('content')
    <section class="header1 cid-st2eElkdSs" id="header01-0">

        <div class="container">
            <br/><br/>
            <div class="card shadow mb-4" style="background-color:  #f6f5f3;">
                <div class="btn-group">
                    <a  class ="btn btn-primary" id="addEvaluateurBtn" data-toggle="modal" data-target="#addEvaluateurModal">Ajouter client</a>
                    <a class ="btn btn-secondary"  href="{{ route('create-delivery') }}">Ajouter Collis</a>
                </div>

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold " style="color: black">Liste des Clients</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            </thead>


                            @foreach($clients as $client)

                            <tr>

                                <td>{{$client->code}}</td>
                                <td>{{$client->nom}}</td>
                                <td>{{$client->prenom}}</td>
                                <td>{{$client->telephone}}</td>
                                <td>{{$client->email}}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{route('get-client', ['id' => $client->id])}}" class ="btn btn-secondary" id="EditDeliveryBtn"><i class="fas fa-pencil-alt" ></i>modifier</a>
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
        {{-- <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="form34" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form34">Your name</label>
                    </div>

                    <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" id="form29" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form29">Your email</label>
                    </div>

                    <div class="md-form mb-5">
                    <i class="fas fa-tag prefix grey-text"></i>
                    <input type="text" id="form32" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form32">Subject</label>
                    </div>

                    <div class="md-form">
                    <i class="fas fa-pencil prefix grey-text"></i>
                    <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                    <label data-error="wrong" data-success="right" for="form8">Your message</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>
        </div>

        <div class="text-center">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Launch
            Modal Contact Form</a>
        </div> --}}

    </section>
    <!-- modal ajouter client-->


    <div class="container modal fade" id="addEvaluateurModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            
          <div class="modal-content">
            <form method="post" action="{{route('save-client')}}">
                @csrf
                <div class="modal-header">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Ajouter un client</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="form34">surname</label>
                    <input name="prenom" class="form-control validate" placeholder="Client Surname " required>
                    </div>

                    <div class="md-form mb-2">
                        <label data-error="wrong" data-success="right" for="form29">Code Client</label>
                        <input name="id" class="form-control validate" placeholder="code " required>
                    </div>

                    <div class="md-form mb-2">
                        <label data-error="wrong" data-success="right" for="form32">name</label>
                        <input name="nom" class="form-control validate" placeholder="name " required>
                    </div>

                    <div class="md-form mb-2">
                    <label data-error="wrong" data-success="right" for="form8"> email</label>
                    <input name="email" type="text" class="form-control validate" placeholder="email">
                    </div>
                    <div class="md-form mb-2">
                        <label data-error="wrong" data-success="right" for="form8">telephone</label>
                        <input name="telephone" class="form-control validate" placeholder="Telephone :" required>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">save</button>
                </div>

            </form>
            
                  
                    {{-- <div class="modal-body">
                        <form method="post" action="{{route('save-client')}}">
                            @csrf
                            <div class="row">
                            <div class="col-lg-12" >
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Code Client  :</label>
                                            <input name="id" class="form-control" placeholder="code " required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Client Surname  :</label>
                                            <input name="prenom" class="form-control" placeholder="Client Surname " required>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Client Name  :</label>

                                            <input name="nom" class="form-control" placeholder="name " required>
                                        </div>
                                    </div><!--end col-->
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label" for="departement">Email :</label>
                                            <input name="email" type="text" class="form-control" placeholder="email">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Telephone  :</label>
                                            <input name="telephone" class="form-control" placeholder="Telephone :" required>
                                        </div>
                                    </div><!--end col-->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <button type="submit" id="button" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div> --}}
              </div>
          </div>
        </div>
    </div>

    <!-- modal modifier delivery -->
    <div class="modal fade" id="EditDeliveryBtn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Modification Informations clients</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <form method="post" action="{{route('update-client')}}">
                            @csrf

                            <div class="row">
                                <div class="col-lg-12" >
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Code Client  :</label>
                                                <input name="id" class="form-control" placeholder="code " required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Client Surname  :</label>
                                                <input name="prenom" class="form-control" placeholder="Client Surname " required>
                                            </div>
                                        </div><!--end col-->
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label" for="departement">Email :</label>
                                                <input name="email" type="text" class="form-control" placeholder="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Client Name  :</label>

                                                <input name="nom" class="form-control" placeholder="name " required>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Telephone  :</label>
                                                <input name="telephone" class="form-control" placeholder="Telephone :" required>
                                            </div>
                                        </div><!--end col-->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                        <button type="submit" id="button" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
