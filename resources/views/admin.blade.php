@extends('layouts.dash')

@section('content')
<div class="container-fluid">

<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Applicants </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $userCount }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Applicants with Forms</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $withFormsGenerated }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-cog fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Self Placed (Walk In)
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $walkIns }}</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Pending Requests</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Applicant's List</h1>
                    <p class="mb-4">Table of Applicants (both KUCCPS Placed and Self Placed)</a>.</p>
                 
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
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
                                                <input type="text" class="form-control" placeholder="Search this " name="search"></label>
                                               
                                                <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                                        </form>

                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 0.750rem;width: 100%;" width="100%" cellspacing="0">
                                   
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
             
                <td>{{ $admi->Adm }} </td>
                <td>{{ $admi->StudentName }} </td>
                <td>{{ $admi->Course }} </td>
                <td>{{ $admi->Email }} </td>
                <th>{{ $admi->Phone }}</th>
                <td>{{ $admi->FormGenerated }}</td>
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
                                    {{ $admission->onEachSide(3)->links() }}
                                    </div></div></div></div>
                            </div>
                        </div>
                    </div>

                </div>
            @endsection