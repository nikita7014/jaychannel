@extends('layouts.app_inner_page')

@section('content')
  <!-- section -->
  <br><br><br><br><br>
  <section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax" style="background-image: url('{{ asset('assets/app/images/userbg.png') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -68.85px;height: 500px; display: none;">
    <div class="container">
      <div class="row1">
      </div>
    </div>
  </section>

  <!--Some Feature -->
  <section id="our-feature" class="single-feature padding">
    <div class="container ">
      <div class="row d-flex ">
        <div class="col-lg-8 col-md-7 col-sm-7 text-sm-left text-center wow" data-wow-delay="300ms">
          <div class="heading-title col-md-12 mb-3">
            <h4> &nbsp; &nbsp; <img src="{{ asset('assets/app/images/arrow.PNG') }}" alt="" width="25px" height="25px">&nbsp; &nbsp; {{ __('Register') }}</h4>
            <br>
            <br>
            <form method="POST" action="{{ route('register_user') }}">
              @csrf
              <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2">
                  <label>Name </label>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10">
                  <input class="form-control custom-file float-right" type="text" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autofocus />
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2">
                  <label class="inline">Address </label>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10">
                  <input type="text" class="form-control custom-file float-right" name="address" placeholder="{{ __('Address') }}" required />
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2">
                  <label class="inline">Tel </label>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10">
                  <input type="tel" class="form-control custom-file float-right" name="tel" placeholder="{{ __('Tel') }}" required />
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2">
                  <label class="inline">Email </label>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10">
                  <input type="email" class="form-control custom-file float-right" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required />
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2">
                  <label class="inline">User Type </label>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10">
                  <select class="form-control custom-file float-right" name="user_type">
                      <option value="Member">Member</option>
                      <option value="Vendor">Vendor</option>
                      <option value="Enterprise">Enterprise</option>                      
                  </select>
                </div>
              </div> 
              <br>
              <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2">
                  <label class="inline">Password </label>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10">
                  <input class="form-control custom-file float-right" type="password" placeholder="{{ __('Password') }}" name="password" required />
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2">
                  <label class="inline">Confirm Password </label>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10">
                  <input class="form-control custom-file float-right" type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required />
                </div>
              </div>                                         
              <br>
              <br>
              <br>
              <button class="submit" type="submit">{{ __('Register') }}</button>              
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
  </section>
  <br>
  <br>
  <br>
  <br>
@endsection

@section('javascript')

@endsection