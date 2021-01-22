@extends('layouts.app_inner_page')

@section('content')
<!-- section -->
<br><br><br><br><br>
<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax"
   style="background-image: url('{{ asset('assets/app/images/userbg.png') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -68.85px;height: 500px;
   display: none;">
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
      <h2 class="padding content-padding">Let's get you set up!</h2>
      <br>
      <div class="row d-flex ">
         <div class="col-lg-2 offset-lg-1 col-md-5 col-sm-5 " >
            <h4><span class="blue"><a href="#">Account</a></span></h4>
            <br>
            <h4><a href="{{ route('show_signinvendor_manageclasses') }}">Manage <br> Classes</a></h4>
            <br>
            <h4><a href="{{ route('show_signinvendor_finance') }}">Finance</a></h4>
            <br>
         </div>
         <div class="col-lg-9 col-md-7 col-sm-7 text-sm-left text-center " >
            <div class="heading-title col-md-12 mb-3">
               <h4> &nbsp; &nbsp; <img src="{{ asset('assets/app/images/arrow.PNG') }}" alt="" width="25px" height="25px">&nbsp; &nbsp;
                  My
                  Account
               </h4>
               <br>
               <h4 style="float: right;">
                  Edit Account &nbsp; &nbsp; &nbsp; &nbsp;
               </h4>
               <br>
               <br>
               <form action="#">
                  <div class="row mb-2">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Enterprise Name </label>
                     </div>
                     <div class="col-lg-8 col-12">
                        <input type="text" class="form-control custom-file float-right" id=""
                           placeholder="EasterSeals">
                     </div>
                  </div>
                  <div class="row mb-2">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Type of Business</label>
                     </div>
                     <div class="col-lg-6 col-12">
                        <select class="form-control select inline " id="sel1">
                           <option>Adult Day Center</option>
                           <option>Senior Community</option>
                           <option>Care Enterprise</option>
                        </select>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Address </label>
                     </div>
                     <div class="col-lg-8 col-12">
                        <input type="text" class="form-control custom-file float-right" id=""
                           placeholder="333 Happy Drive, Half Moon Bay, CA 12345">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Client Size </label>
                     </div>
                     <div class="col-lg-2 col-12">
                        <select class="form-control select inline " id="sel1">
                           <option>250</option>
                           <option>260</option>
                           <option>270</option>
                           <option>280</option>
                        </select>
                     </div>
                     <div class="col-lg-1"></div>
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Staff Size </label>
                     </div>
                     <div class="col-lg-2 col-12">
                        <select class="form-control select inline " id="sel1">
                           <option>25</option>
                           <option>26</option>
                           <option>27</option>
                           <option>28</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Main Phone</label>
                     </div>
                     <div class="col-lg-6 col-12">
                        <input type="number" class="form-control custom-file float-right" id=""
                           placeholder="(310) 455-9976">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Time Zone</label>
                     </div>
                     <div class="col-lg-2 col-12">
                        <select class="form-control select inline " id="sel1">
                           <option>EST</option>
                           <option>CST</option>
                           <option>PST</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Email for Inquiry</label>
                     </div>
                     <div class="col-lg-6 col-12">
                        <input type="number" class="form-control custom-file float-right" id=""
                           placeholder="jramos@happyday.com">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Website</label>
                     </div>
                     <div class="col-lg-6 col-12">
                        <input type="number" class="form-control custom-file float-right" id=""
                           placeholder="happyday.org">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12 col-6 text-left">
                        <label class="inline">About your enterprise</label>
                     </div>
                     <div class="col-lg-10 col-12">
                        <p class="formfield">
                           <textarea id="textarea" class="custom-file form-control" style="min-height: 140px;"
                              rows="4">Care.org company, was founded in 2006 on the understanding that quality family care in both a fundamental human need and a key driver of economic growth and empoerment. When children receive quality care in their critical formative yeares, they are on a path to achievement and success.Wpmen disproportionately...</textarea>
                        </p>
                        <span style="float: right;">100 words</span>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12 col-6 text-left">
                        <label class="inline">Area of Service (in bullet points)</label>
                     </div>
                     <div class="col-lg-10 col-12">
                        <p class="formfield">
                           <textarea id="textarea" class="custom-file form-control" rows="3"
                              style="min-height: 100px;"> </textarea>
                        </p>
                        <span style="float: right;">100 words</span>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12 col-6 text-left">
                        <label class="inline">Services offered</label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control">
                        <span class="checkmark"></span>
                        <span>Patient Monitoring</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control">
                        <span class="checkmark"></span>
                        <span>Home Health</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control">
                        <span class="checkmark"></span>
                        <span>Activities</span>
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control">
                        <span class="checkmark"></span>
                        <span>Counselling</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control">
                        <span class="checkmark"></span>
                        <span>Support Group</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control">
                        <span class="checkmark"></span>
                        <span>Case Management</span>
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control">
                        <span class="checkmark"></span>
                        <span>Food & Nutrition</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control">
                        <span class="checkmark"></span>
                        <span>Memory Care</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control">
                        <span class="checkmark"></span>
                        <span>Vocational Help</span>
                        </label>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12 col-6 text-left">
                        <label class="inline">Membership</label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control">
                        <span class="checkmark"></span>
                        <span>In-center</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control">
                        <span class="checkmark"></span>
                        <span>Virtual</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control">
                        <span class="checkmark"></span>
                        <span>Hybrid</span>
                        </label>
                     </div>
                  </div>
                  <br>
                  <div class="row d-flex">
                     <div class="col-lg-3 col-6 text-left">
                        <span class="inline">Upload your logo</span>
                     </div>
                     <div class="col-lg-7 col-12">
                        <div class="custom-file inline float-right mb-3">
                           <input type="file" class="custom-file-input" id="customFile">
                           <label class="custom-file-label" for="customFile"> happyimage.jpg</label>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12 col-6 text-left">
                        <label class="inline">Contact Person</label>
                     </div>
                     <br>
                     <br>
                     <div class="col-lg-2 col-6 text-left">
                        <label>First Name </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <input type="text" class="form-control custom-file float-right" id=""
                           placeholder="JoAnn">
                     </div>
                     <div class="col-lg-2 col-6 text-left">
                        <label>Last Name </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <input type="text" class="form-control custom-file float-right" id=""
                           placeholder="Ramos">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Position </label>
                     </div>
                     <div class="col-lg-7 col-12">
                        <input type="text" class="form-control custom-file float-right" id=""
                           placeholder="Administrator">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Direct Line</label>
                     </div>
                     <div class="col-lg-7 col-12">
                        <input type="text" class="form-control custom-file float-right" id=""
                           placeholder="(310) 455-9980 x 234">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Email</label>
                     </div>
                     <div class="col-lg-7 col-12">
                        <input type="text" class="form-control custom-file float-right" id=""
                           placeholder="jramos@happyday.com">
                     </div>
                  </div>
               </form>
               <br>
               <br>
               <button class="submit">Submit</button>
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