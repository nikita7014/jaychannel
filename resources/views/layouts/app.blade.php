<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    @yield('refres')
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <title>{{ config('app.name', 'Jaychannel') }}</title>
         
        <!-- <link href="favicon.html" rel="icon"> -->
        <link rel="stylesheet" href="{{ asset('assets/app/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/app/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/app/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/app/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/app/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/app/css/tooltipster.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/app/css/cubeportfolio.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/app/css/navigation.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/app/css/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/app/css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.collapsible {
  background-color: #fff;
  color: #000;
  cursor: pointer;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
}

.active1, .collapsible:hover {
  background-color: #fff;
}

.collapsible:after {
  content: "\2295";
  color: #878789;
  font-weight: normal;
  float: right;
  margin: -10px  !important;
  font-size: 45px;
}

.active1:after {
  content: "\2212";
}

.content {
  padding: 0px 18px !important;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

#panel {
  display: none;
}

#activeDay{
    display: none;
}

#subs{
    display: none;
}

.dropbtnn {
  color: black;
  padding: 16px;
  font-size: 16px;
  cursor: pointer;
}

#Input {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#Input:focus {outline: 3px solid #ddd;}

.searchdown {
  position: relative;
  display: inline-block;
}

.dropdown-search {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-search a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.searchdown a:hover {background-color: #ddd;}
.showw {display: block;}
.fadein { position:relative;  height:332px; }
.fadein img { position:absolute; left:0; top:0; }
</style>

        {{--Head--}}
        @yield('head')

        {{--Styles--}}
        @yield('styles')
    </head>
    <body class="@yield('body_class')">

        {{--Page--}}
        @yield('content')

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('assets/app/js/jquery-3.4.1.min.js') }}"></script>

        <!--Bootstrap Core-->
        <script src="{{ asset('assets/app/js/propper.min.js') }}"></script>
        <script src="{{ asset('assets/app/js/bootstrap.min.js') }}"></script>

        <!--to view items on reach-->
        <script src="{{ asset('assets/app/js/jquery.appear.js') }}"></script>

        <!--Owl Slider-->
        <script src="{{ asset('assets/app/js/owl.carousel.min.js') }}"></script>

        <!--number counters-->
        <script src="{{ asset('assets/app/js/jquery-countTo.js') }}"></script>

        <!--Parallax Background-->
        <script src="{{ asset('assets/app/js/parallaxie.js') }}"></script>

        <!--Cubefolio Gallery-->
        <script src="{{ asset('assets/app/js/jquery.cubeportfolio.min.js') }}"></script>

        <!--Fancybox js-->
        <script src="{{ asset('assets/app/js/jquery.fancybox.min.js') }}"></script>

        <!--tooltip js-->
        <script src="{{ asset('assets/app/js/tooltipster.min.js') }}"></script>

        <!--wow js-->
        <script src="{{ asset('assets/app/js/wow.js') }}"></script>

        <!--Revolution SLider-->
        <script src="{{ asset('assets/app/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('assets/app/js/jquery.themepunch.revolution.min.js') }}"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
        <script src="{{ asset('assets/app/js/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('assets/app/js/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/app/js/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('assets/app/js/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('assets/app/js/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('assets/app/js/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('assets/app/js/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('assets/app/js/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('assets/app/js/revolution.extension.video.min.js') }}"></script>

        <!--custom functions and script-->
        <script src="{{ asset('assets/app/js/functions.js') }}"></script>
        <script src="{{ asset('assets/app/js/slide.js') }}"></script>

        {{--Scripts--}}
        @yield('scripts')
    </body>
</html>
