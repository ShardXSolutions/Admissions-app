@extends('layouts.auth')
@section('title')
 <title>Generate Graduation Form</title>
    
@endsection
@section('content')

<div class="container"> 
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Your Application Details') }}</div>

        <div class="card-body">


          
<br />

  
      <form method="post" action="{{ route('application.create'}}">
        @method('PATCH')
        @csrf

        
 

        Admission Number
        <input type="text" class="form-control" name="adm" value="" readonly /> <br>
Full Name
           <input type="text" class="form-control" name="fullname" value="" readonly /> <br>
      Course
          <input type="text" class="form-control" name="course" value="" readonly /> <br>
       
           <Button type="submit" name="previous" class="btn btn-primary">Generate Admission Form</Button>

      </form>
       </div>
      </div>
    </div>
  </div>
</div>
@endsection