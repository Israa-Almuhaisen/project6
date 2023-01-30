@extends('userLayout.master')
@section('title')
    home
@endsection
@section('css')
    
@endsection

@section('contant')


<!-- home section ends -->
<!-- packages section starts  -->


<div class="searchBtn">
    <input type="text" name="search" id="search">
    <button> Search </button>
</div>

<section class="packages" id="packages">

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

    <div class="box-container">


        @foreach ($results as $activitydata)
            
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