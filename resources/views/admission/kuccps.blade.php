@extends('layouts.auth')
@section('title','KUCCPS Enrolled Candidates')
@section('content')

<div class="container"> 
  <div class="row justify-content-center">
    <div class="col-md-12">
    <div>
            <div><h1>{{ __('Your Details') }}</h1></div>

        <div class="card-body">


          
<br />

  
      <form method="post" action="{{ route('admission.update', $admission->id) }}">
        @method('PATCH')
        @csrf
    
     <input type="hidden" class="form-control" name="indexno" value="{{ $admission->IndexNumber }}" />
     
     <input type="hidden" class="form-control" name="feyear" value="{{ $admission->Year }}" />
       
     <input type="hidden" class="form-control" name="level" value="{{ $admission->Level }}" />
  
          Admission Number
          

          <input type="text" class="form-control" name="adm" value="{{ $admission->Adm }}" readonly /> <br>
          Full Name
          

          <input type="text" class="form-control" name="fullname" value="{{ $admission->StudentName }}" readonly /> <br>
          Course
          
        
          <input type="text" class="form-control" name="course" value="{{ $admission->Course }}" readonly /> <br>
          @if(($admission->Email)==" ")
          <br>Phone Number
          

          <input type="number" class="form-control" name="mobile" min="100000000" max="2999999999" value="" required />
          <br>Email
        
          <input type="email" class="form-control" name="email" value="" required />
          <br>Address
          

          <input type="text" class="form-control" name="address" value="" required />
        @else
        <input type="number" class="form-control" name="mobile" value="{{ $admission->Phone }}" hidden />
        <input type="email" class="form-control" name="email" value="{{ $admission->Email }}" hidden />
        <input type="text" class="form-control" name="address" value="{{ $admission->Address }}" hidden />
        @endif
          </br>
           <Button type="submit" name="previous" class="btn btn-success">Generate Admission Form</Button> 
          
                                        
                                    
      </form>
       </div>
      </div>
    </div>
  </div>
</div>
@endsection