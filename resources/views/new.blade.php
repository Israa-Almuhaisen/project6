@extends('userLayout.master')
@section('title')
   
@endsection
@section('css')
    
@endsection
{{-- aaa --}}

{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

@endsection
<div class="col-sm-12">
    <a class="btn btn-primary " target="__blank"  href="{{route('user.profile.edit',auth()->user()->id)}}">Edit</a>
    <a  style="padding-left:30px !important;" class="btn btn-primary " target="__blank"  href="{{route('user.myreserve.index')}}">My Reservation</a>
  </div>     