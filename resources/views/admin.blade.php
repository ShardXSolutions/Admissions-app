@extends('layouts.dash')

@section('content')
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Applicant's List</h1>
                    <p class="mb-4">This is the list of applicants who have either been placed by KUCCPS (Those having KUCCPS in their Admission Numbers) and Online Walk-ins</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="dataTable_length">
                                                <label>Show 
                                                    <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries
                                                </label>
                                            </div>
                                        </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="dataTable_filter" class="dataTables_filter">
                                            <form action="/search" method="get">
                                        @csrf
                                            <label>Search:
                                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                                               
                                                <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                                        </form>

                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                                    
                                
                                
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
                                    <tfoot>
                                        <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                    </tfoot>
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
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">

                                </div></div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                    {{ $admission->links() }}
                                    </div></div></div></div>
                            </div>
                        </div>
                    </div>

                </div>
            @endsection