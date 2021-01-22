@extends('layouts.app_inner_page')

@section('content')
<!-- section -->
<br><br><br><br><br>
<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax"
   style="display:none;background-image: url('{{ asset('assets/app/images/enterprisebg.PNG') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -68.85px;height: 500px;">
   <div class="container">
      <div class="row1">
      </div>
   </div>
</section>
<!--Some Feature -->
<section id="our-feature" class="single-feature padding">
   <div class="container ">
      <br>
      <br>
      <div class="row">
         <div class="col-sm-9" style="align-self: center;">
            <h2 class="padding content-padding">
               Welcome back, SunnySide Urban Manor
         </div>
         <div class="col-sm-3">
         <img src="{{ asset('assets/app/images/sunnyimg.jpeg') }}" alt="sunny" style="width: 50%;
            position: relative;"/>
         </div>
      </div>
      </h2>
      <br>
      <div class="row d-flex ">
         <div class="col-lg-2 offset-lg-1 col-md-5 col-sm-5" >
            <h4><span class="blue"><a href="#">JayChannel <br> Account</a></span></h4>
            <br>
            <h4><a href="{{ route('show_enterprise_dashboard') }}">Classes <br> Overview</a></h4>
            <br>
            <h4>JayPad <br> Subscriptions</h4>
            <br>
         </div>
         <div class="col-lg-9 col-md-7 col-sm-7 text-sm-left text-center " >
            <div class="heading-title col-md-12 mb-3">
               <!-- <hr> -->
               <h4> &nbsp; &nbsp; <img src="{{ asset('assets/app/images/arrow.PNG') }}" alt="" width="25px" height="25px">&nbsp; &nbsp; Enterprise
                  Account
               </h4>
               <!-- <hr> -->
               <br>
               <br>
               <form action="#">
                  <div class="row">
                     <div class="col-sm-2 col-6 text-left">
                        <label class="inline " for="name">Name </label>
                     </div>
                     <div class="col-sm-8 col-12">
                        <input type="text" class="form-control custom-file float-right" id=""
                           placeholder="SunnySide Urban Manor">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-sm-2 col-6 text-left ">
                        <label class="inline">Address </label>
                     </div>
                     <div class="col-sm-8">
                        <input type="text" class="form-control custom-file float-right" id=""
                           placeholder="SunnySide Urban Manor">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-sm-2 col-6 text-left">
                        <label class="inline">Tel </label>
                     </div>
                     <div class="col-sm-8">
                        <input type="text" class="form-control custom-file float-right" id="" placeholder="(415)888-9999">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-sm-2 col-6 text-left">
                        <label class="inline">Contact </label>
                     </div>
                     <div class="col-sm-8">
                        <input type="text" class="form-control custom-file float-right" id="" placeholder="Sue Harrison">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-sm-2 col-6 text-left">
                        <label class="inline">Email </label>
                     </div>
                     <div class="col-sm-8 col-12">
                        <input type="text" class="form-control custom-file float-right" id=""
                           placeholder="Sue@sunnysideurbanmanor.com">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-sm-2 col-6 text-left">
                        <label class="inline">Credit </label> &nbsp;&nbsp;
                     </div>
                     <div class="col-sm-2 col-12 text-left">
                        <input type="text" class="form-control custom-file float-right" id="" placeholder="2000">&nbsp;&nbsp;
                     </div>
                     <div class="col-sm-1"></div>
                     <div class="col-sm-7 text-left col-12">
                        <label class="inline">Approved Price/Credit &nbsp;&nbsp; $1.50 </label> &nbsp;&nbsp;
                     </div>
                  </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
            <label class="switch">
            <input type="checkbox" checked="checked">
            <span class="slider round"> </span>
            </label> &nbsp; Auto Refill &nbsp;&nbsp; Unused Credit &nbsp; 566
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-lg-12 text-left">
            <label class="inline">Enterprise Code </label> &nbsp;&nbsp;
            <input type="text" class="form-control custom inline" id="" placeholder="1488">&nbsp;&nbsp;
            </div>
            </div>
            <br>
            <div class="row d-flex">
            <div class="col-lg-2 col-5 text-left mb-1">
            <span><img src="{{ asset('assets/app/images/Visaimg.jpg') }}" class="cardimgs" style="width: 50px;height: 39px;
               padding: 6px;">
            <img src="{{ asset('assets/app/images/mastercard_logo.0.png') }}" class="cardimgs" style="width: 50px;"><br>
            <img src="{{ asset('assets/app/images/americancard.jpg') }}" class="cardimgs" style="width: 50px;height: 39px;">
            <img src="{{ asset('assets/app/images/paypal2.png') }}" class="cardimgs" style="width: 50px;height: 39px;">
            </span>
            </div>
            <div class="col-lg-8 col-12">
            <input type="text" class="form-control custom-file mb-2" id="" placeholder="4155 3341 2298 9900">
            <div class="row">
            <div class="col-lg-1 col-1">
            <label for="" class="inline">Exp</label> &nbsp;
            </div>
            <div class="col-lg-3 col-3">
            <select class="form-control select inline" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            </select>
            </div>
            <div class="col-lg-3 col-3">
            <select class="form-control select inline " id="sel1">
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            </select>&nbsp;
            </div>
            <div class="col-lg-2 col-2">
            <label class="inline">CCV </label> 
            </div>
            <div class="col-lg-3 col-3">
            <input type="text" class="form-control custom-file inline" id="" placeholder="123">
            </div>
            </div>
            </div>
            </div>
            <br>
            <Div class="row d-flex">
            <div class="col-lg-12 col-12 text-left">
            <label class="switch">
            <input type="checkbox" checked="checked">
            <span class="slider round"> </span>
            </label> &nbsp; Offline Invoice
            </div>
            </Div>
            <br>
            <div class="row d-flex">
            <div class="col-lg-3 col-6 text-left">
            <span class="inline">Upload your logo</span>
            </div>
            <div class="col-lg-7 col-12" >
            <div class="custom-file inline float-right mb-3">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            </div>
            </div>
            <br>
            <div class="row d-flex">
            <div class="col-lg-3 col-6">
            <label class="inline"> No. of JayPad Users </label>
            </div>
            <div class="col-lg-2 col-6" >
            <input type="text" class="form-control custom-file inline" id="" placeholder="125">
            </div>
            </div>
            <br>
            <div class="row d-flex">
            <div class="col-lg-3 col-6">
            <label class="inline">No. of JayMobile Users</label>
            </div>
            <div class="col-lg-2 col-6" >
            <input type="text" class="form-control custom-file inline" id="" placeholder="125">&nbsp;&nbsp;
            </div>
            </div>
            <br>
            <label class="containercheckmark">
            <input type="checkbox" class="form-control">
            <span class="checkmark"></span>
            <span>I have a FlightDeck account</span>
            </label>
            <br>
            <div class="row">
            <div class="col-sm-2 col-6">
            <label class="inline" style="white-space: nowrap;">FlightDeck Login
            </label>
            </div>
            <div class="col-sm-10 col-12">
            <input type="text" class="form-control custom-file float-right" id=""
               placeholder="Sue@sunnysideurbanmanor.com">
            </div>
            </div>
            <br>
            <br>
            <br>
            </form>
            <button class="submit">Save</button>
         </div>
      </div>
   </div>
   </div>
   <!--  -->
   <div class="container padding_top " style="display: none;">
      <div class="row d-flex ">
         <div class="col-lg-2 offset-lg-1 col-md-5 col-sm-5" >
            <h4>Enterprise <br> Account</h4>
            <br>
            <h4 class="blue"> Classes <br> Overview</h4>
            <br>
         </div>
         <div class="col-lg-9 col-md-7 col-sm-7 text-sm-left text-center " >
            <div class="heading-title col-md-8 mb-3">
               <hr>
               <h4> &nbsp; &nbsp; <img src="{{ asset('assets/app/images/arrow.PNG') }}" alt="" width="25px" height="25px">&nbsp; &nbsp; Classes
                  Overview
               </h4>
               <hr>
               <p><span class="blue">Enrolled Classes </span>&nbsp;&nbsp;&nbsp; Wish List</p>
               <br>
               <h2 class="text-center">You've 566 credits</h2>
               <br>
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">Class No.</th>
                        <th scope="col">Class Name</th>
                        <th scope="col">Sign-Ups</th>
                        <th scope="col">Credit Used</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="blue">0348876</td>
                        <td class="blue">Disability Thrives</td>
                        <td class="blue">15</td>
                        <td class="blue">250</td>
                     </tr>
                     <tr>
                        <td>0348661</td>
                        <td>Gardening Homes</td>
                        <td>12</td>
                        <td>80</td>
                     </tr>
                     <tr>
                        <td>0348110</td>
                        <td>Travelling in Time</td>
                        <td>10</td>
                        <td>150</td>
                     </tr>
                     <tr>
                        <td>0348668</td>
                        <td>Happy Hour with Dee</td>
                        <td>8</td>
                        <td>141</td>
                     </tr>
                     <tr>
                        <td>0348222</td>
                        <td>One World One Love</td>
                        <td>13</td>
                        <td>132</td>
                     </tr>
                     <tr>
                        <td>0348441</td>
                        <td>Tea Master in Ceremony</td>
                        <td>11</td>
                        <td>112</td>
                     </tr>
                     <tr>
                        <td>0348752</td>
                        <td>Zumba for Begineers</td>
                        <td>12</td>
                        <td>90</td>
                     </tr>
                     <tr>
                        <td>0348757</td>
                        <td>Mexcio Travel Fun</td>
                        <td>12</td>
                        <td>45</td>
                     </tr>
                     <tr>
                        <td>0348300</td>
                        <td>Music With A Chair</td>
                        <td>10</td>
                        <td>66</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
<br>
<br>
<br>
<br>
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