
@extends('layouts.app')
@section('content')
  <!-- Navigation -->
  
  <header class="masthead">
    
  </header>
  <section class="download bg-green text-center" id="top">
    <div class="container">
      <div class="row h-100">
      <div class="header-content mx-auto">

            <h1 class="mb-5">Welcome to our Online Admission Portal. </h1>
            <br><br><br><br><br><br><br>
            <a href="#newApplication" class="btn bg-dark btn-outline btn-xl js-scroll-trigger">New Applicants </a> 
            <a href="#KUCCPS" class="btn bg-dark btn-outline btn-xl js-scroll-trigger">KUCCPS Placed Applicants </a>

          </div>
</div>
</div>

  </section>



  <section class="download bg-secondary text-center" id="KUCCPS">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('KUCCPS Applicants Verification') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Index Number') }}</label>

                            <div class="col-md-6">
                                <input id="indexno" type="number"  class="form-control" min="100000000" max="999999999" name="indexno" value="{{ old('indexno') }}" required autocomplete="indexno" autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Year of Graduation') }}</label>

                            <div class="col-md-6">
                            <input id="feyear" type="number"  class="form-control" min="2010" max="2021" name="feyear" value="{{ old('feyear') }}" required autocomplete="feyear" autofocus>
                                
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="Check" class="btn btn-primary">
                                    {{ __('Check In') }}
                                </button>

                        </div>
                    </form>
                </div>
             
            </div>
        </div>   <div class="header-content mx-auto">

        <br><br>
<h1 class="mb-5" style="color:#ffffff;">If your have not been placed by KUCCPS. in our institution this year, please scroll down to apply directly to the college. </h1>
<br><a href="#newApplication" class="btn bg-dark btn-outline btn-xl js-scroll-trigger">New Applicantion </a>


</div>
    </div>
</div>

  </section>

  <section class="features bg-white text-center"  id="newApplication">
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
 
  
@endsection
  

