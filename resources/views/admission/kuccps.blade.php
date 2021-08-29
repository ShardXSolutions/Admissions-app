@extends('layouts.auth')
@section('title')
 <title>Generate Graduation Form</title>
    
@endsection
@section('content')

<div class="container"> 
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Your Details') }}</div>

        <div class="card-body">


          
<br />

  
      <form method="post" action="{{ route('admission.update', $admission->id) }}">
        @method('PATCH')
        @csrf

        <input type="hidden" class="form-control" name="mobile" value="{{ $admission->mobile }}"  />
     
     <input type="hidden" class="form-control" name="indexno" value="{{ $admission->indexno }}" />
 
     <input type="hidden" class="form-control" name="email" value="{{ $admission->email }}" />
  
     <input type="hidden" class="form-control" name="address" value="{{ $admission->address }}" />
   
     <input type="hidden" class="form-control" name="feyear" value="{{ $admission->feyear }}" />
       
     <input type="hidden" class="form-control" name="level" value="{{ $admission->level }}" />
  
 
 

        Admission Number
        <input type="text" class="form-control" name="adm" value="{{ $admission->adm }}" readonly /> <br>
Full Name
           <input type="text" class="form-control" name="fullname" value="{{ $admission->fullname }}" readonly /> <br>
      Course
          <input type="text" class="form-control" name="course" value="{{ $admission->course }}" readonly /> <br>
       
           <Button type="submit" name="previous" class="btn btn-primary">Generate Admission Form</Button>

      </form>
       </div>
      </div>
    </div>
  </div>
</div>
@endsection