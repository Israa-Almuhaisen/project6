@extends('admin.layout.master')

@section('title')
Reservation
@endsection

@section('css')
   
@endsection

@section('title_page1')
Add rejected reason
@endsection
@section('title_page2')
Reservation
@endsection
@section('title_div')
Add rejected reason
@endsection

@section('content')
<!-- /.row -->
<div class="row container m-aut">
  <div class="col-9">
      {{-- <div class="card-header">
        <h3 class="card-title">Add Activity</h3>
      </div> --}}
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{route('admin.activity.update',$data->id)}}" method="POST" files=true enctype="multipart/form-data" >
        {{-- @method('PATCH') --}}
        @method('PUT')

                @csrf

            <div class="card-body">
            
                <div class="form-group">
                  <label for="exampleInputPassword1">Short description</label>
                  <input type="text" name="short_description" class="form-control" id="" placeholder="" value="{{$data->short_description}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Long description</label>
                    <input type="text" name="long_description" class="form-control" id="" placeholder="" value="{{$data->long_description}}">
                  </div>
               
        <div>
        
        
        <!-- /.card-body -->
  
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
      </form>
    </div>
    <div>
@endsection


@section('scripts')
@endsection