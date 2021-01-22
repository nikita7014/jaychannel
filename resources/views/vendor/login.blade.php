@extends('layouts.app_inner_page')

@section('content')
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