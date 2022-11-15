@extends('layouts.apps')
@section('title')
    <title>Informations</title>
@endsection

@section('content')

<section class="header1 cid-st2eElkdSs" id="header01-0">
    
    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(255, 255, 255);"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 align-center">
            
                <h1 class="mbr-section-title mbr-white mbr-fonts-style mb-4 display-1"><strong>Avez vous des projets de transport?</strong></h1>
        
            </div>
        </div>
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
                        <h4 class="mbr-section-subtitle mb-2 mbr-fonts-style display-7"><strong>Contactez-nous</strong></h4>
                        <h3 class="mbr-section-title mb-5 mbr-fonts-style display-2">
                            <strong>le delais de reponse est de 24 heures</strong>
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
                                    <input type="text" name="name" placeholder="Votre Nom" data-form-field="name" class="form-control display-7" value="" id="name-form01-b">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="email">
                                    <input type="email" name="email" placeholder="Votre addresse Email" data-form-field="email" class="form-control display-7" value="" id="email-form01-b">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12  form-group form-primary">
                                    <input type="text" name="email" class="form-control text-left" placeholder="commentaire..." required="">

                                </div>
                                <div class="col-auto"><button type="submit" class="btn btn-lg btn-secondary display-7">Envoyer</button>
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
