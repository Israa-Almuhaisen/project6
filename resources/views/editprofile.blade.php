@extends('userLayout.master')
@section('title')
    profile
@endsection
@section('css')
<link href="UserSide/cssprofile/profile.css" rel="stylesheet">
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
<div  id="home">

<div class="container">
    <div class="main-body ">
        <div style="margin-bottom:100px !important;" class="row align-items-center justify-content-center">
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle p-1 bg-primary"width="155px" >
                            <div class="mt-3">
                                <h4 class="fw-bold fs-2" >{{auth()->user()->name}}</h4>
                                {{-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> --}}
                                {{-- <button class="btn btn-primary">Follow</button> --}}
                                {{-- <button class="btn btn-outline-primary">Message</button> --}}
                            </div>
                        </div>
                        {{-- <hr class="my-4"> --}}

                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="card">
                    <div class="card-body">



                    <form action="{{route('user.profile.update',auth()->user()->id)}}" method="POST">
                        @method('PUT')

                        @csrf
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0 fw-bold fs-2">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="name" class="form-control col-sm-9 text-secondary fs-3" value="{{auth()->user()->name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0 fw-bold fs-2">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="email" class="form-control col-sm-9 text-secondary fs-3"  value="{{auth()->user()->email}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0 fw-bold fs-2">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="phone" class="form-control col-sm-9 text-secondary fs-3"  value="{{auth()->user()->phone}}">
                            </div>
                        </div>
                       
                     
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <input type="submit" class="btn btn-primary px-4" value="Save Changes">
                            </div>
                        </div>



                    </form>
                  </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            {{-- <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Project Status</h5>
                                <p>Web Design</p>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>Website Markup</p>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>One Page</p>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>Mobile Template</p>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>Backend API</p>
                                <div class="progress" style="height: 5px">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection