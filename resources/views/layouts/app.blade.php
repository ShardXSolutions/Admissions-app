<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', ' Admission Portal') }}</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Lato') }}" rel="stylesheet">
   <link href="{{ asset('css/core.css') }}" rel="stylesheet">

  <link href="{{ asset('https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900') }}" rel="stylesheet">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Muli') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/new-age.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">
      
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
     <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('img/vlogo.png')}}" class="vlogo"></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#KUCCPS">KUCCPS Placed Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#newApplication">New Applicants</a>
          </li>
        
            @if(Auth::check())
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('/admin') }}">Admin Panel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" }} >Logout</a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          @else
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('/login') }}">login</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
      
   @if(session()->has('message'))
   <br>

    <section class=" text-center" id="register">
    <div class="container">
      <div class="alert alert-danger">
    
                {{ session()->get('message') }} 
              
<br><br>
           
                  <a href="{{ url('/') }}" class="btn bg-danger btn-outline btn-xl js-scroll-trigger">OK</a>
               
       
    </div>
  </div>
</section>
  @else
  

            @yield('content')
             <footer>
    <div class="container">
      <p> &copy; <a href="http://www.shardx.co.ke" target="_blank" >ShardX Systems</a> 2021. All Rights Reserved.</p>
     
    </div>
  </footer>
            
  @endif


 

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/new-age.min.js') }}"></script>

</body>

</html>