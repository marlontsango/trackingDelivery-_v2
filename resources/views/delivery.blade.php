@extends('layouts.apps')
@section('title')
<title>Informations</title>
@endsection

@section('content')
    <section class="header1 cid-st2eElkdSs" id="header01-0">
        <div class="container">
            <div class="col-lg-12 col-md-6">
    
                <div class="row">
    
                    <div class="col-lg-8 col-md-12 mb-4 pb-2">
                        <div class="blog-post formulaire1 rounded border">
                            <div class="custom-form">
                                <div id="message"></div>
                                <div class="row">
                            
                                    <div class="col-lg-6 mb-4 pb-2" >
                                        <div class="form-group">
                                            <label>client Name :</label>
                                            <input name="titre" class="form-control" value="{{$delivery->nom}}" readonly>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6 mb-4 pb-2" >
                                        <div class="form-group">
                                            <label>Client Surname  :</label>
                                            <input name="envergure" class="form-control" value="{{$delivery->prenom}}" readonly>
                                        </div>
                                    </div><!--end col-->
    
                                    <div class="col-lg-6 mb-4 pb-2">
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="telephone">Telephone :</label>
                                            <input class="form-control" id="telephone" value="{{$delivery->telephone}}" name="telephone" readonly/>
                                        </div>
                                    </div><!--end col-->
    
                                    <div class="col-lg-6 mb-4 pb-2">
                                        <div class="form-group">
                                            <label class="control-label" for="region">Email :</label>
                                            <input   value="{{$delivery->email}}" class="form-control"  readonly>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6 mb-4 pb-2">
                                        <div class="form-group">
                                            <label class="control-label" for="departement">Starting city :</label>
                                            <input   value="{{$delivery->ville}}" class="form-control"  readonly>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6 mb-4 pb-2">
                                        <div class="form-group">
                                            <label class="control-label" for="localite">Start time</label>
                                            <input   value="{{$delivery->heure_depart}}" class="form-control"  readonly>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6 mb-4 pb-2">
                                        <div class="form-group">
                                            <label class="control-label" for="CCE">Arrival city :</label>
                                            <input name="arrival" type="text" value="{{$delivery->destination}}" class="form-control" placeholder="Numéro CCE :" readonly>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="form-row">
                                                <label class="control-label" for="CCE">Arrival time</label>
                                                <input type="text" name="endTime" class="form-control" value="Latitude :{{$delivery->heure_arrive}}" placeholder="latitude" readonly style="margin-bottom: 15px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end form-->
                            </div><!--end custom-form--><!--end col-->
                        </div><!--end row-->
                    </div>
               
                </div>
    
    
            </div>
        </div><!--end container-->
    
    
    </section>


    <section class="map1 cid-st2KZwV6ZE" id="map01-c">  
        <div>
            
            <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q=350%205th%20Ave,%20New%20York,%20NY%2010118" allowfullscreen=""></iframe></div>
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