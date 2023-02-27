<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth,DB;
use App\Models\User;

class TreatementShow extends Controller
{
    public function show(Request $request)
    {
        $firstname = Auth::user()->firstname;
        $lastname = Auth::user()->lastname;
                
        if(Auth::user()->hasAdmin == 1){
            $TreatShow = DB::table('treatments')->join('users', 'treatments.patient_id', '=', 'users.id')
                                                ->paginate(4);
        }
        elseif (Auth::user()->hasAdmin == 0) {
            $TreatShow = DB::table('treatments')->join('users', 'treatments.patient_id', '=', 'users.id')
                                                ->where([
                                                    ['users.firstname',$firstname],
                                                    ['users.lastname',$lastname]
                                                ])
                                                ->paginate(4);
        }

        return view('treatement')->with(["treatments" => $TreatShow]);
    }
}

