<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{  asset('css/sb-admin-2.min.css')  }}" rel="stylesheet">

</head>

<body class="bg-gradient-success">
    @if(session()->has('message'))
   
               
              
                <div class="container">

                    <!-- Outer Row -->
                    <div class="row justify-content-center">
            
                        <div class="col-xl-10 col-lg-12 col-md-9">
            
                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                    <!-- Nested Row within Card Body -->
                                    <div class="row">
                                        
              
                                    
                  
            
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-md-12">
                                                    <div>
                                                        <div><h1>Application Successful</h1></div>
                                        
                                                        <div class="card-body">
                                                            <hr>
                                                            <br>
                                                                     {{ session()->get('message') }} 
                                                            <br>
                                                            </div>
                                                            <div class="form-group row mb-0">
                                                                <div class="col-md-8 offset-md-4">
                                                                    <a href="/" class="btn btn-primary">Finish and Close</a>
                                                                </div>
                                                            </div>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                           
               
               
                                   
                                    </div>
                                </div>
                            </div>
            
                        </div>
            
                    </div>
            
                </div>
           
   
    @else
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
  
                        @yield('content')   
                       
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
 @endif 
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>