
@extends('layouts.dash')
@section('title','Import KUCCPS Placed Students')
@section('content')
<div class="container-fluid">

<div class="row">

       <div class="col-md-12">

           <div class="card">

               <div class="card-header bgsize-primary-4 white card-header">

                   <h4 class="card-title">Import Excel Data</h4>

               </div>

               <div class="card-body">

                   @if ($message = Session::get('success'))

                       <div class="alert alert-success alert-block">

                           <button type="button" class="close" data-dismiss="alert">×</button>

                           <strong>{{ $message }}</strong>

                       </div>

                       <br>

                   @endif

                   <form action="{{url("settings")}}" method="post" enctype="multipart/form-data">

                       @csrf

                       <div class="form-group row">
                        <label for="settingname" class="col-md-4 col-form-label text-md-right">Setting name</label>

                        <div class="col-md-6">
                            <input id="settingname" type="text" class="form-control @error('settingname') is-invalid @enderror" name="settingname" value="Admission Period" readonly>

                            @error('settingname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="start date" class="col-md-4 col-form-label text-md-right">Start Date</label>

                        <div class="col-md-6">
                            <input id="startdate" type="date" class="form-control @error('startdate') is-invalid @enderror" name="startdate" required>

                            @error('startdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="end date" class="col-md-4 col-form-label text-md-right">End Date</label>

                        <div class="col-md-6">
                            <input id="enddate" type="date" class="form-control @error('enddate') is-invalid @enderror" name="enddate" required>

                            @error('enddate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" onclick="checkdates()">
                                    Set Dates
                                </button>

                               
                            </div>
                        </div>
                    
                   </form>

               </div>

           </div>

       </div>

   </div>

</div>

 
@endsection
