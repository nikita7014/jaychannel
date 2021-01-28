@extends('layouts.app_inner_page')

@section('content')
    <!-- section -->
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
      <div class="row">
         <div class="col-sm-8" style="align-self: center;">
            <h2 class="padding content-padding">
               Welcome back,EasterSeals!
         </div>
         <div class="col-sm-4">
         @if ($userInfo->logo != '')
         <img src="{{ config('app.url') }}/storage/app/{{ $vendor_logo_upload_path }}/{{ $userInfo->logo }}" alt="EasterSeals" style="width: 50%; position: relative;"/>
         @endif
         </div>
      </div>
      </h2>
      <br>
      <div class="row d-flex ">
         <div class="col-lg-2 offset-lg-1 col-md-5 col-sm-5 " >
            <h4><a href="{{ route('show_signinvendor_dashboard') }}">Account</a></h4>
            <br>
            <h4><span class="blue"><a href="{{ route('show_signinvendor_manageclasses') }}">Manage <br> Classes</a></span></h4>
            <br>
            <a href="{{ route('show_signinvendor_finance') }}">Finance</a>
         </div>
         <div class="col-lg-9 col-md-7 col-sm-7 text-sm-left text-center" >
            <div class="heading-title col-md-12 mb-3">
               <h4> &nbsp; &nbsp; <img src="{{ asset('assets/app/images/arrow.PNG') }}" alt="" width="25px" height="25px">&nbsp; &nbsp;
                  Edit Classes
               </h4>
               <br>
               <div class="row">
                  <div class="col-lg-8 col-12 text-center">
                     <p><!--<span class="blue">  &nbsp;&nbsp;   &nbsp;&nbsp;
                        <a href="manageclasses.html">New Class</a> </span> &nbsp;&nbsp;&nbsp;  &nbsp;
                        &nbsp;  &nbsp; &nbsp;<a href="vendor-dashboard.html">Edit Classes</a>--> 
                     </p>
                  </div>
               </div>
               <br>
               <form action="{{ route('show_signinvendor_savenewcourse') }}" name="frmCreateCourse" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="course_id" value="{{ $course_data->id }}" />
                  @csrf
                  <div class="row ">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Title </label>
                     </div>
                     <div class="col-lg-8 col-12">
                        <input type="text" class="form-control custom-file float-right" name="fld_title" value="{{ $course_data->title }}" placeholder="" required />
                     </div>
                  </div>
                  <br>
                  <div class="row ">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Start Date</label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <!--<select class="form-control select inline " id="months">
                           <option>Dec</option>
                           <option>Jan</option>
                        </select>-->
                        <input type="date" class="form-control custom-file float-right" name="fld_start_date" value="{{ $course_data->start_date }}" placeholder="" required />
                     </div>
                     <!--<div class="col-lg-2 col-12">
                        <select class="form-control select inline " id="days">
                           <option>4</option>
                           <option>3</option>
                        </select>
                     </div>-->
                     <div class="col-lg-2 col-6 text-center" style="align-self: center;">
                        <label>End Date</label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <!--<select class="form-control select inline " id="months">
                           <option>Jan</option>
                           <option>Feb</option>
                        </select>-->
                        <input type="date" class="form-control custom-file float-right" name="fld_end_date" value="{{ $course_data->end_date }}" placeholder="" required />
                     </div>
                     <!--<div class="col-lg-2 col-12">
                        <select class="form-control select inline " id="days">
                           <option>12</option>
                           <option>13</option>
                        </select>
                     </div>-->
                  </div>
                  <br>
                  <div class="row ">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Start Time</label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <!--<select class="form-control select inline " id="months">
                           <option>2</option>
                           <option>3</option>
                        </select>-->
                        <input type="time" class="form-control custom-file float-right" name="fld_start_time" value="{{ $course_data->start_time }}" placeholder="" required />
                     </div>
                     <!--<div class="col-lg-2 col-12">
                        <select class="form-control select inline " id="days">
                           <option>AM</option>
                           <option>PM</option>
                        </select>
                     </div>-->
                     <div class="col-lg-2 col-6 text-center" style="align-self: center;">
                        <label>End Time</label>
                     </div>
                     <div class="col-lg-3 col-12">
                        <!--<select class="form-control select inline " id="months">
                           <option>3</option>
                           <option>4</option>
                        </select>-->
                        <input type="time" class="form-control custom-file float-right" name="fld_end_time" value="{{ $course_data->end_time }}" placeholder="" required />
                     </div>
                     <div class="col-lg-2 col-12">
                        <!--<select class="form-control select inline " id="days">
                           <option>AM</option>
                           <option>PM</option>
                        </select>-->
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-1 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_day_monday" value="1" @if ($course_data->day_monday == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>M</span>
                        </label>
                     </div>
                     <div class="col-lg-1 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_day_tuesday" value="1" @if ($course_data->day_tuesday == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Tu</span>
                        </label>
                     </div>
                     <div class="col-lg-1 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_day_wednesday" value="1" @if ($course_data->day_wednesday == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>W</span>
                        </label>
                     </div>
                     <div class="col-lg-1 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_day_thursday" value="1" @if ($course_data->day_thursday == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Th</span>
                        </label>
                     </div>
                     <div class="col-lg-1 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_day_friday" value="1" @if ($course_data->day_friday == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>F</span>
                        </label>
                     </div>
                     <div class="col-lg-1 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="day_saturday" value="1" @if ($course_data->day_saturday == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Sa</span>
                        </label>
                     </div>
                     <div class="col-lg-1 col-12">
                        <label class="containercheckmark">
                        <input type="checkbox" class="form-control" name="fld_day_sunday" value="1" @if ($course_data->day_sunday == 1) checked @endif />
                        <span class="checkmark"></span>
                        <span>Su</span>
                        </label>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12">
                        <label class="switch">
                        <input type="checkbox" checked="checked" name="fld_re_occur" value="1" @if ($course_data->re_occur == 1) checked @endif />
                        <span class="slider round"> </span>
                        </label> &nbsp; Re-occur &nbsp;&nbsp;
                     </div>
                  </div>
                  <br>
                  <div class="row ">
                     <div class="col-lg-1 col-6 text-left" >
                        <label>Credits</label>
                     </div>
                     <div class="col-lg-2 col-12">
                        <select class="form-control select inline" name="fld_credits">
                          @for ($i = 1; $i <= 100; $i++)
                           <option value="{{ $i }}" @if ($course_data->credits == $i) selected @endif>{{ $i }}</option>
                          @endfor
                        </select>
                     </div>
                     <div class="col-lg-2 col-6 text-center" >
                        <label>Class Size</label>
                     </div>
                     <div class="col-lg-2 col-12">
                        <select class="form-control select inline" name="fld_class_size">
                          @for ($i = 1; $i <= 101; $i = $i+10)
                           <option value="{{ $i }}" @if ($course_data->class_size == $i) selected @endif>{{ $i }}</option>
                          @endfor
                        </select>
                     </div>
                     <div class="col-lg-2 col-6 text-center">
                        <label>Join by default</label>
                     </div>
                     <div class="col-lg-2 col-12">
                        <select class="form-control select inline" name="fld_join_by">
                           <option value="Audio" @if ($course_data->join_by == 'Audio') selected @endif>Audio</option>
                           <option value="Video" @if ($course_data->credits == 'Video') selected @endif>Video</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row ">
                     <div class="col-lg-2 col-6 text-left">
                        <label>Content Type</label>
                     </div>
                     <div class="col-lg-6 col-12">
                        <select class="form-control select inline" name="fld_content_type">
                           <option @if ($course_data->content_type == "Memory Health") selected @endif>Memory Health</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12 col-6 text-left">
                        <label class="inline">About the class</label>
                     </div>
                     <div class="col-lg-10 col-12">
                        <p class="formfield">
                           <textarea id="textarea" class="custom-file form-control mb-2" style="min-height: 140px;" rows="4" name="fld_about_class" required="">{{ $course_data->about_class }}</textarea>
                           <span style="float: right;">60 words</span>
                        </p>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12 col-6 text-left">
                        <label class="inline">Equipment requirement</label>
                     </div>
                     <div class="col-lg-10 col-12">
                        <p class="formfield">
                           <textarea id="textarea" class="custom-file form-control mb-2" rows="3" style="min-height: 80px;" name="fld_equipment_require" required="">{{ $course_data->equipment_require }}</textarea>
                           <span style="float: right;">20 words</span>
                        </p>
                     </div>
                  </div>
                  <br>
                  <div class="row ">
                     <div class="col-lg-3 col-6 text-left">
                        <span class="inline">Upload hero image</span>
                     </div>
                     <div class="col-lg-7 col-12">
                        <div class="custom-file inline float-right mb-3">
                           <!--<input type="file" class="custom-file-input" id="customFile">
                           <label class="custom-file-label" for="customFile"> happyimage.jpg</label>-->
                           <input type="file" class="custom-file-input" name="fld_hero_image" id="fld_hero_image" accept="image/x-png,image/gif,image/jpeg" style="opacity: 1;" />     
                           @isset($course_data->hero_image)
                           <img src="{{ config('app.url') }}/storage/app/course_hero_image/{{ $course_data->hero_image }}" width="50" /></div></br></br></br>
                           @endisset                                                 
                        </div>
                     </div>
                  </div>
                  <div class="row ">
                     <div class="col-lg-3 col-6 text-left">
                        <span class="inline">Upload browse images</span>
                     </div>
                     <div class="col-lg-7 col-12">
                        <div class="custom-file inline float-right mb-3">
                           <!--<input type="file" class="custom-file-input" id="customFile">
                           <label class="custom-file-label" for="customFile"> talkingimage.jpg</label>-->
                           <input type="file" class="custom-file-input" name="fld_browser_image_1" id="fld_browser_image_1" accept="image/x-png,image/gif,image/jpeg" style="opacity: 1;" />
                           @isset($course_data->hero_image)
                           <img src="{{ config('app.url') }}/storage/app/course_browser_image/{{ $course_data->browser_image_1 }}" width="50" /></br></br></br>
                           @endisset                            
                        </div>
                     </div>
                  </div>
                  <div class="row" style="margin-top: 25px;">
                     <div class="col-lg-3 col-6 text-left">
                        <span class="inline"></span>
                     </div>
                     <div class="col-lg-7 col-12">
                        <div class="custom-file inline float-right mb-2">
                           <!--<input type="file" class="custom-file-input" id="customFile">
                           <label class="custom-file-label " for="customFile"> smartimage.jpg</label>-->
                           <input type="file" class="custom-file-input" name="fld_browser_image_2" id="fld_browser_image_2" accept="image/jpeg" style="opacity: 1;" />
                           @isset($course_data->hero_image)
                           <img src="{{ config('app.url') }}/storage/app/course_browser_image/{{ $course_data->browser_image_2 }}" width="50" /></br></br></br>
                           @endisset                            
                        </div>
                     </div>
                  </div>
                  <div class="row mb-2" style="margin-top: 25px;">
                     <div class="col-10">
                        <span style="float: right;">Images must be in jpg format</span>
                     </div>
                  </div>
                  <div class="row ">
                     <div class="col-lg-3 col-6 text-left">
                        <span class="inline">Upload video clip</span>
                     </div>
                     <div class="col-lg-7 col-12">
                        <div class="custom-file inline float-right mb-2">
                           <!--<input type="file" class="custom-file-input" id="customFile">
                           <label class="custom-file-label mb-2" for="customFile"> happydemo.mpv</label>-->
                           <input type="file" class="custom-file-input" name="fld_video_clip" id="fld_video_clip" accept="video/*" style="opacity: 1;" />
                           @isset($course_data->hero_image)
                           <a href="{{ config('app.url') }}/storage/app/course_video_clip/{{ $course_data->video_clip }}" target="blank"><b>{{ $course_data->video_clip }}</b></a></br></br></br>
                           @endisset                            
                        </div>
                     </div>
                  </div>
                  <div class="row mb-2" style="margin-top: 25px;">
                     <div class="col-10">
                        <span style="float: right;">Video clip must be under SMB</span>
                     </div>
                  </div>
                  <br>
                  <br>
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