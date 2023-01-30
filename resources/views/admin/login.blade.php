
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.png">
    <title>Checker</title>
    <script src="https://kit.fontawesome.com/73358cb070.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/login.css')}}">
    <style>
   
</style>
</head>

<body>
    <x-auth-session-status :status="session('status')" />

{{-- {{dd('login')}} --}}
    <a href="index.html"><img  id="logoLogin" src="logo.png" alt="logo"></a>

<form method="POST" action="{{ route('login') }}" id="loginForm">
    @csrf
        <h2>login</h2>
    <div class="qqq">
        {{-- <x-input-label for="email" :value="__('Email')" /> --}}
        <input id="inputLoginText" placeholder="Your email"  type="email" name="email" :value="old('email')" required autofocus>

     <p id="p1"> <x-input-error :messages="$errors->get('email')" /></p>   
    </div>
    
    <div class="qqq">
        {{-- <x-input-label for="password" :value="__('Password')" /> --}}

        <input id="inputLoginPassword" type="password" placeholder="Enter password"  name="password" required autocomplete="current-password">
        
    <p id="p2"><x-input-error :messages="$errors->get('password')" /></p>
    </div>

    <div> 
        @if (Route::has('password.request'))
        <a  href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
    @endif

    </div>
    
    <x-primary-button id="inputButtonLogin">
        {{ __('Log in') }}
    </x-primary-button>
        {{-- <input  id="inputButtonLogin" type="button" value="login" onclick="check()"> --}}
</form>
   

</body>
</html>