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
                                        <a href="{{route('get-client', ['id' => $client->id])}}" class ="btn btn-secondary" id="EditClientBtn"><i class="fas fa-pencil-alt" ></i>modifier</a>
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
                        <input name="code" class="form-control validate" placeholder="code " required>
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
                    <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Fermer</button>

                </div>

            </form>

          </div>
        </div>
    </div>

    <!-- modal modifier delivery -->
    <div class="container modal fade" id="EditClientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <form method="post" action="{{route('update-client')}}">
                    @csrf
                    <div class="modal-header">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Modifier un client</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body mx-3">
                        <input name="id" id="id" class="form-control validate" >

                        <div class="md-form mb-2">
                            <label data-error="wrong" data-success="right" for="form34">surname</label>
                            <input name="prenom" id="prenom" class="form-control validate" placeholder="Client Surname " required>
                        </div>

                        <div class="md-form mb-2">
                            <label data-error="wrong" data-success="right" for="form29">Code Client</label>
                            <input name="code" id="code"  class="form-control validate" placeholder="code " required>
                        </div>

                        <div class="md-form mb-2">
                            <label data-error="wrong" data-success="right" for="form32">name</label>
                            <input name="nom" id="nom" class="form-control validate" placeholder="name " required>
                        </div>

                        <div class="md-form mb-2">
                            <label data-error="wrong" data-success="right" for="form8"> email</label>
                            <input name="email" id="email" type="text" class="form-control validate" placeholder="email">
                        </div>
                        <div class="md-form mb-2">
                            <label data-error="wrong" data-success="right" for="form8">telephone</label>
                            <input name="telephone" id="telephone" class="form-control validate" placeholder="Telephone :" required>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">save</button>
                        <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Fermer</button>
                    </div>

                </form>

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
