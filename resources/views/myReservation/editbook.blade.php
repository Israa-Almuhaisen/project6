@extends('userLayout.master')
@section('title')
   book
@endsection
@section('css')
<!-- Customized Bootstrap Stylesheet -->
<link href="/UserSide/cssBook/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="/UserSide/cssBook/style.css" rel="stylesheet">
@endsection

{{--============= showCase ===============--}}
@section('showCase')
<div class="container-fluid position-relative p-0">
    <div class="container-fluid  py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="heading">
                        <span>b</span>
                        <span>o</span>
                        <span>o</span>
                        <span>k</span>
                        <span class="space"></span>
                        <span>n</span>
                        <span>o</span>
                        <span>w</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
{{--============= contant ===============--}}
@section('contant')
<!-- contact section starts  -->
{{-- {{dd($key['data']['id'])}} --}}

<section class="book" id="book">
{{-- @foreach ($booking as $item)
     {{dd($item->id)}}
@endforeach --}}
   
    <div class="row">

        <div class="image">
            {{-- url(../images/rejester.jpg)
            {{URL::asset("images/Waterscooter.gif")}} --}}
            <img src="{{URL::asset("images/Waterscooter.gif")}}" alt="">
        </div>

        <form action="{{Route('user.myreserve.update',$value['id'])}}" method="POST">
            @method('GET')
            @csrf

            <div class="inputBox">
                <h3>First Name</h3>
                <input type="text" class="form-control bg-transparent" id="name" placeholder="First Name" name="first_name" value="{{ old('first_name')}}" class="@error('first_name') is-invalid @enderror">
                <input type="hidden" class="form-control bg-transparent" id="name" placeholder="First Name" name="user_id" value="{{ Auth::user()->id }}">
                @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="inputBox">


                <h3>Last Name</h3>
                <input type="text" class="form-control bg-transparent" id="name" placeholder="Last Name" name="last_name" value="{{ old('last_name')}}" class="@error('last_name') is-invalid @enderror">
                @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="inputBox">


                <h3>Phone Number</h3>
                <input type="text" class="form-control bg-transparent" id="name" placeholder="Phone Number" name="phoneNumber" value="{{ old('phoneNumber')}}" class="@error('phoneNumber') is-invalid @enderror">
                @error('phoneNumber')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror

            </div>
            <div class="inputBox">


                <h3>Number of guest</h3>
                <input type="number" class="form-control bg-transparent" id="name" placeholder="Guest Number" min="1" value="1" name="guest_number">



            </div>
            <div class="inputBox">


                <h3>Your Email</h3>
                <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email" name="email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror


                
            </div>
            {{-- ________________________ --}}
            <div class="inputBox">


                <h3>Hour</h3>
                <select name="time" id="cars">
                    <option value="10">10:00:am</option>
                    <option value="11">11:00:am</option>
                    <option value="12">12:00:am</option>
                    <option value="13">1:00:pm</option>
                    <option value="14">2:00:pm</option>
                    <option value="15">3:00:pm</option>
                    <option value="16">4:00:pm</option>
                    <option value="13">5:00:pm</option>
                  </select>

            </div>
            {{-- _____________________________ --}}

            <div class="inputBox">


                <h3>Date</h3>
                <input type="date" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Date" data-target="#date3" data-toggle="datetimepicker" name="res_date" value="{{ old('res_date')}}" class="@error('res_date') is-invalid @enderror" />
                @error('res_date')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror


                
            </div>
            <input type="submit" class="btn btn-outline-light w-100 py-3" value="Book Now">
        </form>

    </div>

</section>


<!-- contact section ends -->

@endsection


