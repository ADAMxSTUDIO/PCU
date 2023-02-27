<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PhpOption\None;
use Redirect,Auth;

class TreatmentFilterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($isClosed)
    {
        ///////////////////////////// READ ME /////////////////////////////
        // the condition on the availability of the isClosed parameter is 
        // for escape using the TreatmentController.index method instead
        /////////////////////////////////////////////////////////////////
        
        $firstname = Auth::user()->firstname;
        $lastname = Auth::user()->lastname;
        
        $hasAdmin = Auth::user()->hasAdmin;

        if($hasAdmin == 0){
            if ($isClosed == 0) {
                $treatments = DB::table('treatments')->join('users', 'treatments.patient_id', '=', 'users.id')
                                                     ->where([
                                                            ['users.firstname',$firstname],
                                                            ['users.lastname',$lastname],
                                                            ['treatments.isClosed', 0]
                                                        ])
                                                    //  ->where('treatments.isClosed', 0)
                                                     ->paginate(4);
            }
            // $isColsed === true
            elseif ($isClosed == 1){
                $treatments = DB::table('treatments')->join('users', 'treatments.patient_id', '=', 'users.id')
                                                     ->where([
                                                            ['users.firstname',$firstname],
                                                            ['users.lastname',$lastname],
                                                            ['treatments.isClosed', 1]
                                                     ])
                                                    //  ->where('treatments.isClosed', 1)
                                                     ->paginate(4);
            }
        }
        elseif($hasAdmin == 1){
            if ($isClosed == 0) {
                $treatments = DB::table('treatments')->join('users', 'treatments.patient_id', '=', 'users.id')
                                                     ->where('treatments.isClosed', 0)
                                                    //  ->where('treatments.isClosed', 0)
                                                     ->paginate(3);
            }
            // $isColsed === true
            elseif ($isClosed == 1){
                $treatments = DB::table('treatments')->join('users', 'treatments.patient_id', '=', 'users.id')
                                                     ->where('treatments.isClosed', 1)
                                                     ->paginate(3);
            }
        }
        
        // Treatment index view
        return view('treatement_second')->with(["treatments" => $treatments]);
    }
}