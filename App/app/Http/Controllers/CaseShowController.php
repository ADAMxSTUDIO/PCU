<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\State;
use Input,Auth;

class CaseShowController extends Controller
{
    public function index(Request $request)
    {

        $firstname = Auth::user()->firstname;
        $lastname = Auth::user()->lastname;
        
        if(Auth::user()->hasAdmin == 1){
            $casesShow = DB::table('cases')->join('users', 'cases.patient_id', '=', 'users.id')
                                           ->paginate(4);
        }
        elseif (Auth::user()->hasAdmin == 0) {
            $casesShow = DB::table('cases')->join('users', 'cases.patient_id', '=', 'users.id')
                                       ->where('cases.created_by',$firstname." ".$lastname)
                                       ->paginate(4);
        }

        return view('cases')->with(["cases" => $casesShow]);
    }
}
