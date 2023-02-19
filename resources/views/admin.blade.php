@extends('layouts.dash')
@section('title','Dashboard')

@section('content')
<div class="container-fluid">

<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Total Applicants </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $userCount }}</div>
                
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-500"></i>
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
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Generated Forms
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $withFormsGenerated }}</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: {{ ($withFormsGenerated/ $userCount)*100 }}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-cogs fa-2x text-gray-500"></i>
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
                                <div class="progress-bar bg-info" role="progressbar" style="width: {{ ($walkIns/ $userCount)*100 }}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-500"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Female Applicants
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $femaleApplicants  }}</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: {{ ($femaleApplicants / $userCount)*100 }}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-female fa-2x text-gray-500"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Summary by Placement Type</h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                        <canvas id="myPieChart" style="display: block; width: 288px; height: 245px;" class="chartjs-render-monitor" width="288" height="245"></canvas>

                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> KUCCPS
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Self Placed
                                        </span>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Summary by gender</h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                        <canvas id="myPieChart1" style="display: block; width: 288px; height: 245px;" class="chartjs-render-monitor" width="288" height="245"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Male
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Female
                                        </span>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Summary by Course</h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                        <canvas id="myPieChart2" style="display: block; width: 288px; height: 245px;" class="chartjs-render-monitor" width="288" height="245"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        Colour scheme auto generated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Applicant's List</h1>
                   <br> <p class="mb-4"></p>
                 
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">Table of Applicants (both KUCCPS Placed and Self Placed)
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="dataTable_length">
                                                
                                            </div>
                                        </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="dataTable_filter" class="dataTables_filter">
                                            <form action="/search" method="get">
                                        @csrf
                                            <label>Search:
                                                <input type="text" class="form-control" placeholder="Search Applicants " name="search"></label>
                                               
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
              <th>Applied on</th>
              <th>Form Generated</th>
              <th>Contact</th>
              <th>Edit</th>
            </thead>
            <tbody>
            @foreach ($admission as $admi) 
              <tr>
             
                <td>{{ $admi->Adm }} </td>
                <td>{{ $admi->StudentName }} </td>
                <td>{{ $admi->Course }} </td>
                <td>{{ $admi->created_at }} </td>
                <td>@if ($admi->FormGenerated=='1')<a type="button" href="#" class="btn btn-info btn-circle">
                                    <i class="fa fa-check"></i>
                                    </a>@else
                                        <a type="button" href="#" class="btn btn-danger btn-circle">
                                    <i class="fa fa-times "></i>
                                    </a>
                                        @endif</td>
                <td>
                    @if ($admi->Contacted=='1')
                        <a type="button" href="#" class="btn btn-circle"  data-target="#Modal-contact-{{ $admi->id }}" data-toggle="modal" ><i class="fa fa-phone" style="font-size:32px; color:blue"></i></a>
                    @else
                        <a type="button" href="#" class="btn btn-circle"  data-target="#Modal-contact-{{ $admi->id }}" data-toggle="modal" ><i class="fa fa-phone" style="font-size:32px; color:red"></i></a>
                    @endif
                       
                        <div class="modal fade" id="Modal-contact-{{ $admi->id }}" role="dialog">
                                <div class="modal-dialog">
                                    
                                   
                                    <div class="modal-content">
                                                <div class="modal-header"><h4 class="modal-title">{{ $admi->Adm }}</h4>
                                                    <a type="button" href="#" class="btn btn-danger btn-circle" data-dismiss="modal">
                                                    <i class="fas fa-power-off"></i>
                                                     </a>
                                                </div>
                                        <div class="modal-body">                                          
                                             <h4>Phone Number: {{ $admi->Phone }}</h4>
                                             <h4>Registered On: {{ $admi->created_at }}
                                             <form method="post" action="{{ route('admission.update', $admi->id) }}">
                                                @method('PATCH')
                                                @csrf
                                                <input type="hidden" class ="form-control" name="Adm" value="{{ $admi->Adm }}" />
                                                <input type="hidden" class="form-control" name="contacted" value="1" />
                                                <input type ="hidden" class="form-control" name="formgenerated" value="{{ $admi->FormGenerated }}" />
                                                <input type="hidden" class="form-control" name ="nopdf" value="1"/>
                                                <Button type="submit" name="previous" class="btn btn-success">Confirm Contacted</Button> 
    
                                             </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        
                </td>
                        
                <td>
                    <a type="button" href="#" class="btn btn-circle"  data-target="#Modal-{{ $admi->id }}" data-toggle="modal" ><i class="fa fa-cogs" style="font-size:32px; color:red"></i></a>

                    <!-- Modal -->
                            <div class="modal fade" id="Modal-{{ $admi->id }}" role="dialog">
                                <div class="modal-dialog">
                                
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header"><h4 class="modal-title">{{ $admi->Adm }}</h4>
                                   <!-- <button  class="close" >&times;</button> -->
                                    <a type="button" href="#" class="btn btn-danger btn-circle" data-dismiss="modal">
                                    <i class="fas fa-power-off"></i>
                                    </a>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <form method="post" action="{{ route('admission.update', $admi->id) }}">
                                        @method('PATCH')
                                        @csrf
                                            <input type="hidden" class="form-control" name="indexno" value="{{ $admi->IndexNumber }}" />
                                            <input type="hidden" class="form-control" name="feyear" value="{{ $admi->Year }}" />
                                            <input type="hidden" class="form-control" name="level" value="{{ $admi->Level }}" />
                                            <input type="hidden" class="form-control" name="adm" value="{{ $admi->Adm }}" readonly /> 
                                            Full Name
                                            <input type="text" class="form-control" name="fullname" value="{{ $admi->StudentName }}" readonly /> <br>
                                            Course
                                            <input type="text" class="form-control" name="course" value="{{ $admi->Course }}" readonly /> <br>
                                            <input type ="hidden" class="form-control" name="formgenerated" value="1" />
                                            <input type ="hidden" class="form-control" name="contacted" value="{{ $admi->Contacted }} " readonly/>
                                            <input type="hidden" class="form-control" name ="nopdf" value="0"/>

                                            @if(($admi->Email)==" ")
                                                <br>
                                                Phone Number
                                                <input type="number" class="form-control" name="mobile" value="0722000000" /><br>
                                                Email
                                                <input type="email" class="form-control" name="email" value="info@example.com" /><br>
                                                Address
                                                <input type="text" class="form-control" name="address" value="P.O. Box 0 " />

                                            @else
                                                <input type="hidden" class="form-control" name="mobile" value="{{ $admi->Phone }}" />
                                                <input type="hidden" class="form-control" name="email" value="{{ $admi->Email }}" />
                                                <input type="hidden" class="form-control" name="address" value="{{ $admi->Address }}" />
                                                
                                                                                               
                                            @endif
                                        
                                        <br>
                                        <Button type="submit" name="previous" class="btn btn-success">Generate Admission Form</Button> 
                                        </form>

                                    </div>
                                </div>
                                
                                </div>
                            </div>
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
            @section('script')
         
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
 <script>
    // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var cty=document.getElementById("myPieChart1");
