@extends('userLayout.master')
@section('title')
    contact
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
            background: linear-gradient(to bottom,#00336d,#00336d00,#ffffff9d ,#ffffff)  , url(/images/showMyReserv1.jpg) !important;
     background-position: center center !important;
     background-repeat: no-repeat !important;
     background-size: cover !important;
        }
     
        .bg-dark{
          background-image: linear-gradient(180deg, #0e2a47,#04458f) !important;
        }
     </style>
     @endsection


{{-- ============= showCase =============== --}}

@section('showCase')  
<div class="container-fluid position-relative p-0">
    <div  class="container-fluid py-5 mb-5 hero-header ">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <section class="contact" id="contact">
                        <h1 class="heading">
                            <span>c</span>
                            <span>o</span>
                            <span>n</span>
                            <span>t</span>
                            <span>a</span>
                            <span>c</span>
                            <span>t</span>
                        <span class="space"></span>

                            {{-- <span>&nbsp;</span> --}}
                            <span>u</span>
                            <span>s</span>
                        </h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{--============= contant ===============--}}
@section('contant')

<section class="contact" id="contact">
     {{-- <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>    --}}



{{-- <div class="row">

    <div  style="margin-top:7%; margin-bottom:7%;"   class="col-md-8">
        <h2 style="font-size: 3rem"; class="mt0">Get In Touch</h2>
        <ul class="probootstrap-contact-info">
            <li><i style="font-size: 2.2rem"; class="icon-location2"></i> <span style="font-size: 2.2rem";>Aqaba,Jordan</span>
            <i style="font-size: 2.2rem"; class="icon-mail"></i><span style="font-size: 2.2rem";>info@fieldsCorner.com</span>
            <i style="font-size: 2.2rem"; class="icon-phone2"></i><span style="font-size: 2.2rem">+962 03247814<span style="font-size: 2.2rem";></li>
        </ul> --}}
        {{-- ______________________________________________ --}}
        <div class="contact_body">
            <h2> Get In Touch</h2>
                    <div class="line"><div></div> <div></div> <div></div></div>
                <div class="contact_info">
                    <div class="info_box"><span><i class="fa-solid fa-phone"></i></span><span> Phone No.</span><span class="text"> +962 777111777</span>
                   </div>
                    <div class="info_box">
                        <span><i class="fa-regular fa-envelope"></i></span>
                        <span>  Email </span>
                        <span class="text"> watergame@gmail.com</span>
                    </div>
                    <div class="info_box">
                        <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                        <span> Address</span>
                        <span class="text"> Aqaba, Jordan </span>
                    </div>
                    <div class="info_box">
                        <span><i class="fa-sharp fa-solid fa-inbox"></i></span>
                        <span> mail</span>
                        <span class="text"> 27052,Aqaba</span>
                {{-- <div class="contact_form">
                    <form action="" method="post">
                        <div>
                        <input type="text"  class="form_control" name="fname" id="fname" placeholder="First Name" required>
                        <input type="text"  class="form_control" name="lname" id="lname" placeholder="Last Name" required>
                    </div>
        
                    <div>
                        <input type="email" class="form_control" name="email" id="email" placeholder="Email" required>
                        <input type="text" class="form_control" name="phone" id="phone" placeholder="Phone" required>
                    </div>
                    <textarea class="form_control" name="message" id="message" cols="30" rows="5" placeholder="Message"></textarea>
                    <input type="submit" class="send_btn" value="send message">
                    </form> --}}
                    {{-- <div>
                        <img src="../img/ContactUs/ContactBody.png" alt="contact us">
                    </div> --}}
                {{-- </div> --}}
            </div>



        {{-- <h2>Feedback</h2> --}}
        {{-- <p style="font-size: 2rem";>At fields corner Stadium we welcome your feedback at all times. Your comments and suggestions are greatly appreciated and help us to continually improve our operation. All comments received will be treated in confidence as per our. </p> --}}
    </div>

    {{-- <div  class="col-md-10 image">
        <img src="images/about-us.jpg" alt="">
    </div> --}}
        
</div>


{{-- ______________________________ --}}
<hr>
<div  class="row">
    <div style="margin-top:5%; margin-bottom:5%;" class="col-md-7 image">
        <img src="../images/about4.jpg" alt="" height="350px width=350px">
    </div>
    <div style="margin-top:5%; margin-bottom:5%;" class="row col-md-8">
        <form  method="POST" action="{{ route('contact.store')}}">
            @method('GET')
            @csrf
            
            <div class="inputBox">
                <input type="text" name="name" placeholder="name">
                <input type="email" name="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" name="phoneNumber" placeholder="number">
                <input type="text" name="subject" placeholder="subject">
            </div>
            <textarea placeholder="message" name="message" id="" cols="30" rows="10"></textarea>
            <input name="send" type="submit" class="send_btn" value="send message">
        </form>
    </div>
</div>


</section>

@endsection

