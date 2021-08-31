
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



  <section class="Download bg-secondary text-center" id="KUCCPS">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('KUCCPS Applicants Verification') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('kuccpslounge') }}">
                        @csrf
                          @if ($errors->any())<strong>
                             <div class="alert alert-danger">
                              <b>Error Encountered</b>
                                <hr width="100%">
                                <ul style="list-style-type:square;">
                                    @foreach ($errors->all() as $error)
                                    <br>
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <br>
                                To avoid data loss, you have been logged out. Please Login and Make Correct Updates.
                            </div><br />
                            @endif
                        <div class="form-group row">
                            <label for="indexno" class="col-md-4 col-form-label text-md-right">{{ __('Index Number') }}</label>

                            <div class="col-md-6">

                            <input id="indexno" type="number" min=100000000 max=99999999999 class="form-control @error('indexno') is-invalid @enderror" name="indexno" value="{{ old('indexno') }}" required autocomplete="indexno" >

                            @error('indexno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="feyear" class="col-md-4 col-form-label text-md-right">{{ __('Exam Year') }}</label>

                        <div class="col-md-6">
                            <input id="feyear" type="number" min="2000" max="2021" class="form-control @error('feyear') is-invalid @enderror" name="feyear" required autocomplete="current-password">

                            @error('feyear')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>


                        </div>
                    </div>
                </form>
            </div>
             
            </div>
        </div>   <div class="header-content mx-auto">

        <br><br>
<h1 class="mb-5" style="color:#ffffff;">If your have not been placed by KUCCPS in our institution this Year, please scroll down to apply directly to the college. </h1>
<br><a href="#newApplication" class="btn bg-dark btn-outline btn-xl js-scroll-trigger">New Applicantion </a>


</div>
    </div>
</div>

  </section>

  <section class="features bg-white text-center"  id="newApplication">
   <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
            <br>
            <br>
          <h2 class="section-heading">Are your a new Applicant</h2>
          <p>Click the link below to correct it. </p>
          <a href="/new" class="btn bg-primary btn-outline btn-xl js-scroll-trigger">Click to Apply for Admission</a>
</div>

      </div>
    </div>
  </section>
 
  
@endsection
  

