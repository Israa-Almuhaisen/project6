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
			      			<h3 class="mb-4">Sign Up</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="{{route('user.signup.store')}}" method="post" class="signin-form" enctype="multipart/form-data">
                                {{-- @method('GET') --}}

                                @csrf
                                {{-- _______________________________________ --}}
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" name="name" value="{{ old('name')}}"  class="@error('name') is-invalid @enderror">
			      			<label class="form-control-placeholder" for="">Name</label>
                              @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

			      		</div>
						  <br>

                        {{-- ___________________email____________________ --}}
		            <div class="form-group">
		              <input type="email" class="form-control" name="email" value="{{ old('email')}}"  class="@error('email') is-invalid @enderror">
		              <label class="form-control-placeholder" for="">Email</label> 
                      
                      @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
		            </div>
					<br>

                    {{-- ____________________number___________________ --}}
                    <div class="form-group">
                        <input type="number" name="phone" class="form-control" value="{{ old('phone')}}" class="@error('phone') is-invalid @enderror">
                        <label class="form-control-placeholder" for="">Number</label> 
                        
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
<br>
                    {{-- ________________passwrd_______________________ --}}
                    <div class="form-group">
                        <input id="password-field" type="password" class="form-control" name="password"value="{{ old('password')}}" class="@error('password') is-invalid @enderror">
                        <label class="form-control-placeholder" for="password">Password</label> 
                        
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                      </div>


                    {{-- _______________________________________ --}}
					<div class="form-group">
						<label for="exampleInputFile">Image</label>
						<div class="input-group">
						  <div class="custom-file">
							<input type="file" class="custom-file-input"  name="image" class="@error('image') is-invalid @enderror">
	  
							<label class="custom-file-label" for="exampleInputFile">Choose file</label>
						  </div>
		
					  </div>
					  @error('image')
					  <div class="alert alert-danger">{{ $message }}</div>
					 @enderror
					  </div>
                    {{-- _________________submit______________________ --}}

		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Register</button>
		            </div>
		            <div class="form-group d-md-flex">
		            
		          </form>
				  
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

