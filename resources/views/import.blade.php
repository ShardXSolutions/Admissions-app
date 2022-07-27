
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

                   <form action="{{url("import")}}" method="post" enctype="multipart/form-data">

                       @csrf

                       <fieldset>

                           <label>Select File to Upload  <small class="warning text-muted">{{__('Please upload only Excel (.xlsx or .xls) files')}}</small></label>

                           <div class="input-group">

                               <input type="file" required class="form-control" name="uploaded_file" id="uploaded_file">

                               @if ($errors->has('uploaded_file'))

                                   <p class="text-right mb-0">

                                       <small class="danger text-muted" id="file-error">{{ $errors->first('uploaded_file') }}</small>

                                   </p>

                               @endif

                               <div class="input-group-append" id="button-addon2">

                                   <button class="btn btn-primary square" type="submit"><i class="ft-upload mr-1"></i> Upload</button>

                               </div>

                           </div>

                       </fieldset>

                   </form>

               </div>

           </div>

       </div>

   </div>

</div>

 
    @endsection
