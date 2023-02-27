<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SwitchResponsibleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id, $new_responsible)
    {
        if(Auth::user()->hasAdmin == 1){
            DB::table('cases')->where('id', $id)->update(['responsible_id' => $new_responsible]);
        }
    }
}