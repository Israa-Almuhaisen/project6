<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Activity;
use Illuminate\Http\Request;

class EditBookController extends Controller
{
    public function update(Request $request, $id)
    {
        // dd($id);
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phoneNumber' => ['required', 'max:10'],
            'res_date' => ['required'],
            'number_of_guest' => ['required'],
            'time' => ['required'],


        ]);
        // dd($request->activity_id);
        $data = Activity::findOrfail($request->activity_id);


        $price =$request->number_of_guest*$data->price;

        $data = Reservation::findOrfail($id);
        $data->first_name =$request->first_name;
        $data->last_name =$request->last_name;
        $data->phoneNumber =$request->phoneNumber;
        $data->number_of_guest =$request->number_of_guest;
        $data->email =$request->email;
        $data->time =$request->time;
        $data->price =$price;
        $data->res_date =$request->res_date;

        $data->status ="Pending";

        $data->save();
        return redirect()->route('user.myreserve.index');     }

}
