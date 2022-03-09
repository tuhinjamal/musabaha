@php
$count=1;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <title>H.T Communication Ltd</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



<link rel="icon" type="image/png" href="{{ asset('frontend/assets/favicon.ico') }}">
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('telements/css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>




<nav class="navbar navbar-expand-sm navbar-dark bg-default fixed-top">
  <div class="container-fluid ">
   
    <a class=" nav-link" href="#">
        <img src="{{url('upload/logo_images/'.$logo->image)}}" alt="Logo" style="width:40px;" class="rounded-pill"> 
    </a>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    
                @if (Route::has('login'))
                    @auth
                <a class="btn btn-warning mx-1 text-dark nav-link" href="{{ url('/home') }}">Home</a>
                    @else
                </li>
                <li class="nav-item">
                <a class="btn btn-warning mx-1 text-dark nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-warning mx-1 text-dark nav-link" href="#section2">About</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-warning mx-1 text-dark nav-link" href="#section3">Contact</a>
                </li>
            </ul>
            
            </div>
  </div>
  
        <ul class="nav justify-content-end">
            <li class="nav-item">
            <a class="btn btn-warning mx-1 text-dark nav-link" href="{{ route('login') }}">Login</a>
            </li>
        </ul>
        <ul class="nav justify-content-end">
            <li class="nav-item">
            @if (Route::has('register'))
            <a class="btn btn-warning text-dark nav-link " href="{{ route('register') }}">Register</a>
            @endif
            @endauth
            @endif
            </li>
        </ul>
    
</nav>




<!-- Carousel -->
 
<div id="demo" class="carousel slide" data-bs-ride="carousel" >

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner" >
   @foreach($sliders as $slider)
    <div class="carousel-item {{$count == '1' ? 'active':''}}" >
      <img src="{{url('upload/slider_images/'.$slider->image)}}" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="display-4">{{$slider->short_title}}</h2>
        <p class="lead">{{$slider->long_title}}</p>
     
      </div>
    </div>
        @php
    $count++
    @endphp
    @endforeach
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

 
</div>





<nav class="navbar navbar-expand-sm bg-dark navbar-success ">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#section1">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section2">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section3"> Contact</a>
      </li>
    </ul>
  </div>
</nav>




<div id="section1" class="container-fluid bg-secondary text-white" style="padding:100px 20px;">
  
  <div id="portfolio">
    
            <div class="container-fluid p-0 ">
                <div class="row g-0">
                   @foreach($portfolio as $port)
                    <div class="col-lg-4 col-sm-6 {{$count == '1' ? 'active':''}} ">
                        <a class="portfolio-box" href="{{url('upload/portfolio_images/'.$port->image)}}" title="Project Name">
                          
                        <img class="img-fluid" src="{{url('upload/portfolio_images/'.$port->image)}}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">{{$port->short_title}}</div>
                                <div class="project-name">{{$port->long_title}}</div>
                            </div>
                        </a>
                    </div>
                    
                     @endforeach
                  </div>    
            </div>
        
       
                   
  </div>
  
  
</div>




<div id="section2" class="container-fluid bg-secondary text-white" style="padding:100px 20px;">
@foreach($about as $abt)
  <h1>{{$abt->title}}</h1>
  <p>{{$abt->about}}</p>
  
@endforeach
</div>



<!-- Footer -->
@foreach($contact as $contact)
<footer class="bg-dark text-center text-white " id="section3">
  <!-- Grid container -->
  <div class="container p-4 ">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-success btn-floating m-1" href="#!" role="button"
        ><i class="fas fa-address-card"></i> Address</a>
    </section>
    <!-- Section: Text -->
    <section class="mb-4 text-success">
      <p>
        {{$contact->address}}
      </p>
    </section>
    <!-- Section: Social media -->

   <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-success">Contact Us</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a class="btn btn-outline-success btn-floating m-1" href="#!" role="button"
        ><i class="fas fa-address-card"></i></a>
        
            </li>
            <li>
              <a class="btn btn-outline-success btn-floating m-1" href="#!" role="button"
        ><i class="fas fa-phone"></i></a>
            </li>
            <li>
              <a class="btn btn-outline-success btn-floating m-1" href="#!" role="button"
        ><i class="fas fa-envelope-open-text"></i></a>
            </li>
            
          </ul>
        </div>
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
              <h5 class="text-uppercase text-success">Details</h5>

              <ul class="list-unstyled mb-0">
                <li>
                <a class="btn text-success btn-floating m-1" href="{{$contact->website}}" role="button"
            >{{$contact->website}} </a>
                </li>
                <li>
                  <a class="btn text-success btn-floating m-1" href="#!" role="button"
            >{{$contact->phone}}</a>
                </li>
                <li>
                <a class="btn text-success btn-floating m-1" href="#!" role="button"
            >{{$contact->email}} </a>
                </li>
            
              </ul>
        </div>
        <!--Grid column-->
</div>
</section>

   
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-success p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-success" href="https://www.facebook.com/tuhinjamal/">Tuhin Jamal</a>
  </div>
  <!-- Copyright -->
</footer>
@endforeach
<!-- Footer -->

</body>
</html>
