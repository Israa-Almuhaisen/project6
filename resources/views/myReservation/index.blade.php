@extends('userLayout.master')
@section('title')
   
@endsection
@section('css')
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/UserSide/cssBook/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/singleCSS/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/singleCSS/SINGLEmain.css">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
{{--  --}}

    <!-- Template Stylesheet -->
    <link href="/UserSide/cssBook/style.css" rel="stylesheet">
    <style>
         .hero-header{
            background: linear-gradient(to bottom,#00336d,#00336d00,#ffffff9d ,#ffffff)  , url(../images/showMyReserv1.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
        }

        .bg-dark{
          background-image: linear-gradient(180deg, #0e2a47,#04458f) !important;
        }
    </style>
@endsection


{{--============= showCase ===============--}}
@section('showCase')
<div class="container-fluid position-relative p-0">
    <div class="container-fluid  py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="heading">
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

{{--============= contant ===============--}}
{{--============= contant ===============--}}
{{--============= contant ===============--}}
{{--============= contant ===============--}}
{{--============= contant ===============--}}
@section('contant')

<div class="row container m-auto d-flex align-items-center align-items-center mb-5 justify-content-center">
  <div class="col-12 align-items-center">
    <div class="card mb-5">
            <div class="card-body table-responsive p-0">
        <table class="table table-striped-columns table-hover table-head-fixed text-nowrap align-middle ">
          <thead class="">
            <tr class="fs-2 fw-bold bg-dark bg-gradient  ">
              <th class="text-white  p-4">Name</th>
              <th class="text-white  p-4">Activity</th>
              <th class="text-white  p-4">Date</th>
              <th class="text-white  p-4">Time</th>
              <th class="text-white  p-4">NO.Guest</th>
              <th class="text-white  p-4">Price</th>
              <th class="text-white  p-4">Status</th>
              <th class="text-white  p-4">Edit</th>
              <th class="text-white  p-4">Delete</th>

              {{--  --}}
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $value)

              <tr class="fs-4 align-items-center align-middle ">
                  {{-- <td>{{$value['id']}}</td> --}}
                  <td>{{$value['first_name']." ".$value['last_name']}}</td>
                  {{-- <td>{{$value['last_name']	}}</td> --}}
                  <td class="p-4">{{$value['activity']}}</td>
                  <td class="p-4">{{$value['res_date']	}}</td>
                  <td class="p-4">{{$value['time']	}}</td>
                  <td class="p-4">{{$value['number_of_guest']	}}</td>
                  <td class="p-4">{{$value['price']	}}</td>
                  {{-- <td>{{$value['last_name']	}}</td> --}}
                  @if ($value['status']=="Pending")
                  <td class="p-4"><span class="badge bg-warning">Pending</span></td>
                  @endif

                  @if ($value['status']	=="Accepted")
                  <td class="p-4"><span class="badge bg-success">Accepted</span></td>

                  @endif     
                  @if ($value['status']	=="Rejected")
                  <td class="p-4"><span class="badge bg-danger">Rejected</span></td>

                  @endif

                  <td class="p-4"><a href="{{Route('user.myreserve.edit',$value['id'])}}"><button type="button" class="btn btn-block bg-success bg-gradient btn-sm fs-3 align-middle">Edit</button>
                  </a></td>
                  
              
                <td class="p-4">
                  <form action="{{Route('user.myreserve.destroy',$value['id'])}}" method="POST" class=""> 
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-block bg-gradient bg-danger btn-sm fs-3 align-middle">Delete</button>
  
                </form>
                </td>
              </tr>
              @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

@endsection