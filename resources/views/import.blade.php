
@extends('layouts.dash')
@section('title','Import KUCCPS Placed Students')
@section('content')



<div class="container my-5">
       <h1 class="fs-5 fw-bold text-center">Import KUCCPS Placed Students</h1>
       <div class="row">
           <div class="d-flex my-2">
               <a href="" class="btn btn-primary me-1">Export Data</a>
               <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Import Data
                </button>
           </div>
           @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
           @endif
            <table class="table">
                <thead>
                     <th>Adm</th>
              <th>Full Name</th>
              <th>Course</th>
              <th>Address</td>
              <th>EMail</th>
              <th>Mobile</th>
              <th>Index Number</th>
              <th>Exam Year</td>
                    
                </thead>
                <tbody>
                @foreach ($admission as $key => $admi)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $admi->adm }}</td>
                        <td>{{ $admi->fullname }}</td>
                        <td>{{ $admi->course }}</td>
                        <td>{{ $admi->address }}</td>
                        <td>{{ $admi->email }}</td>
                        <td>{{ $admi->mobile }}</td>
                        <td>{{ $admi->indexno }}</td>
                        <td>{{ $admi->feyear }}</td>
                        'id',
		'adm',
		'fullname',
		'course',
		'address',
		'email',
		'mobile',
		'level',
		'indexno',
		'feyear',
		
                    </tr>
                @endforeach
                </tbody>
            </table>
       </div>
   </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import CSV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="import" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- End Multi step form -->   
    @endsection
