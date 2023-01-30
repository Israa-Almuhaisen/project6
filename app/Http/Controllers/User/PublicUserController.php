<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Activity;

use Illuminate\Http\Request;

class PublicUserController extends Controller
{
    public function index(){
        $data = Activity::all();

        return view('welcomeuser',['data'=>$data]);


    }
    public function show(){
        $data = Activity::all();

        return view('activities',['data'=>$data]);


    }
}
