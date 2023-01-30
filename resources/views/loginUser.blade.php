<!doctype html>
<html lang="en">
  <head>
  	<title>Joy Water</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/loginn/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					{{-- <h2 class="heading-section">Joy Water</h2> --}}
				</div>
			</div>
            {{-- {{URL::asset("storage/image/".$activitydata->image1)}} --}}
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap border border-primary">
						<a href="{{route('user.index')}}" class="logo d-flex justify-content-center fw-5 mt-5 "  style="color: black !important; font-size=10rem !important;"><h1  class="border border-primary rounded-pill p-2" style="color: #04448C !important;font-size=10rem !important;">Joy<span style="color: #FFC11A !important;">Water</span></h1></a>
						{{-- <div class="img" style="background-image: url(/loginn/images/bg-1.jpg);"></div> --}}
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="{{route('user.login.check')}}" method="post" class="signin-form">
                                @method('GET')

                                @csrf
			      		<div class="form-group mt-3">
			      			<input type="email" class="form-control" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email')}}">
			      			<label class="form-control-placeholder" for="">Email</label>
                              @error('email')
                              <div class="alert alert-danger">{{ $message }}</div>
                             @enderror

			      		</div>
						<br>
                        {{-- _______________________________________ --}}
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control"name="password" class="@error('password') is-invalid @enderror" value="{{ old('password')}}">
		              <label class="form-control-placeholder" for="password">Password</label> 
                      
   @error('password')
   <div class="alert alert-danger">{{ $message }}</div>
  @enderror
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
                    {{-- _________________submit______________________ --}}
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a href="{{route('user.signup.index')}}">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="/loginn/js/jquery.min.js"></script>
  <script src="/loginn/js/popper.js"></script>
  <script src="/loginn/js/bootstrap.min.js"></script>
  <script src="/loginn/js/main.js"></script>


	</body>
</html>

