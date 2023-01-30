<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('userLayout.head')
</head>
<body>
    
<!-- header section starts  -->

@include('userLayout.navbar')

<!-- header section ends -->
{{-- showCase --}}
@yield('showCase')

<!-- home section starts  -->

@yield('contant')
<!-- home section starts  -->

<!-- footer section  -->
@include('userLayout.footer')

</body>
</html>