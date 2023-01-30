<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span style="color: #04448C ; background-color:aliceblue;border-radius: 10rem; padding-left:.9rem; padding-right:.7rem;">Joy</span><span style="color: #FFC11A !important;"> Water</span></a>

    <nav class="navbar">
        <a href="{{route('user.index')}}">home</a>
        <a href="{{route('user.show')}}">Activity</a>
        <a href="{{route('user.about')}}">about</a>
        <a href="{{route('user.contact')}}">contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
    <div style="
    display: inline-block;
    font-size: 1.7rem;">@if(!Auth::user())
        <a href="{{route('user.login')}}" class="nav-item nav-link">login</a>
        @endif
        @if(Auth::user())
        <a href="{{route('user.login.destroy')}}" class="nav-item nav-link">logout</a>
        @endif</div>
        <div style="
        display: inline-block;
        font-size: 1.7rem; margin-left:13px">
             @if(!Auth::user())
            <a href="{{route('user.signup.index')}}" class="">Register</a>
            @endif
            @if(Auth::user())
            <a href="{{route('user.profile.index')}}" class="">Account</a>
            @endif
        </div>
        {{-- <i class="fas fa-user" id="login-btn"></i> --}}
    </div>

    {{-- <div class="dropdown row">
       
            <i class="fas fa-user " style=" font-size:3rem; color:white;" data-bs-toggle="dropdown" aria-expanded="false"></i>
       
        <ul class="dropdown-menu "  style="color:black">
          <li><a class="dropdown-item btn p-1" style="color:black !important" href="#">Register</a></li>
          <li><a class="dropdown-item btn p-1" style="color:black !important" href="#">LogIn</a></li>
        </ul>
      </div> --}}

    {{-- <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form> --}}
    <form action="{{ route('user.search') }}" method="post" class="search-bar-container">

        @csrf
        <input type="text" name="search" id="search-bar" placeholder="search here...">

       {{-- <button type="submit"><i style="font-size: 30px; margin=10px" class="fas fa-search"></li></button> --}}
    </form>
</header>

<!-- login form container  -->
{{-- <div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="enter your password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    </form>

</div> --}}