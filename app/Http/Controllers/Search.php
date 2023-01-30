<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class Search extends Controller
{

    public function search(Request $request)
    {

        $search = $request->input('search');
        $results = Activity::where('name', 'like', '%' . $search . '%')
            ->orWhere('long_description', 'like', '%' . $search . '%')
            ->get();
        return view('search', ['results' => $results]);
    }
        

}
