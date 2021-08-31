@extends('layouts.auth')
@section('title')
 <title>Generate Graduation Form</title>
    
@endsection
@section('content')
<section class="bg-purple">
    <div class="container">
      <div class="row h-100">
<div class="container"> 
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Your Application Details') }}</div>

        <div class="card-body">


          
<br />

  
      <form method="post" action="" >
        @method('PATCH')
        @csrf
       Enter Name (As captured in KCSE Certificate)
       <input type="text" class="form-control" name="fullname" value="" /> 
       Enter Grade
        <select id="A" class="form-control" onChange="changecat(this.value);" >
        <option value="A1">A</option>
        <option value="A1">A-</option>
        <option value="A1">B+</option>
        <option value="A1">B</option>
        <option value="A1">B-</option>
        <option value="A1">C+</option>
        <option value="A1">C</option>
        <option value="A1">C-</option>
        <option value="A2">D+</option>
        <option value="A3">D</option>
        <option value="A3">D-</option>
        <option value="A3">E</option>
        <option value="A3">KCPE</option>
        </select>
        Available Courses
        <select id="course" class="form-control">
        <option value="" disabled selected>Select</option>
        </select>
           <Button type="submit" name="previous" class="btn btn-primary">Generate Admission Form</Button>

      </form>
       </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
<script>
 var courses = {
    A1: ["DIPLOMA IN AUTOMOTIVE ENGINEERING","DIPLOMA IN BUILDING AND CONSTRUCTION TECHNOLOGY","DIPLOMA IN BUSINESS MANAGEMENT","DIPLOMA IN CIVIL ENGINEERING","DIPLOMA IN COMPUTERIZED SECRETARIAL STUDIES","DIPLOMA IN FOOD AND BEVERAGE PRODUCTION AND SERVICE","DIPLOMA IN GENERAL AGRICULTURE","DIPLOMA IN HUMAN RESOURSE MANAGEMENT","DIPLOMA IN INFORMATION COMMUNICATION TECHNOLOGY","DIPLOMA IN INFORMATION SCIENCE","DIPLOMA IN SOCIAL WORK AND COMMUNITY DEVELOPMENT","DIPLOMA IN TOURISM MANAGEMENT","DIPLOMA INELECTRICAL AND ELECTRONICS ENGINEERING (POWER OPTION)","CERTIFICATE IN BUILDING AND CONSTRUCTION TECHNOLOGY","CERTIFICATE IN BUSINESS MANAGEMENT","CERTIFICATE IN COMPUTERIZED SECRETARIAL STUDIES","CERTIFICATE IN FOOD AND BEVARAGE PRODUCTION AND SERVICE","CERTIFICATE IN GENERAL AGRICULTURE","CERTIFICATE IN HUMAN RESOURSE MANAGEMENT","CERTIFICATE IN INFORMATION COMMUNICATION TECHNOLOGY","CERTIFICATE IN INFORMATION SCIENCE","CERTIFICATE IN MOTOR VEHICLE MECHANICS","CERTIFICATE IN PLUMBING TECHNOGY","CERTIFICATE IN SCIENCE LABARATORY TECHNOLOGY","CERTIFICATE IN SOCIAL WORK","CERTIFICATE IN TOUR GUIDING AND OPERATIONS","CERTIFICATE INELECTRICAL AND ELECTRONICS ENGINEERING (POWER OPTION)","CERTIFICATE WELDING AND FABRICATION","ARTISAN FOOD AND BEVARAGE PRODUCTION AND SERVICE","ARTISAN IN ELECTRICAL INSTALLATION","ARTISAN IN HAIR DRESSING AND BEAUTY THERAPY","ARTISAN IN MASONRY","ARTISAN IN MOTOR VEHICLE MECHANICS","ARTISAN IN PLUMBING TECHNOLOGY","ARTISAN IN STOREKEEPING","ARTISAN IN WELDING AND FABRICATION"],
    A2: ["CERTIFICATE IN BUILDING AND CONSTRUCTION TECHNOLOGY","CERTIFICATE IN BUSINESS MANAGEMENT","CERTIFICATE IN COMPUTERIZED SECRETARIAL STUDIES","CERTIFICATE IN FOOD AND BEVARAGE PRODUCTION AND SERVICE","CERTIFICATE IN GENERAL AGRICULTURE","CERTIFICATE IN HUMAN RESOURSE MANAGEMENT","CERTIFICATE IN INFORMATION COMMUNICATION TECHNOLOGY","CERTIFICATE IN INFORMATION SCIENCE","CERTIFICATE IN MOTOR VEHICLE MECHANICS","CERTIFICATE IN PLUMBING TECHNOGY","CERTIFICATE IN SCIENCE LABARATORY TECHNOLOGY","CERTIFICATE IN SOCIAL WORK","CERTIFICATE IN TOUR GUIDING AND OPERATIONS","CERTIFICATE INELECTRICAL AND ELECTRONICS ENGINEERING (POWER OPTION)","CERTIFICATE WELDING AND FABRICATION","ARTISAN FOOD AND BEVARAGE PRODUCTION AND SERVICE","ARTISAN IN ELECTRICAL INSTALLATION","ARTISAN IN HAIR DRESSING AND BEAUTY THERAPY","ARTISAN IN MASONRY","ARTISAN IN MOTOR VEHICLE MECHANICS","ARTISAN IN PLUMBING TECHNOLOGY","ARTISAN IN STOREKEEPING","ARTISAN IN WELDING AND FABRICATION"],
    A3: ["ARTISAN FOOD AND BEVARAGE PRODUCTION AND SERVICE"," ARTISAN IN ELECTRICAL INSTALLATION"," ARTISAN IN HAIR DRESSING AND BEAUTY THERAPY"," ARTISAN IN MASONRY","ARTISAN IN MOTOR VEHICLE MECHANICS"," ARTISAN IN PLUMBING TECHNOLOGY"," ARTISAN IN STOREKEEPING"," ARTISAN IN WELDING AND FABRICATION"]
}

    function changecat(value) {
        if (value.length == 0) document.getElementById("course").innerHTML = "<option></option>";
        else {
            var catOptions = "";
            for (categoryId in courses[value]) {
                catOptions += "<option>" + courses[value][categoryId] + "</option>";
            }
            document.getElementById("course").innerHTML = catOptions;
        }
    }
</script>
@endsection