var ctz=document.getElementById("myPieChart2");

var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["KUCCPS Placed", "Self Placed"],
    datasets: [{
      data: [{{ $userCount-$walkIns}}, {{ $walkIns }}],
      backgroundColor: ['#4e73df', '#1cc88a'],
      hoverBackgroundColor: ['#2e59d9', '#17a673'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

var myPieChart1 = new Chart(cty, {
  type: 'doughnut',
  data: {
    labels: ["Male", "Female"],
    datasets: [{
      data: [{{ $userCount-$femaleApplicants}}, {{ $femaleApplicants }}],
      backgroundColor: ['#4e73df', '#1cc88a'],
      hoverBackgroundColor: ['#2e59d9', '#17a673'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

var courseData=JSON.parse(JSON.stringify(<?php echo $courseNumbers ?> ));
courseData.pop();
    let courseLabels = [];
    let numbers = [];
    var chartcolours = [];

    try {
        courseData.map((item) => {
        courseLabels.push(item[0]);
        numbers.push(item[1]);
        chartcolours.push("#"+Math.floor(Math.random()*16777215).toString(16));
        });
    } catch (error) {
        console.log(error);
    }
    courseLabels.shift();
    numbers.shift();
    chartcolours.shift();



console.log(chartcolours);

var myPieChart2 = new Chart(ctz, {
  type: 'polarArea',
  data: {
    labels:courseLabels,
    datasets: [{
      data:numbers,
      backgroundColor: chartcolours,
     hoverBackgroundColor:chartcolours,
     hoverBorderColor: chartcolours,
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 1,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      footerFontSize:8,

    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
 </script>
 

            @endsection