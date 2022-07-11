
@extends('layouts.auth')

@section('content')



<section class="bg-foundry">
    <div class="container">
      <div class="row h-100">
<div class="container">
   <div class="row justify-content-center">
    <div class="col-md-14">
      <div class="card">
        <div class="card-header">{{ __('Admitted Students') }}</div>

        <div class="card-body">


          <div class="col-md-4" >
            <form action="/search" method="get">
              @csrf
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search this " name="search">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form> 



          </div>
<br />

     {{ $admission->links() }}
          <table class="table table-bordered">
            <thead>
              <th>Adm</th>
              <th>Full Name</th>
              <th>Course</th>
              <th>EMail</th>
              <th>Mobile</th>
              <th>Form Generated</th>
              <th>More</th>
            </thead>
            <tbody>
              @foreach ($admission as $admi) 
              <tr>
             
                <td>{{ $admi->adm }} </td>
                <td>{{ $admi->fullname }} </td>
                <td>{{ $admi->course }} </td>
                <td>{{ $admi->email }} </td>
                <th>{{ $admi->mobile }}</th>
                <td>{{ $admi->form_generated }}</td>
                <td>
                    <a href="" data-hover="tooltip" data-placement="top" data-target="#modal-edit-customers{{ $admi->id }}" data-toggle="modal" id="modal-edit"  class="btn btn-primary">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $admission->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
    <!-- End Multi step form -->   
    @endsection
