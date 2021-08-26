
@extends('layouts.app')
@section('content')
  <!-- Navigation -->
  
  <header class="masthead">
    
  </header>
 <section class="main bg-tertiary text-center" id="main">
  <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <h1 class="mb-5">Welcome to RVTTI alumni page. </h1>
            <a href="#register" class="btn bg-dark btn-outline btn-xl js-scroll-trigger">Enroll Now </a>
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <img src="img/demo-screen-1.png" class="img-fluid" alt="">
                </div>
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </section>
  <section class="download bg-primary text-center" id="register">
    <div class="container">
      <div class="row h-100">
        <div class="col-md-8 mx-auto">
          <h2 class="section-heading">Register as RVTTI Alumni</h2>
          <p>Fill the details that will be requested in the following section. if the information is unavailable use N/A. some fields are mandatory</p>
          <a href="{{ route('alumnis.create') }}" class="btn bg-dark btn-outline btn-xl js-scroll-trigger">Click to Register</a>
</div>
</div>
</div>

  </section>

  <section class="features bg-white text-center"  id="edit">
   <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 class="section-heading">Are your details wrongly captured</h2>
          <p>Click the link below to correct it. </p>
          <a href="{{ route('update')}}" class="btn bg-primary btn-outline btn-xl js-scroll-trigger">Click to Edit Details</a>
</div>

      </div>
    </div>
  </section>
 
   <section class="download bg-primary text-center" id="graduate">
    <div class="container">
      <div class="row h-100">
        <div class="col-md-8 mx-auto">
          <h2 class="section-heading">Generate Graduation Form</h2>
          <p>If you have registered as alumni, Go ahead and generate graduation form using the link below</p>
          <a href="{{ route('graduateform') }}" class="btn bg-dark btn-outline btn-xl js-scroll-trigger">Click to Generate Graduation Form</a>
</div>
</div>
</div>

  </section>
@endsection
  

