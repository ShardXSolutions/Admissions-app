@extends('layouts.auth')
@section('title')
 <title>Registering New Alumni</title>
    
@endsection
@section('content')
<!-- Navigation -->


<!-- multistep form -->


  <h4 class="text-black"><strong>Register as Alumni</strong></h2>


      <form id="msform" name="frmRegistration" method="post" action="{{ route('alumnis.store') }}">
        @csrf 

        <br> <ul id="progressbar" type="">
          <li class="active"><i class="fa fa-user fa-4x"></i></li>
          <li><i class="fa fa-industry  fa-4x"></i></li>
          <li><i class="fa fa-university fa-4x"></i></li>
        </ul>
        <fieldset>
        
        @if ($errors->any())
        <div class="alert alert-danger">
          <h3>Following Required Items were Missing in your form. Correct To Proceed</h3>
            <ul style="list-style-type: square;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @else
            <h2 class="fs-title">Enter the details requested.</h2>
            <h3 class="fs-subtitle">If information is not applicable use N/A</h3>
        @endif
          <label class="text-black text-left" for="admissionnumber">Your Student Registration Number</label>
          <input type="text" class="form-control" id="inputAdmissionnumber" name ="adm" value="{{ old('adm') }}" placeholder="e.g. 117R0008">
          <label class="text-black text-left" for="inputEmail">Enter Full Names</label>
          <input type="text" class="form-control" name="fullname" id="inputName" placeholder="e.g. Miss. Jane Doe" value="{{ old('fullname') }}">


          <label class="text-black text-left" for="inputEmail">Enter National ID/Passport Number</label>
          <input type="text" class="form-control" name="idnum" id="inputID" placeholder="e.g. 21436587" value="{{ old('idnum') }}">


          <label class="text-black text-left" for="no">Current Mobile Phone Number</label>
          <input type="text" class="form-control" name="mobile" id="inputphone" placeholder="e.g. 0734567890" value="{{ old('mobile') }}">

           <label class="text-black text-left" for="phoneno">Alternative Mobile Phone Number</label>
          <input type="text" class="form-control" name="altphone" id="altphone" placeholder="e.g. 0734567890" value="{{ old('altphone') }}">

          <label class="text-black text-left" for="inputEmail">Enter email Address</label>
          <input type="email" class="form-control" name="email" id="inputName" placeholder="e.g. janedoe@yahoo.com " value="{{ old('email') }}">

          <label class="text-black text-left" for="inputEmail">Enter Current Address</label>
          <input type="text" class="form-control" name="current_address" id="inputName" placeholder="e.g. P.O. Box 123456789 -00200- Nairobi " value="{{ old('current_address') }}">

          <label class="text-black text-left" for="inputEmail">Enter Permanent Address (can be similar to the above) </label>
          <input type="text" class="form-control" name="permanent_address" id="inputName" placeholder="e.g. P.O. Box 123456 -30108- Timboroa " value="{{ old('permanent_address') }}">
          <label class="text-black text-left" for="admissionnumber">Next of Kin</label>
          <input type="text" class="form-control" id="nextofkin" name ="nextofkin" placeholder="e.g. Jane Doe" value="{{ old('adm') }}">
          <label class="text-black text-left" for="admissionnumber">Next of Kin Address</label>
          <input type="text" class="form-control" id="nextofkinadd" name ="nextofkinadd" placeholder="e.g. P.O. Box 234 -00100- Nairobi" value="{{ old('nextofkinadd') }}">
          <label class="text-black text-left" for="admissionnumber">Next of Kin Mobile Phone</label>
          <input type="text" class="form-control" id="nextofkinphone" name ="nextofkinphone" placeholder="e.g. 0734567890" value="{{ old('nextofkinphone') }}">

          <input type="button" name="next" class="next action-button " value="Next" />
        
        </fieldset>  
        <fieldset>
          <h2 class="fs-title">Employment Details</h2>
          <h3 class="fs-subtitle">Give brief description about your current employment. If Unemployed use N/A in each</h3>
          <label class="text-black text-left" for="admissionnumber">Current Occupation (if None use N/A) </label>
          <input type="text" class="form-control" id="inputAdmissionnumber" name ="occupation" placeholder="e.g. Network Administrator" value="{{ old('occupation') }}">

          <label class="text-black text-left" for="admissionnumber">Place of Current Occupation ( if None use N/A)</label>
          <input type="text" class="form-control" id="inputAdmissionnumber" name ="occupation_place" placeholder="e.g. Nairobi" value="{{ old('occupation_place') }}">

          <label class="text-black text-left" for="inputsupname">Supervisor Telephone Number ( if None use N/A)</label>
          <input type="text" class="form-control" name="supervisoradd" id="supphone" placeholder="e.g. 0734567890" value="{{ old('supervisoradd') }}">
          <label class="text-black text-left" for="inputsupname">Address of Current Place of Work ( if None use N/A)</label>
          <input type="text" class="form-control" name="placeofworkadd" id="occuadd" value="{{ old('placeofworkadd') }}" placeholder="e.g. Rift Valley Technical Training Institute, P.O. Box 244 -30100-,Eldoret">

          <input type="button" name="previous" class="previous action-button" value="Previous" />
         <input type="button" name="next" class="next action-button" value="Next" />
        
        </fieldset> 


        <fieldset>
          <h2 class="fs-title">Academic Details</h2>
          <h3 class="fs-subtitle">State the course you just completed</h3>

          <label class="text-black text-left" for="department">Select your Course's Department</label>
          <select class="form-control" id="dept" name="dept">

           <option>Automotive Engineering</option>
           <option>Building & Civil Engineering</option>
           <option>Business and Development Studies</option>
           <option>Electrical & Electronic Engineering</option>
           <option>Hospitality & Dietetics Management</option>
           <option>Information Communication Technology</option>
           <option>Mechanical and Automotive Engineering</option>
           <option>Pharmacy & Chemical Science</option>
           <option>Medical & Biological Sciences</option>

         </select>
         <label class="text-black text-left" for="admissionnumber">Course (in full as per registration)</label>
         <input type="text" class="form-control" id="inputcourse" value="{{ old('course') }}" name="course" placeholder="e.g. Diploma in Information Communication Technology">
         <label class="text-black text-left" for="courselevel">Select your current Course's Level</label>
         <select class="form-control" id="select" name="level">

           <option>Artisan</option>
           <option>Craft</option>
           <option>Diploma</option>
           <option>Higher Diploma</option>


         </select>
         <label class="text-black text-left" for="year"> Final Examination Year</label>
         <input type="number" class="form-control" id="datepicker" name="feyear" placeholder="e.g. 1994" min="1980" max="2018" value="2018">
         <label class="text-black text-left" for="year"> Series</label>
         <Select class="form-control" id="selectSeries" name="feser">
          <option>July</option>
          <option>November</option>
        </Select>
      <input type="button" name="previous" class="previous action-button" value="Previous" />
          <input type="submit" name="previous" class="submit-button" value="Save" />
         
      </fieldset> 
    </form> 


@endsection