
@extends('layouts.auth')

@section('content')



<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-14">
      <div class="card">
        <div class="card-header">{{ __('Registered Alumni') }}</div>

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

     {{ $alumni->links() }}
          <table class="table table-bordered">
            <thead>
              <th>Reg Number</th>
              <th>Full Name</th>
              <th>ID/Passport</th>
              <th>Course</th>
              <th>Department</th>
              <th>Mobile</th>
              <th>EMail</th>
            </thead>
            <tbody>
              @foreach ($alumni as $alumn) 
              <tr>
             
                <td>{{ $alumn->adm }} </td>
                <td>{{ $alumn->fullname }} </td>
                <td>{{ $alumn->idnum }} </td>
                <td>{{ $alumn->course }} </td>
                <td>{{ $alumn->dept }} </td>
                <th>{{ $alumn->mobile }}</th>
                <td>{{ $alumn->email }}</td>
                <td>
                    <a href="{{route('alumnis.edit',$alumn->id)}}" data-hover="tooltip" data-placement="top" data-target="#modal-edit-customers{{ $alumn->id }}" data-toggle="modal" id="modal-edit"  class="btn btn-primary">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $alumni->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- End Multi step form -->   
    @endsection
