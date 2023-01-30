<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Activity;


use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index($id)
    {
        $data = Activity::findOrfail($id);

    $booking=Reservation::where('activity_id',$id);
        return view('book',['key'=>['data'=>$data ,'booking'=>$booking]]);
    }






    
    public function create(Request $request , $id)
    {

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phoneNumber' => ['required', 'max:10'],
            'res_date' => ['required'],
            'time' => ['required'],


        ]);
        
        
        $data = Activity::findOrfail($id);

        // dd($request->user_id);
        $price =$request->guest_number*$data->price;
     
        $user=$request->user_id;
        Reservation::create([

            'first_name' => $request->first_name,
            'user_id' => $user,
            'last_name' => $request->last_name,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email,
            'number_of_guest' => $request->guest_number,
            'res_date' => $request->res_date,
            'price' =>   $price,
            'status' => 'Pending',
            'activity_id' => $id,
            'time' =>$request->time,


        ]);

        return redirect()->route('user.profile.index');

    }
}
