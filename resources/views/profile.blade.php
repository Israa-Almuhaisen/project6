@extends('userLayout.master')
@section('title')
    profile
@endsection
@section('css')
   {{-- <link href="UserSide/cssprofile/profile.css" rel="stylesheet">   --}}
  <link href="UserSide/cssProfil/cssprofile/style.css" rel="stylesheet"> 
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
                            <span>P</span>
                            <span>r</span>
                            <span>o</span>
                            <span>f</span>
                            <span>i</span>
                            <span>l</span>
                            <span>e</span>

                        </h1>                
                      </div>
            </div>
        </div>
    </div>
</div> 
@endsection

@section('contant')

<div id="home">
<div style="margin-bottom:15rem !important;  margin-top:-5rem !important;" class="container profile">
    <div class="main-body">
          <div class="row gutters-sm align-items-center justify-content-center">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">

                    <img src="/images/people1.jpeg" alt="{{auth()->user()->name}}"  width="150">
                
                        
          
                    <div class="mt-3">
                      {{-- <h4> {{auth()->user()->name}} </h4> --}}
                      {{-- <h4> aaa </h4>
                      <p class="text-secondary mb-1"> Full Stack Developer </p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> --}}
                      <h4> </h4>
                      <p class="text-secondary mb-1 mb-0 fw-bold c"> {{auth()->user()->name}} </p>
                      {{-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> --}}
                    </div>
                  </div>
                </div>
                
            </div>
            </div>
            <div  class="col-md-6">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 fw-bold fs-2" >Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary fs-3">
                      {{auth()->user()->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 fw-bold fs-2">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary fs-3">
                      {{auth()->user()->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 fw-bold fs-2">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary fs-3">
                      {{auth()->user()->phone}}
                    </div>
                  </div>
                  {{-- <hr> --}}
                  {{-- <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Bay Area, San Francisco, CA
                    </div>
                  </div>--}}
                  <hr> 
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-primary " target="__blank"  href="{{route('user.profile.edit',auth()->user()->id)}}">Edit</a>
                      <a  style="padding-left:30px !important;" class="btn btn-primary " target="__blank"  href="{{route('user.myreserve.index')}}">My Reservation</a>
                    </div>                                         
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
</div>

@endsection