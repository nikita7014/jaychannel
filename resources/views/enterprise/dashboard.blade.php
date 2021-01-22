@extends('layouts.app_inner_page')

@section('content')
<!-- section -->
<br><br><br><br><br>
<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax" style="background-image: url('{{ asset('assets/app/images/vendorbg.png') }}'); background-size: cover; background-repeat: no-repeat; 
   background-attachment: fixed; background-position: center -68.85px; height: 500px;display: none;">
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
      <h2 class="padding content-padding">Welcome back, SunnySide Urban Manor</h2>
      <br>
      <div class="row d-flex ">
         <div class="col-lg-2 offset-lg-1 col-md-5 col-sm-5 " >
            <h4><a href="{{ route('show_enterprise_account') }}">JayChannel <br> Account</a></h4>
            <br>
            <h4><span class="blue"><a href="#">Classes <br> Overview</a></span></h4>
            <br>
            <!-- <h4>leads</h4> <br> -->
            <h4>Jaypad<br>Subscriptions</h4>
            <br>
         </div>
         <div class="col-lg-9 col-md-7 col-sm-7 text-sm-left text-center " >
            <div class="heading-title col-md-10 mb-3">
               <h4> &nbsp; &nbsp; <img src="{{ asset('assets/app/images/arrow.PNG') }}" alt="" width="25px" height="25px">&nbsp; &nbsp;
                  Classes Overview
               </h4>
               <br>
               <div class="row">
                  <div class="col-1"></div>
                  <div class="col-lg-8 col-12 text-center">
                     <p class="mb-4"> <span class="blue">Enrolled Classes </span>&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Wish
                        List
                     </p>
                     <h2 class="text-center">You've 566 credits</h2>
                     <br>
                  </div>
               </div>
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
                        <td class="blue text-center">15</td>
                        <td class="blue text-center">250 </td>
                        <!-- <td class="blue text-center">250</td> -->
                        <td >Cancel</td>
                     </tr>
                     <tr>
                        <td>0348661</td>
                        <td>Gardening Homes</td>
                        <td class="text-center">12</td>
                        <td class="text-center">80</td>
                        <td >Cancel</td>
                     </tr>
                     <tr>
                        <td>0348110</td>
                        <td>Travelling in Time</td>
                        <td class="text-center">10</td>
                        <td class="text-center">150</td>
                        <td >Cancel</td>
                     </tr>
                     <tr>
                        <td>0348668</td>
                        <td>Happy Hour with Dee</td>
                        <td class="text-center">8</td>
                        <td class="text-center">141</td>
                        <td >Cancel</td>
                     </tr>
                     <tr>
                        <td>0348222</td>
                        <td>One World One Love</td>
                        <td class="text-center">13</td>
                        <td class="text-center">132</td>
                        <td >Cancel</td>
                     </tr>
                     <tr>
                        <td>0348441</td>
                        <td>Tea Master in Ceremony</td>
                        <td class="text-center">11</td>
                        <td class="text-center">112</td>
                        <td >Cancel</td>
                     </tr>
                     <tr>
                        <td>0348752</td>
                        <td>Zumba for Begineers</td>
                        <td class="text-center">12</td>
                        <td class="text-center">90</td>
                        <td >Cancel</td>
                     </tr>
                     <tr>
                        <td>0348757</td>
                        <td>Mexcio Travel Fun</td>
                        <td class="text-center">12</td>
                        <td class="text-center">45</td>
                        <td >Cancel</td>
                     </tr>
                     <tr>
                        <td>0348300</td>
                        <td>Music With A Chair</td>
                        <td class="text-center">10</td>
                        <td class="text-center">66</td>
                        <td >Cancel</td>
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