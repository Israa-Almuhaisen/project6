<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Activity;

use Illuminate\Http\Request;

class ActivityDetailsController extends Controller
{
    public function index($id)
    {
        // $employees = Employees::findOrFail($id);

        $data = Activity::where('id',$id)->get();
    
        return view('single',['data'=>$data]);

    }
}
