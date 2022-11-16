<!DOCTYPE html>
<html>

<!-- Mirrored from mobirise.com/extensions/softwarem4/mobile-app/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 10:42:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Site made with Mobirise Website Builder v5.3.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.3.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="New SoftwareM4 HTML Template - Download Now!">


  <title>SoftwareM4 Theme Mobile App Demo</title>
  <link rel="stylesheet" href="{{asset('files/web/assets/mobirise-icons2/mobirise2.css')}}">
  <link rel="stylesheet" href="{{asset('files/tether/tether.min.css')}}">
  <link rel="stylesheet" href="{{asset('files/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('files/bootstrap/css/bootstrap-grid.min.css')}}">
  <link rel="stylesheet" href="{{asset('files/bootstrap/css/bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{asset('files/dropdown/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('files/formstyler/jquery.formstyler.css')}}">
  <link rel="stylesheet" href="{{asset('files/formstyler/jquery.formstyler.theme.css')}}">
  <link rel="stylesheet" href="{{asset('files/datepicker/jquery.datetimepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('files/socicon/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('files/theme/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('files/recaptcha.css')}}">
  <link rel="preload" href="../../../../fonts.googleapis.com/css5f45.css?family=DM+Sans:400,400i,500,500i,700,700i&amp;display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="../../../../fonts.googleapis.com/css5f45.css?family=DM+Sans:400,400i,500,500i,700,700i&amp;display=swap"></noscript>
  <link rel="preload" as="style" href="{{asset('files/mobirise/css/mbr-additional.css')}}"><link rel="stylesheet" href="{{asset('files/mobirise/css/mbr-additional.css')}}" type="text/css">




</head>
<body>
// header start

@include('layouts.header')


// header end

<section class="section">
@yield('content')

</section>


@include('layouts.footer')


// footer end



<script src="{{asset('files/web/assets/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('files/popper/popper.min.js')}}"></script>
  <script src="{{asset('files/tether/tether.min.js')}}"></script>
  <script src="{{asset('files/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('files/smoothscroll/smooth-scroll.js')}}"></script>
  <script src="{{asset('files/dropdown/js/nav-dropdown.js')}}"></script>
  <script src="{{asset('files/dropdown/js/navbar-dropdown.js')}}"></script>
  <script src="{{asset('files/touchswipe/jquery.touch-swipe.min.js')}}"></script>
  <script src="{{asset('files/mbr-switch-arrow/mbr-switch-arrow.js')}}"></script>
  <script src="{{asset('files/formstyler/jquery.formstyler.js')}}"></script>
  <script src="{{asset('files/formstyler/jquery.formstyler.min.js')}}"></script>
  <script src="{{asset('files/datepicker/jquery.datetimepicker.full.js')}}"></script>
  <script src="{{asset('files/theme/js/script.js')}}"></script>
  <script src="{{asset('files/formoid.min.js')}}"></script>

<script type="text/javascript" charset="UTF-8" >
    $(document).ready(function() {
        $('table #EditDeliveryBtn').on('click',function(event){
            event.preventDefault();
            var href = $(this).attr('href');
            $.get(href, function(delivery, status){
                $('#id').val(delivery.id);
                $('#status').val(delivery.status);
                $('#ville').val(delivery.ville);
                $('#destination').val(delivery.destination);
                $('#codeClient').val(delivery.user_delivery.code);

                $('#heure_depart').val(delivery.heure_depart);
                $('#heure_arrive').val(delivery.heure_arrive);
                $('#localisation').val(delivery.localisation);



            });
            $('#EditDeliveryModal').modal();
        });
        $('table #EditClientBtn').on('click',function(event){
            event.preventDefault();
            var href = $(this).attr('href');
            $.get(href, function(delivery, status){
                $('#id').val(delivery.id);
                $('#prenom').val(delivery.prenom);
                $('#code').val(delivery.code);
                $('#nom').val(delivery.nom);
                $('#email').val(delivery.email);
                $('#telephone').val(delivery.telephone);

            });
            $('#EditClientModal').modal();
        });
    });

</script>

</body>



<!-- Mirrored from mobirise.com/extensions/softwarem4/mobile-app/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 10:43:39 GMT -->
</html>
