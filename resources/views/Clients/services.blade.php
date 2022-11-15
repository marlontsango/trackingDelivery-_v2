@extends('layouts.apps')

@section('title')
<title>Services</title>
@endsection

@section('content')
<section class="header1" style="background-image: url('{{ asset('files/images/imageA.jpg')}}'); background-size: cover;  height: 500px;">
    
    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(255, 255, 255);"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 align-left">
                <h1 class="mbr-section-title mbr-white mbr-fonts-style mb-4 display-1"><strong>Besoin d'un Services?</strong></h1>

                <div class="mbr-section-btn"><a class="btn btn-lg btn-primary display-4" href="{{ route('contacts') }}">Contactez-nous</a></div>
            </div>
        </div>
    </div>
</section>
<section class="list2 cid-st2L3FzgcK" id="list02-e">
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-6 img-col">
                <div class="img-item">
                    <img src="{{asset('files/images/imageR.jpg')}}"alt="">
                    
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 m-auto">
                <div class="content">
                    <div class="mbr-section-head align-left mb-5">
                        <h4 class="mbr-section-subtitle mb-2 mbr-fonts-style display-7"><strong>Finexs Transport est une agence de dédouanement et d'expédition de fret enregistrée, agréée et accréditée par le service des douanes des États-Unis</strong></h4>
                        <h3 class="mbr-section-title mb-2 mbr-fonts-style display-2"><strong>Nos Services</strong></h3>
                    </div>
                    <div id="bootstrap-accordion_5" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-core="" href="#collapse1_5" aria-expanded="false" aria-controls="collapse1">
                                    <span class="sign mbr-iconfont mobi-mbri-plus"></span>
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-7">Transport Terrestre</h6>
                                </a>
                            </div>
                            <div id="collapse1_5" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_5">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Pellentesque nec purus ut massa hendrerit fringilla luctus
                                        mattis diam. Integer mollis sollicitudin tincidunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-core="" href="#collapse2_5" aria-expanded="false" aria-controls="collapse2"><span class="sign mbr-iconfont mobi-mbri-plus"></span>
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-7">Fret maritime</h6>
                                </a>
                            </div>
                            <div id="collapse2_5" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_5">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec purus
                                        ut massa hendrerit fringilla luctus mattis diam. Integer mollis sollicitudin
                                        tincidunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-core="" href="#collapse3_5" aria-expanded="false" aria-controls="collapse3"><span class="sign mbr-iconfont mobi-mbri-plus"></span>
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-7">Fret aérien&nbsp;</h6>
                                </a>
                            </div>
                            <div id="collapse3_5" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_5">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec purus
                                        ut massa hendrerit fringilla luctus mattis diam. Integer mollis sollicitudin
                                        tincidunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-core="" href="#collapse4_5" aria-expanded="false" aria-controls="collapse4"><span class="sign mbr-iconfont mobi-mbri-plus"></span>
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-7">Services de messagerie pour animaux de companie</h6>
                                </a>
                            </div>
                            <div id="collapse4_5" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_5">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec purus
                                        ut massa hendrerit fringilla luctus mattis diam. Integer mollis sollicitudin
                                        tincidunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-core="" href="#collapse4_6" aria-expanded="false" aria-controls="collapse4"><span class="sign mbr-iconfont mobi-mbri-plus"></span>
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-7">Emballage et livraison</h6>
                                </a>
                            </div>
                            <div id="collapse4_6" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_5">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec purus
                                        ut massa hendrerit fringilla luctus mattis diam. Integer mollis sollicitudin
                                        tincidunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-core="" href="#collapse4_7" aria-expanded="false" aria-controls="collapse4"><span class="sign mbr-iconfont mobi-mbri-plus"></span>
                                    <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-7">Entrepostage</h6>
                                </a>
                            </div>
                            <div id="collapse4_7" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_5">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec purus
                                        ut massa hendrerit fringilla luctus mattis diam. Integer mollis sollicitudin
                                        tincidunt.</p>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
