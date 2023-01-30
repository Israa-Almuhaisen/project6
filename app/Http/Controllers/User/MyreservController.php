<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;


class MyreservController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id= auth()->user()->id;
        $reserv = Reservation::where('user_id',$id)->get();
         $data=[] ;
         foreach ($reserv as $reservation){
       $data[]=[
             'id' => $reservation->id,
             'first_name' => $reservation->first_name,
             'last_name' => $reservation->last_name,
           
             'number_of_guest' => $reservation->number_of_guest,
             'res_date' => $reservation->res_date,
             'time' => $reservation->time,
             'price' => $reservation->price,
             'status' => $reservation->status,
             'activity' => isset($reservation->activity) ? $reservation->activity->name : "",
       ];}
         return view('myReservation.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //     $reservation = Reservation::where('user_id',$id)->get();
    //    $id= auth()->user()->id;
    //     $data[] = [
    //         'id' => $reservation->id,
    //         'first_name' => $reservation->first_name,
    //         'last_name' => $reservation->last_name,
    //         // 'phoneNumber' => $reservation->phoneNumber,
    //         // 'email'=>$reservation->email,
    //         'number_of_guest' => $reservation->number_of_guest,
    //         'res_date' => $reservation->res_date,
    //         'price' => $reservation->price,
    //         'status' => $reservation->status,
    //         'activity' => isset($reservation->activity) ? $reservation->activity->name : "",
    //         // 'user' => isset($reservation->user) ? $reservation->user->name : "",
    //     ];
    //     return view('myReservation.index',['data'=>$data]);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::where('id', $id)->get();
        return view('myReservation.edit',['reservation' => $reservation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Reservation::findOrfail($id);

        $data->status ="";
        $data->status ="Accepted";
        $data->status ="Accepted";
        $data->status ="Accepted";
        $data->status ="Accepted";

        $data->save();
        return redirect()->route('user.myreserve.index');     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::findOrfail($id)->delete();
        return redirect()->route('user.myreserve.index'); 
    }
}
