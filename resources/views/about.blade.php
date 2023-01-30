@extends('userLayout.master')


@section('title') 
About Us
@endsection


@section('css')  
    <!-- Favicon -->
     <link href="img/favicon.ico" rel="icon">

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
 
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 
     <!-- Libraries Stylesheet -->
     <link href="/lib/animate/animate.min.css" rel="stylesheet">
     <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
 
     <!-- Customized Bootstrap Stylesheet -->
     <link href="/UserSide/cssAbout/bootstrap.min.css" rel="stylesheet">
 
     <!-- Template Stylesheet -->
     <link href="/UserSide/cssAbout/style.css" rel="stylesheet">
     <style>
        .hero-header{
background: linear-gradient(to bottom,#00336d,#00336d00,#ffffff9d ,#ffffff)  , url(/images/showMyReserv1.jpg);
   background-position: center center;
   background-repeat: no-repeat;
   background-size: cover;
       }

       .bg-dark{
         background-image: linear-gradient(180deg, #0e2a47,#04458f) !important;
       }
   </style>

@endsection


@section('showCase')  
<div class="container-fluid position-relative p-0">
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <section class="contact" id="contact">
                        <h1   style="margin-top:30px;"class="heading">
                            <span>A</span>
                            <span>b</span>
                            <span>o</span>
                            <span>u</span>
                            <span>t</span>
                            <span class="space"></span>

                            {{-- <span>&nbsp;</span> --}}
                            <span>U</span>
                            <span>s</span>

                        </h1>                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

@section('contant') 

{{-- _____________________________________________________________ --}}
    <!-- About Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    {{-- <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div> --}}
                    
                </div>
                {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Tourist</span></h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div> --}}
            </div>
        </div>
    {{-- </div> --}} 
      
    {{-- _____________new about_________- --}}

      <div style="margin-top: .8%" class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        {{-- <h6 class="section-title text-start text-primary text-uppercase">About Us</h6> --}}
                        {{-- <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Hotelier</span></h1> --}}
                        {{-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> --}}
                        <div class="row g-3 pb-4">
                            {{-- <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div> --}}
                            <div  style="margin-top: -40px" class="col-lg-10 wow fadeInUp" data-wow-delay="0.3s ">
                                <h6 style="font-size:25px !important" class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                                <h1  style=" padding-top:30px font-size:30px !important"class="mb-4">Welcome to <span class="text-primary">Tourist</span></h1>
                                <p style="font-size:15px !important" class="mb-4">the standard state is most often defined as pure water at the same temperature. Using this particular definition, pure distilled water has a water activity of exactly one.</p>
                                <p style="font-size:15px !important"class="mb-4"></p>
                                <div class="row gy-2 gx-4 mb-4">
                                    <div class="col-sm-10">
                                        <p style="font-size:16px !important" class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p style="font-size:16px !important" class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p style="font-size:16px !important" class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p  style="font-size:16px !important" class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Safty</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p style="font-size:16px !important" class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>sunshin</p>
                                    </div>
                                    {{-- <div class="col-sm-6">
                                        <p style="font-size:18px !important" class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                                    </div> --}}
                                </div>
                                {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
                            </div>
                            {{-- <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class=" rounded p-1">
                                    <div class=" p-4">
                                        {{-- <i class="fa fa-users fa-2x text-primary mb-2"></i> --}}
                                        {{-- <h2 class="mb-1" data-toggle="counter-up">1234</h2> --}}
                                        {{-- <p class="mb-0">Clients</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a> --}}
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="../images/about1_n.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="../images/about2.jpeg">
                            </div>
                            <div class="col-6 text-end">
                                <img style=" width: 70% !important;" class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="../images/about4.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="../images/1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
        <!-- About End -->


        
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container ">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Travel Guide</h6>
                <h1  style="font-size:30px !important" class="mb-5">Meet Our Guide</h1>
            </div>
            <div class="row g-5 justify-content-center" >
                <div class="col-lg-3 col-md-4 wow fadeInUp m-5 " data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden " style="height:300px;">
                            <img class="img-fluid rounded" src="../images/israa.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5  style="font-size:20px;"class="mb-0">first & last Name</h5>
                            <small>UI UX Designer </small>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 wow fadeInUp m-5" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden" style="height:300px;">
                            <img class="img-fluid rounded" src="../images/shimaa.jpg" alt="" height="300px" >
                        </div>
                        <div class="text-center p-4">
                            <h5 style="font-size:20px;" class="mb-0">first & last Name</h5>
                            <small>UI UX Designer </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp m-5" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden" style="height:300px;">
                            <img class="img-fluid rounded" src="../images/people2.jpg" alt="" height="300px" >
                        </div>
                        <div class="text-center p-4">
                            <h5 style="font-size:20px;" class="mb-0">first & last Name</h5>
                            <small>UI UX Designer </small>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 wow fadeInUp m-5" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden"style="height:300px;">
                            <img class="img-fluid rounded" src="../images/ahmad.jpeg" alt="" >
                        </div>
                        <div class="text-center p-4">
                            <h5 style="font-size:20px;" class="mb-0">first & last Name</h5>
                            <small>Programmer</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp m-5" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden" style="height:300px;">
                            <img class="img-fluid rounded" src="../img/team-1.jpg" alt="" >
                        </div>
                        <div class="text-center p-4">
                            <h5  style="font-size:20px;" class="mb-0">first & last Name</h5>
                            <small>scrum master</small>
                        </div>
                    </div>
                </div>


            </div>
            {{-- ______________________________ --}}

           

        </div>
    </div> 
@endsection


@section('script')
    {{-- <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="UserSide/js/main.js"></script> --}}
@endsection
