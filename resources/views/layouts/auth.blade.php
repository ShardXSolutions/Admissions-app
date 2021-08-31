<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   @yield('title')
   

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/core.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cds.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Lato') }}" rel="stylesheet">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900') }}" rel="stylesheet">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Muli') }}" rel="stylesheet">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="{{ asset('device-mockups/device-mockups.min.css') }}">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/new-age.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">
       <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('img/vlogo.png')}}" class="vlogo" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('http://admissions.co.ke/#KUCCPS') }}">KUCCPS Placed Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('http://admissions.co.ke/newApplicant') }}">New Applicants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('http://admissions.co.ke/#') }}">Admin Panel</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead">
  </header>
    @yield('content')
 <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/new-age.min.js') }}"></script>
 <script src="{{ asset('js/core.js') }}"></script>
 <script src="{{ asset('js/form.js') }}"></script>
</body>

</html>