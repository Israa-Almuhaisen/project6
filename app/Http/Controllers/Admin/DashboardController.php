<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Activity;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{

    public function index()
    {

        
        $totalAllUser = User::count();
        $totalUser = User::where('is_admin' , '0')->count();
        $totalAdmin = User::where('is_admin' , '1')->count();
        $totalActivities = Activity::count();
    
    
        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth =  Carbon::now()->format('m');
        $thisYear =  Carbon::now()->format('Y');
        
        $totalReservation = Reservation::count();
        $todayReservation = Reservation::whereDate('created_at' , $todayDate)->count();
        $thisMonthReservation = Reservation::whereMonth('created_at' , $thisMonth)->count();
        $thisYearReservation = Reservation::whereYear('created_at' , $thisYear)->count();
    

        // dd($totalAllUser);

    
        return view('admin.dashboard', ['totalUser'=>$totalUser ,'totalAllUser'=>$totalAllUser , 'totalAdmin' =>$totalAdmin , 'totalActivities'=>$totalActivities , 'totalReservation'=>$totalReservation , 'todayReservation'=>$todayReservation , 'thisMonthReservation'=>$thisMonthReservation , 'thisYearReservation'=>$thisYearReservation ]);

    
        
    }

}
