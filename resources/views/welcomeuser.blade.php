@extends('userLayout.master')
@section('title')
    home
@endsection
@section('css')
    
@endsection

@section('contant')
<section class="home" id="home">

    <div class="content">

        <h3> Joy Water </h3>

        <p style="line-height: 35px">One of the scariest things ever is flushing a toilet & seeing <br> the water coming up instead of going down.</p>

        <a href="{{route('user.show')}}" class="btn"> Book Now </a>

    </div>

    <div class="controls">
        <span data-src="images/vvv.mp4"></span>
        
    </div>

    <div class="video-container">
        <video src="images/vvv.mp4"  loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->
<!-- packages section starts  -->

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











<!-- packages section ends -->


<!-- services section starts  -->

{{-- <section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>

    </div>

</section> --}}

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">

        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>

    </h1>

    <div class="box-container">

        <div class="box">
            <img src="/images/gallery1.jpg" alt="">
        </div>
        <div class="box">
            <img src="/images/GALLERYY8.webp" alt="">
        </div>
        <div class="box">
            <img src="/images/GALLERY66.jpg" alt="">
        </div>
        <div class="box">
            <img src="/images/gallery4.jpg" alt="">
        </div>
        <div class="box">
            <img src="/images/gallery5.jpg" alt="">
        </div>
        <div class="box">
            <img src="/images/GALERY343.jpg" alt="">
        </div>
        <div class="box">
            <img src="/images/GALLERYY7.jpg" alt="">
        </div>
        <div class="box">
            <img src="/images/FAMILY34342.webp" alt="">
        </div>
        <div class="box">
            <img src="/images/Conflict-resolution-family-kids.webp" alt="">
        </div>
   
    </div>
</section>

<!-- gallery section ends -->

<!-- review section starts  -->


<!-- review section ends -->



<!-- brand section  -->
{{-- <section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section> --}}
@endsection