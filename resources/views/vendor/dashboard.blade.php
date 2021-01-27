@extends('layouts.app_inner_page')

@section('content')
<!-- section -->
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
               <form action="{{ route('update_signinvendor_dashboard') }}" name="frmUpdateVendorDetails" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="user_id" value="{{ $user_data['id'] }}" />
                  <input type="hidden" name="user_type" value="{{ $user_data['user_type'] }}" />
                  <div class="row mb-2">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Enterprise Name </label>
                     </div>
                     <div class="col-lg-8 col-12">
                        <input type="text" class="form-control custom-file float-right" name="fld_enterprise_name" value="{{ $user_info['fld_enterprise_name'] }}" placeholder="" required />
                     </div>
                  </div>
                  <div class="row mb-2">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Type of Business</label>
                     </div>
                     <div class="col-lg-6 col-12">
                        <select class="form-control select inline" name="fld_business_type">
                           <option value="Adult Day Center" @if ($user_info['fld_business_type'] == 'Adult Day Center') selected @endif>Adult Day Center</option>
                           <option value="Senior Community" @if ($user_info['fld_business_type'] == 'Senior Community') selected @endif>Senior Community</option>
                           <option value="Care Enterprise" @if ($user_info['fld_business_type'] == 'Care Enterprise') selected @endif>Care Enterprise</option>
                        </select>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Address </label>
                     </div>
                     <div class="col-lg-8 col-12">
                        <input type="text" class="form-control custom-file float-right" name="fld_business_address" placeholder="" value="{{ $user_info['fld_business_address'] }}" required="" />
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Location </label>
                     </div>
                     <div class="col-lg-8 col-12">
                        <input type="text" class="form-control custom-file float-right" name="fld_business_location" placeholder="" value="{{ $user_info['fld_business_location'] }}" required="" />
                     </div>
                  </div>
                  <br>                  
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Zipcode </label>
                     </div>
                     <div class="col-lg-8 col-12">
                        <input type="number" class="form-control custom-file float-right" name="fld_business_address_zipcode" placeholder="" value="{{ $user_info['fld_business_address_zipcode'] }}" required="" />
                     </div>
                  </div>
                  <br>                  
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Client Size </label>
                     </div>
                     <div class="col-lg-2 col-12">
                        <select class="form-control select inline" name="fld_client_size">
                           <option value="250" @if ($user_info['fld_client_size'] == '250') selected @endif>250</option>
                           <option value="260" @if ($user_info['fld_client_size'] == '260') selected @endif>260</option>
                           <option value="270" @if ($user_info['fld_client_size'] == '270') selected @endif>270</option>
                           <option value="280" @if ($user_info['fld_client_size'] == '280') selected @endif>280</option>
                        </select>
                     </div>
                     <div class="col-lg-1"></div>
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Staff Size </label>
                     </div>
                     <div class="col-lg-2 col-12">
                        <select class="form-control select inline" name="fld_staff_size">
                           <option value="25" @if ($user_info['fld_staff_size'] == '25') selected @endif>25</option>
                           <option value="26" @if ($user_info['fld_staff_size'] == '26') selected @endif>26</option>
                           <option value="27" @if ($user_info['fld_staff_size'] == '27') selected @endif>27</option>
                           <option value="28" @if ($user_info['fld_staff_size'] == '28') selected @endif>28</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Main Phone</label>
                     </div>
                     <div class="col-lg-6 col-12">
                        <input type="tel" class="form-control custom-file float-right" name="fld_tel" placeholder="" value="{{ $user_info['fld_tel'] }}" required="" />
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Time Zone</label>
                     </div>
                     <div class="col-lg-2 col-12">
                        <select class="form-control select inline" name="fld_business_timezone">
                           <option value="EST" @if ($user_info['fld_business_timezone'] == 'EST') selected @endif>EST</option>
                           <option value="CST" @if ($user_info['fld_business_timezone'] == 'CST') selected @endif>CST</option>
                           <option value="PST" @if ($user_info['fld_business_timezone'] == 'PST') selected @endif>PST</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Email for Inquiry</label>
                     </div>
                     <div class="col-lg-6 col-12">
                        <input type="email" class="form-control custom-file float-right" name="fld_business_email_for_inquiry" value="{{ $user_info['fld_business_email_for_inquiry'] }}" required="" />
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label class="inline">Website</label>
                     </div>
                     <div class="col-lg-6 col-12">
                        <input type="url" class="form-control custom-file float-right" name="fld_website" value="{{ $user_info['fld_website'] }}" required="" />
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12 col-6 text-left">
                        <label class="inline">About your enterprise</label>
                     </div>
                     <div class="col-lg-10 col-12">
                        <p class="formfield">
                           <textarea name="fld_about_your_enterprise" class="custom-file form-control" style="min-height: 140px;"
                              rows="4">{{ $user_info['fld_about_your_enterprise'] }}</textarea>
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
                           <textarea name="fld_area_of_service" class="custom-file form-control" rows="3" style="min-height: 100px;">{{ $user_info['fld_area_of_service'] }}</textarea>
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
                        <input type="checkbox" class="form-control" name="fld_service_offered_patient_monitoring" value="1" @if ($user_info['fld_service_offered_patient_monitoring'] == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Patient Monitoring</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_service_offered_home_health" value="1" @if ($user_info['fld_service_offered_home_health'] == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Home Health</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_service_offered_activities" value="1" @if ($user_info['fld_service_offered_activities'] == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Activities</span>
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_service_offered_counselling" value="1" @if ($user_info['fld_service_offered_counselling'] == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Counselling</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_service_offered_support_group" value="1" @if ($user_info['fld_service_offered_support_group'] == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Support Group</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_service_offered_case_management" value="1" @if ($user_info['fld_service_offered_case_management'] == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Case Management</span>
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_service_offered_food_nutrition" value="1" @if ($user_info['fld_service_offered_food_nutrition'] == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Food & Nutrition</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_service_offered_memory_care" value="1" @if ($user_info['fld_service_offered_memory_care'] == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Memory Care</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_service_offered_vocational_help" value="1" @if ($user_info['fld_service_offered_vocational_help'] == 1) checked @endif />
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
                        <input type="checkbox" class="form-control" name="fld_membership_in_center" value="1" @if ($user_info['fld_membership_in_center'] == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>In-center</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_membership_virtual" value="1" @if ($user_info['fld_membership_virtual'] == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Virtual</span>
                        </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_membership_hybrid" value="1" @if ($user_info['fld_membership_hybrid'] == 1) checked @endif />
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
                           <input type="file" class="custom-file-input" name="fld_logo" id="fld_logo" accept="image/*" style="opacity: 1;" />
                           <!--<label class="custom-file-label" for="fld_logo">{{ $user_info['fld_logo'] }}</label>-->
                           @isset($user_info['fld_logo'])
                           <img src="{{ config('app.url') }}{{ $user_info['fld_logo'] }}" width="50" />
                           @endisset
                        </div>
                     </div>
                  </div>
                  <br><br>
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
                        <input type="text" class="form-control custom-file float-right" name="fld_contact_person_firstname" value="{{ $user_info['fld_contact_person_firstname'] }}" required />
                     </div>
                     <div class="col-lg-2 col-6 text-left">
                        <label>Last Name </label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <input type="text" class="form-control custom-file float-right" name="fld_contact_person_lastname" value="{{ $user_info['fld_contact_person_lastname'] }}" required />
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Position </label>
                     </div>
                     <div class="col-lg-7 col-12">
                        <input type="text" class="form-control custom-file float-right" name="fld_contact_person_position" value="{{ $user_info['fld_contact_person_position'] }}" required />
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Direct Line</label>
                     </div>
                     <div class="col-lg-7 col-12">
                        <input type="tel" class="form-control custom-file float-right" name="fld_contact_person_direct_line" value="{{ $user_info['fld_contact_person_direct_line'] }}" required />
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Email</label>
                     </div>
                     <div class="col-lg-7 col-12">
                        <input type="email" class="form-control custom-file float-right" name="fld_contact_person_email" value="{{ $user_info['fld_contact_person_email'] }}" required />
                     </div>
                  </div>
                  <br><br>
                  <button type="submit" class="submit">Submit</button>                  
               </form>
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