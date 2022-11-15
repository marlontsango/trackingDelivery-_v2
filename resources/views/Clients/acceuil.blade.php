@extends('layouts.apps')

@section('title')
<title>Home</title>
@endsection

@section('content')

<section class="header1 cid-st2eElkdSs1" id="header01-0">

    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(255, 255, 255);"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 align-left">
                <h2 class="mbr-section-subtitle mbr-white mbr-fonts-style mb-3 display-7">
                    <strong>Suivi des colis en toute simplicité, il suffit d'un numéro de suivi!</strong>
                </h2>
                    <form method="POST" action="{{route('getDeliveryList')}}" class="mbr-form form-with-styler" data-form-title="Form Name">
                        @csrf
                        <div class=" form-row">
                            <div class=" form-group" data-for="name">
                                <input type="text" name="code" placeholder="Tracking number...." data-form-field="name" class="form-control display-7" value="" id="name-form01-b">
                            </div>
                            <div class="mbr-section-btn">
                                <button type="submit" id="button" class="btn btn-lg btn-primary display-4">Suivre</button>
                            </div>
                        </div>

                    </form>
            </div>
        </div>
    </div>
</section>

@endsection
