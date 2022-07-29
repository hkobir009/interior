<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home Page</title>
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
         />
         <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
         <link rel="stylesheet" href="{{asset('css/style.css')}}">
         <link rel="stylesheet" href="{{asset('dist/owl.carousel.min.css')}}">
         <link rel="stylesheet" href="{{asset('dist/owl.theme.default.min.css')}}">
         <link rel="stylesheet" href="{{asset('css/aos.css')}}" />
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
         <link rel="stylesheet" href="{{asset('css/lightcase.min.css')}}">
         <link rel="stylesheet" href="{{ asset('progressbar/css/jquery.rprogessbar.css') }}">

   </head>
   <body data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">

    @include('frontend.partials.header')
    
    @yield('content')
    
    @include('frontend.partials.footer')
    
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

<script src="{{asset('js/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('js/lightcase.js')}}"></script>
<script src="{{asset('js/jquery.events.touch.js')}}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lightcase/2.5.0/js/lightcase.min.js"></script> -->
<script src="{{asset('js/typed.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('counterup/waypoints.min.js')}}"></script>
  <script src="{{asset('counterup/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('parallax/parallax.min.js')}}"></script>
   <script src="{{asset('progressbar/js/jQuery.rProgressbar.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@yield('script')
<script>
    AOS.init();
</script>
</body>
</html>