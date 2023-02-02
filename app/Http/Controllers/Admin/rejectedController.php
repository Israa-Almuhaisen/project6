<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class rejectedController extends Controller
{

    public function rejected($id)
    {

        return view('admin.reservation.rejected_reason',compact('id'));

    }
    

    public function store(Request $request)
    {
        
        $data = Reservation::findOrfail($request-> id_rejected);
        $data->status ="Rejected";
        $data->rejected_reason =$request->rejected_reason;
        $data->save();
        return redirect()->route('admin.reservation.index');
    }




}
