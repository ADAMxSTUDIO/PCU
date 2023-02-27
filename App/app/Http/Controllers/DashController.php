<?php

namespace App\Http\Controllers;
use DB,Auth;
use Illuminate\Http\Request;
use App\Models\User;

class DashController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        
        $DashShow = DB::table('users')->join('roles', 'users.hasRole', '=', 'roles.id')
                                      ->where('users.id',$id)
                                      ->get();

        return view('dashboard')->with(["DashUsers" => $DashShow,"id" => $id]);
    }
}
?>