@extends('layouts.app')

@section('content')
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!--PreLoader Ends-->
<!-- header -->
<header class="site-header" id="header">
    <nav   class="navbar navbar-expand-lg transparent-bg bg-transparent darkcolor static-nav mt-sm-4 mt-2">
        <div class="container bg-white position-relative">
            <a  class="navbar-brand pl-2" href="{{ route('home') }}">
                <img src="{{ asset('assets/app/images/logo.PNG') }}" alt="logo" class="logo-default">
                <img src="{{ asset('assets/app/images/logo.PNG') }}" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ways we care</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">How it works</a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link  " href="#"> JayPad  </a>
                    </li>
                    <li class="nav-item ">
                        <a onclick="signin()" class="nav-link dropbtn">Sign in</a>
                        <div id="loginDropdown" class="dropdown-content">
                            <a href="{{ route('member_login') }}">I'm a Member</a>
                            <a href="{{ route('enterprise_login') }}">I'm an Enterprise</a>
                            <a href="{{ route('signinvendor_login') }}">I'm a Vendor</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!--side menu open button-->
            <a href="javascript:void(0)" class="d-inline-block d-lg-none sidemenu_btn mr-0" id="sidemenu_toggle">
                <span class="bg-dark"></span> <span class="bg-dark"></span> <span class="bg-dark"></span>
            </a>
        </div>
    </nav>

    <!-- side menu -->
    <div class="side-menu opacity-0 gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header -->
<!-- section -->
<br><br><br><br><br>
<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax" style="background-image: url('{{ asset('assets/app/images/vendorbg.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;  height: 500px;">
    <div class="container">
        <div class="row1">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding">
                    <div class="containerlogin">
                        <div class="d-flex justify-content-center h-100">
                            <div class="card">
                                <div class="card-body">
                                    <h3>I'm a Vendor</h3>
                                    <br>
                                    <form method="POST" action="{{ route('verify_login') }}">
                                        @csrf
                                        <div class="input-group form-group">
                                           Username &nbsp;&nbsp;
                                            <input type="email" placeholder="{{ __('E-Mail Address') }}" name="email" class="form-control inputtop" required />
                                        </div>
                                        <div class="input-group form-group ">
                                           Password &nbsp;&nbsp;
                                            <input type="password" placeholder="{{ __('Password') }}" name="password" required class="form-control inputtop" />
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Enter" class="btn float-right login_btn">
                                        </div>
                                    </form>
                                    <a href="{{ route('show_user_register_form') }}" target="blank">Signup Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<!--copyright-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center wow fadeIn animated" data-wow-delay="300ms">
                <p class="m-0 py-3"> © 2020  <a href="javascript:void(0)" class="hover-default">JayChannel powered by HealthJay Inc</a>. </p>
            </div>
            <div class="col-md-6 text-center wow fadeIn animated" data-wow-delay="300ms">
                <p class="m-0 py-3"> <a href="javascript:void(0)" class="hover-default">Privacy Policy</a> &nbsp; | &nbsp;
                    <a href="javascript:void(0)" class="hover-default"> Terms</a>&nbsp; | &nbsp;
                    <a href="javascript:void(0)" class="hover-default"> Accessibility</a>&nbsp; | &nbsp;
                    <a href="javascript:void(0)" class="hover-default">  Cookie Policy</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
@endsection


@section('scripts')
<!-- <script src="{{ asset('assets/app/js/custom.js') }}"></script> -->
<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */

    function signin() {
      document.getElementById("loginDropdown").classList.toggle("show");
    }
    
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
   
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
</script>
@endsection