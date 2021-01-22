@extends('layouts.app_inner_page')

@section('content')
<br><br><br><br><br>
<br>
<!-- WOrk Process-->
<section id="our-process" class="padding ">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 ">
            <hr>
            <h4 class="inline"> &nbsp; <img src="{{ asset('assets/app/images/arrow.PNG') }}" alt="">&nbsp;&nbsp; Shop for Virtual
               Classes&nbsp;&nbsp; 
            </h4>
            <h4 class="inline lightcolor padd8">&nbsp;<img src="{{ asset('assets/app/images/explore.png') }}" alt=""> &nbsp;&nbsp; what
               kind of classes are you looking for?
            </h4>
            <hr>
         </div>
      </div>
   </div>
</section>
<!--WOrk Process ends-->
<!-- Services us -->
<section id="our-services" class="padding">
   <div class="container">
      <div id="services-filter" class="cbp-l-filters dark bottom30 wow fadeIn d-table mx-auto "
         data-wow-delay="350ms">
         <div data-filter="*" class="cbp-filter-item">
            <span>Group <br> Games</span>
         </div>
         <div data-filter=".arts" class="cbp-filter-item">
            <span class="blue">Arts & <br> Crafts</span>
         </div>
         <div data-filter=".jaquard-elastics-tapes" class="cbp-filter-item">
            <span>Food & <br> Diet</span>
         </div>
         <div data-filter=".lurex-elastics-tapes" class="cbp-filter-item">
            <span>Fitness & <br> Mindfullness</span>
         </div>
         <div data-filter=".cords-laces" class="cbp-filter-item">
            <span>Memory <br> Health</span>
         </div>
         <div data-filter=".rigid-tapes" class="cbp-filter-item">
            <span> Outdoor <br> &nbsp;</span>
         </div>
         <div data-filter=".woven-elastics-tapes" class="cbp-filter-item">
            <span>@Work <br> &nbsp;</span>
         </div>
         <div data-filter=".woven-elastics-tapes" class="cbp-filter-item">
            <span>Education & <br>Family</span>
         </div>
         <br>
         <div data-filter="*" class="cbp-filter-item">
            <span>Back</span>
         </div>
      </div>
      <div id="services-measonry" class="cbp">
         <div class="row">
         </div>
      </div>
   </div>
</section>
<section id="our-feature" class="single-feature padding">
   <div class="container">
      <div class="row d-flex ">
         <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 ">
            <div class="image"><img alt="SEO" src="{{ asset('assets/app/images/programs1.PNG') }}"></div>
            <p>About the class:
               <br><br>
               Disablitiy Thrivies is an award-winning class presented by EasterSeals Sourthern California.
               Participants will join Teacher Margaret Gough to try a series of exercises including noise
               sensitivity, movement
               and even things like background noises most of us don't notice.
               <br><br>
               Refund policy:Refunds up to 24 hours before class starts
            </p>
         </div>
         <div class="col-lg-6 col-md-7 col-sm-7 text-sm-left text-center ">
            <div class="heading-title col-md-8 mb-3">
               <h3>Disability Thrives &nbsp; (0348876)</h3>
               <br>
               <p>
                  By <span class="blue">EasterSeals Southern California</span>
                  <br><br>
                  <span class="fa fa-star checked"></span> <span>(4.8)</span>
                  <br><br>
                  Tu,Fr,Dec 12-Feb 5, 2021 <br> 11:00AM (EST)
                  <br>
               <div class="row">
                  <div class="col-lg-4">
                     &nbsp; &nbsp;&nbsp;
                     <i style="font-size:24px;color: black;" class="fa">&#xf004;</i>
                     <br>
                     Wish List
                     &nbsp;
                  </div>
                  <div class="col-lg-4">
                     &nbsp; 
                     <i style='font-size:24px;color: black;' class='fa'>&#xf064;</i><br>
                     Share
                  </div>
               </div>
               <br>
               </p>
               <h3>$5.00 or Credit/Class</h3>
               <br>
               <h3>$100.00 or Credit/Class</h3>
               <br>
               <div class="quantity buttons_added">
                  <div class="input-group inline-group">
                     <input type="number" step="1" min="15" max="" name="quantity" value="15" title="Qty"
                        class="input-text qty text" size="6" pattern="" inputmode="">
                     <input type="button" value="+" class="plus"> &nbsp;&nbsp;&nbsp;
                     <span style="    display: inline-flex; padding-top: 15px;">
                     Participants
                     </span>
                  </div>
               </div>
               <br><br>
               <button class=" button button6">Add to Cart</button>
               <button class=" submit-lg btn-lg">Checkout</button>
            </div>
         </div>
      </div>
   </div>
</section>
</div>
</section>
<!-- WOrk Process-->
<section id="our-process" class="padding ">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 ">
            <hr>
            <h4 class="inline">&nbsp; &nbsp; <img src="{{ asset('assets/app/images/arrow.PNG') }}" alt="">&nbsp;&nbsp; Shop for
               In-Center Programs 
            </h4>
            <h4 class="inline padd8">&nbsp;&nbsp;<img src="{{ asset('assets/app/images/arrow.PNG') }}" alt=""> &nbsp;&nbsp; what is
               Hybrid Programming? 
            </h4>
            <hr>
         </div>
      </div>
   </div>
</section>
<!--WOrk Process ends-->
<br><br>
<br>
<br>
@endsection


@section('scripts')
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