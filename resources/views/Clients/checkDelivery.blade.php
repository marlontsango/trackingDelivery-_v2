@extends('layouts.apps')
@section('title')
    <title>Informations</title>
@endsection

@section('content')
    <section class="header1 cid-st2eElkdSs" id="header01-0">
        <div class="container">
            <div class="text-center">

                <div class="row ">

                    <div class=" col-md-12">
                        <div class="card bg-white" >
                            <div class="card-header bg-info">
                                Delivery Informations
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="table-dark">
                                    <tr>
                                        <th>Location</th>
                                        <th>Start time</th>
                                        <th>Arrival time</th>
                                        <th>Status</th>

                                    </tr>

                                    </thead>
                                    <tbody class="bg-white">
                                    @foreach($client->deliverys as $delivery)
                                        <tr>
                                            <td>{{$delivery->localisation}}</td>
                                            <td>{{$delivery->heure_depart}}</td>
                                            <td>{{$delivery->heure_arrive}}</td>
                                            <td>

                                            @if($delivery->status=='Delivered')
                                                    <span  class="badge badge-success">Delivered</span>
                                            @endif
                                            @if($delivery->status=='Pending')
                                                <span  class="badge badge-warning">Pending</span>
                                            @endif
                                            @if($delivery->status=='Canceled')
                                                <span  class="badge badge-danger">Canceled</span>
                                            @endif
                                            @if($delivery->status=='Shipped')
                                                <span  class="badge badge-primary">Shipped</span>
                                            @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card bg-white">
                            <div class="card-header bg-info">
                                Clients informations
                            </div>
                            <div class="card-body ">
                                <table class="table">
                                    <thead class="table-dark">
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Client Surname</th>
                                        <th>Phone number</th>
                                        <th>Email</th>
                                    </tr>

                                    </thead>
                                    <tbody >
                                    <tr>
                                        <td>{{$client->nom}}</td>
                                        <td>{{$client->prenom}}</td>
                                        <td>{{$client->telephone}}</td>
                                        <td>{{$client->email}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="blog-post formulaire1 rounded border">



                        </div><!--end row-->
                    </div>

                </div>


            </div>
        </div><!--end container-->


    </section>


    <section class="map1 cid-st2KZwV6ZE" id="map01-c">
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="border:0" allowfullscreen></iframe>
          </div>
    </section>

    <section class="form cid-st2KYI2kYn" id="form01-b">


        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 img-col">
                    <div class="img-item">
                        <img src="{{asset('files/images/background4.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 m-auto mbr-form">
                    <div class="content align-left" data-form-type="formoid">
                        <h4 class="mbr-section-subtitle mb-2 mbr-fonts-style display-7"><strong>Contact Us</strong></h4>
                        <h3 class="mbr-section-title mb-5 mbr-fonts-style display-2">
                            <strong>we generally respond in 24 hours</strong>
                        </h3>
                        <!--Formbuilder Form-->
                        <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="R7xHHbxqj8Wq4hengycoU2c46cYVdE1ra8jFDg/qaRkdQrHwObO925Opx0tFWyLBBtXfw1KnHrAXXp48qWgxEgQ7sAv/FNTF5hpKFg7nJSh9tkb5RzuR5BjP3fMCgpgQ.mvHO7vXJ0c+n2ww/PjaBAlf/+LlXByQm1pVgW09BEQGCif7S6LsIA0XWB0CVb4W1av7vHrewj2XGPORf3QvBHdzfQ9SrG1VSXD8k53khJG5NzatkKbeKInnh6EGIXYca">
                            <div class="form-row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling
                                    out the form!</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                                    problem!</div>
                            </div>
                            <div class="dragArea form-row align-right">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="name">
                                    <input type="text" name="name" placeholder="Enter full name" data-form-field="name" class="form-control display-7" value="" id="name-form01-b">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="email">
                                    <input type="email" name="email" placeholder="Enter email adress" data-form-field="email" class="form-control display-7" value="" id="email-form01-b">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12  form-group form-primary">
                                    <input type="text" name="email" class="form-control text-left" placeholder="Comment..." required="">

                                </div>
                                <div class="col-auto"><button type="submit" class="btn btn-lg btn-secondary display-7">Send Now</button>
                                </div>
                            </div>
                        </form>
                        <!--Formbuilder Form-->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
