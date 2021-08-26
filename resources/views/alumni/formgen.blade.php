@extends('layouts.auth')
@section('title')
 <title>Generate Graduation Form</title>
    
@endsection
@section('content')
<div class="container"> 
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">{{ __('Enter Payment Details') }}</div>

        <div class="card-body">


          
<br />

  
      <form method="post" action="{{ route('alumnis.update', $alumni->id) }}">
        @method('PATCH')
        @csrf
      
          <input type="hidden" class="form-control" name="fullname" value="{{ $alumni->fullname }}"  />
     
          <input type="hidden" class="form-control" name="dept" value="{{ $alumni->dept }}" />
      
          <input type="hidden" class="form-control" name="course" value="{{ $alumni->course }}" />
       
          <input type="hidden" class="form-control" name="feser" value="{{ $alumni->feser }}" />
        
          <input type="hidden" class="form-control" name="feyear" value="{{ $alumni->feyear }}" />
        
          <input type="hidden" class="form-control" name="idnum" value="{{ $alumni->idnum }}" />
       
          <input type="hidden" class="form-control" name="adm" value="{{ $alumni->adm }}" />
       
          <input type="hidden" class="form-control" name="level" value="{{ $alumni->level }}" />
       
          <input type="hidden" class="form-control" name="current_address" value="{{ $alumni->current_address }}" />
      
          <input type="hidden" class="form-control" name="permanent_address" value="{{ $alumni->permanent_address }}" />
       
          <input type="hidden" class="form-control" name="email" value="{{ $alumni->email }}" />
        
          <input type="hidden" class="form-control" name="mobile" value="{{ $alumni->mobile }}" />
       
          <input type="hidden" class="form-control" name="nextofkin" value="{{ $alumni->nextofkin }}" />
       
          <input type="hidden" class="form-control" name="nextofkinphone" value="{{ $alumni->nextofkinphone }}" />
       
          <input type="hidden" class="form-control" name="nextofkinadd" value="{{ $alumni->nextofkinadd }}" />
      
          <input type="hidden" class="form-control" name="occupation" value="{{ $alumni->occupation }}" />
       <input type="hidden" class="form-control" name="placeofworkadd" value="{{ $alumni->placeofworkadd }}" />
       
          <input type="hidden" class="form-control" name="occupation_place" value="{{ $alumni->occupation_place }}" />
      
          <input type="hidden" class="form-control" name="supervisoradd" value="{{ $alumni->supervisoradd }}" />
       
        <div class="form-group">
          <label for="name">Payment Mode:</label>
          <select class="form-control" id="select" name="trans">

           <option>MPESA</option>
           <option>Money Order</option>
           <option>Banking Slip</option>
           <option>Other</option>


         </select>
        </div>
        <div class="form-group">
          <label for="Serial">Transaction Number:</label>
          <input type="text" class="form-control" name="serial" value="{{ $alumni->serial}}" />
        </div>
        
          <Button type="submit" name="previous" class="btn btn-primary">Update</Button>

      </form>
       </div>
      </div>
    </div>
  </div>
</div>
@endsection