@extends('userLayout.master')
@section('title')
    home
@endsection
@section('css')
<link href="img/favicon.ico" rel="icon">       

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
<!-- Customized Bootstrap Stylesheet -->
<link href="/UserSide/cssAbout/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="/UserSide/cssAbout/style.css" rel="stylesheet">
<link href="/UserSide/csscontact/contact.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/ccf160e1e6.js" crossorigin="anonymous"></script>
<style>
   .hero-header{
background-image:  linear-gradient(to bottom,#00142d,#00336db0,#ffffffcf ,#ffffff)  , url(/images/bookNow.png) !important;
background-position: center center !important;
background-repeat: no-repeat !important;
background-size: cover !important;
   }

   .bg-dark{
     background-image: linear-gradient(180deg, #0e2a47,#04458f) !important;
   }
</style>
@endsection


{{--============= showCase ===============--}}
@section('showCase')
<div class="container-fluid position-relative p-0">
    <div class="container-fluid  py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="heading">
                        <span>A</span>
        <span>c</span>
        <span>t</span>
        <span>i</span>
        <span>v</span>
        <span>i</span>
        <span>t</span>
        <span>i</span>
        <span>e</span>
        <span>s</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('contant')


<!-- home section ends -->
<!-- packages section starts  -->

<section class="packages" id="packages">

    {{-- <h1 class="heading">
        <span>A</span>
        <span>c</span>
        <span>t</span>
        <span>i</span>
        <span>v</span>
        <span>i</span>
        <span>t</span>
        <span>i</span>
        <span>e</span>
        <span>s</span>
    </h1> --}}

    <div class="box-container">

        @foreach ($data as $activitydata)
            
        <div class="box">

          <a href="{{route('user.activity.details', $activitydata->id)}}">  <img src="{{URL::asset("storage/image/".$activitydata->image1)}}" alt=""></a>
            <div class="content">
                <h3> <i class="fa-solid fa-seal"></i> {{ $activitydata->name}}  </h3>
                <p> {{ $activitydata->short_description}} </p>
                {{-- <p> {{ $activitydata->long_description}} </p> --}}
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> {{ $activitydata->price}} JD </div>
                <a href="{{route('user.book', $activitydata->id)}}" class="btn"> Book Now </a>
            </div>

        </div>

        @endforeach



    </div>

</section>














@endsection