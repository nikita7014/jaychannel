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
<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax" style="background-image: url('{{ asset('assets/app/images/vendorbg.png') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -68.85px; height: 500px;">
    <div class="container">
        <div class="row1">
        </div>
    </div>
</section>
<!--Some Feature -->
<section id="our-feature" class="single-feature padding">
    <div class="container ">
        <h2 class="padding content-padding">Welcome back, EasterSeals!</h2>
        <br>
        <div class="row d-flex ">
            <div class="col-lg-2 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
               <h4>Account</h4> <br>
               <h4><span class="blue">Manage <br> Classes</span></h4> <br>
               <h4>leads</h4> <br>
               <h4>Finance</h4> <br>
            </div>
            <div class="col-lg-9 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title col-md-8 mb-3">
                    <hr>
                    <h4> &nbsp; &nbsp; <img  src="{{ asset('assets/app/images/arrow.PNG') }}" alt="" width="25px" height="25px">&nbsp; &nbsp; Manage Classes</h4>
                    <hr>
                    <p>New Class &nbsp;&nbsp;&nbsp; <span class="blue">Edit Classes</span></p>
                    <br>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Class No.</th>
                            <th scope="col">Class Name</th>
                            <th scope="col">Sign-Ups</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr >
                            <td class="blue">0348876</td>
                            <td class="blue">Disability Thrives</td>
                            <td class="blue">15</td>
                          </tr>
                          <tr>
                            <td>0348661</td>
                            <td>Gardening Homes</td>
                            <td>12</td>
                          </tr>
                          <tr>
                            <td>0348110</td>
                            <td>Travelling in Time</td>
                            <td>10</td>
                          </tr>
                          <tr>
                            <td>0348668</td>
                            <td>Happy Hour with Dee</td>
                            <td>8</td>
                          </tr>
                          <tr>
                            <td>0348222</td>
                            <td>One World One Love</td>
                            <td>13</td>
                          </tr>
                          <tr>
                            <td>0348441</td>
                            <td>Tea Master in Ceremony</td>
                            <td>11</td>
                          </tr>
                          <tr>
                            <td>0348752</td>
                            <td>Zumba for Begineers</td>
                            <td>12</td>
                          </tr>
                          <tr>
                            <td>0348757</td>
                            <td>Mexcio Travel Fun</td>
                            <td>12</td>
                          </tr>
                          <tr>
                            <td>0348300</td>
                            <td>Music With A Chair</td>
                            <td>10</td>
                          </tr>                      
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="container padding_top ">
        <div class="row d-flex ">
            <div class="col-lg-2 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
               <h4>Account</h4> <br>
               <h4>Manage <br> Classes</h4> <br>
               <h4><span class="blue">Finance</span></h4> <br>
            </div>
            <div class="col-lg-9 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title col-md-8 mb-3">
                    <hr>
                    <h4> &nbsp; &nbsp; <img  src="{{ asset('assets/app/images/arrow.PNG') }}" alt="" width="25px" height="25px">&nbsp; &nbsp; Finance</h4>
                    <hr>                 
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Issue No.</th>
                            <th scope="col">Month</th>
                            <th scope="col">Income</th>
                            <th scope="col">Deposit</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr >
                            <td class="blue">0348876</td>
                            <td class="blue">Nov 2020 </td>
                            <td class="blue">5,400</td>
                            <td class="blue">Pending</td>
                          </tr>
                          <tr>
                            <td>0348661</td>
                            <td> Oct 2020</td>
                            <td>6,880</td>
                            <td>Done</td>
                          </tr>
                          <tr>
                            <td>0348110</td>
                            <td> Sep 2020</td>
                            <td>8,990</td>
                            <td>Done</td>
                          </tr>
                          <tr>
                            <td>0348668</td>
                            <td>Aug 2020</td>
                            <td>10,765</td>
                            <td>Done</td>
                          </tr>
                          <tr>
                            <td>0348222</td>
                            <td>July 2020</td>
                            <td>6,995</td>
                            <td>Done</td>
                          </tr>
                          <tr>
                            <td>0348441</td>
                            <td>June 2020</td>
                            <td>8,890</td>
                            <td>Done</td>
                          </tr>
                          <tr>
                            <td>0348752</td>
                            <td>May 2020</td>
                            <td>12,770</td>
                            <td>Done</td>
                          </tr>
                          <tr>
                            <td>0348757</td>
                            <td>Apr</td>
                            <td>15,005</td>
                            <td>Done</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container padding_top text-center">
        <h3>Hey EasterSeals Southern California,
            <br>
                You've successfully added a new class!</h3>
                <br><br>
                <h3>The Class No. is: <br> 0348876</h3>
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
    window.onclick = function (event) {
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