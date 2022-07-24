@extends('layouts.auth')
@section('title')
 <title>New Candidates</title>
    
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


        <br>
      <form method="post" enctype="multipart/form-data" action="{{ route('admission.store') }}" >
        @method('POST')
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger">
          <h3>Following required entries are missing in your form. correct to proceed</h3>
            <ul style="list-style-type: square;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @else
        <span style="color: #ff0000;"><strong>Fields marked (*) are mandatory</strong></span>
        @endif
        <br>
        <label class="text-black text-left" for="fullname">Enter Full Names (as used in KCSE or KCPE previous exam)</label><span style="color: #ff0000;"><strong>*</strong></span>
        <input type="text" class="form-control" name="StudentName" id="inputName" placeholder="e.g. Jane Doe" value="{{ old('StudentName') }}">
       
        <label class="text-black text-left" for="gender">Choose Gender</label>
        <span style="color: #ff0000;"><strong>*</strong></span>
        <select id="Gender" name ="Gender" class="form-control" >
          <option>Select Gender</option>
          <option value="FEMALE">FEMALE</option>
          <option value="MALE">MALE</option>

        </select>
       
       <label class="text-black text-left" for="Grade">Choose Grade Attained / Exam Sat</label>
        <span style="color: #ff0000;"><strong>*</strong></span>
        <select id="Grade" class="form-control" onChange="changecat(this.value);" >
          <option>Select Grade</option>
        <option value="A1">A</option>
        <option value="A1">A-</option>
        <option value="A1">B+</option>
        <option value="A1">B</option>
        <option value="A1">B-</option>
        <option value="A1">C+</option>
        <option value="A1">C</option>
        <option value="A1">C-</option>
        <option value="A2">D+</option>
        <option value="A2">D</option>
        <option value="A3">D-</option>
        <option value="A3">E</option>
        <option value="A3">KCPE Certificate</option>
        <option value="A2">Artisan / Trade Test Certificate</option>
        <option value="A1">Craft Certificate</option>

        </select>
        <label class="text-black text-left" for="feser">Enter Your KNEC  Index Number</label><span style="color: #ff0000;"><strong>*</strong></span>
        <input id="IndexNumber" type="number" class="form-control" name="IndexNumber" value="{{ old('IndexNumber') }}" placeholder="e.g. 518105006" />
        <label class="text-black text-left" for="feyear" >Enter Year of the Exam</label><span style="color: #ff0000;"><strong>*</strong></span>
        <input id="Year" type="number" min="2000" max="2022" class="form-control" name="Year" placeholder=" e.g. 2020" value="{{ old('feyear') }}" />

        <label class="text-black text-left" for="course">Choose Course</label><span style="color: #ff0000;"><strong>*</strong></span>
        <select id="Course" name ="Course" class="form-control">
          <option value="{{ old('Course')}}" disabled selected >Enter Grade First.</option>
        </select>
        

        <label class="text-black text-left" for="mobile">Current Mobile Phone Number</label><span style="color: #ff0000;"><strong>*</strong></span>
        <input type="text" class="form-control" name="Phone" id="inputphone" placeholder="e.g. 0734567890" value="{{ old('Phone') }}">
        <label class="text-black text-left" for="inputEmail">Enter email Address</label><span style="color: #ff0000;"><strong>*</strong></span>
        <input type="email" class="form-control" name="Email" id="inputName" placeholder="e.g. janedoe@yahoo.com " value="{{ old('Email') }}">
        <label class="text-black text-left" for="address">Enter Current Mailing Address</label><span style="color: #ff0000;"><strong>*</strong></span>
        <input type="text" class="form-control" name="Address" id="Address" placeholder="e.g. P.O. Box 123456789 -00200- Nairobi " value="{{ old('Address') }}">
        <label class="text-black text-left" for="fileinput">Upload Transcript / Certificate (For examination and grade above)</label><span style="color: #ff0000;"><strong>*</strong></span>

        <div class="form-group">
                    <input type="file" class="form-control" name="certfile" id="certfile" aria-describedby="fileHelp" >
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid file Either Image or PDF. The Size of the should not be more than 400kb.</small>
        </div>
        <br>
        <br>
           <Button type="submit" name="submit" class="btn btn-primary">Generate Provisional Admission Form</Button>

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
        if (value.length == 0) document.getElementById("Course").innerHTML = "<option></option>";
        else {
            var catOptions = "";
            for (categoryId in courses[value]) {
                catOptions += "<option>" + courses[value][categoryId] + "</option>";
            }
            document.getElementById("Course").innerHTML = catOptions;
        }
    }
</script>
@endsection