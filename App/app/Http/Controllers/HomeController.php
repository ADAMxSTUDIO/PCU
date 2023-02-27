<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session,Input;
use App\Models\User;
use DB;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(Request $request)
    {

        // $id = DB::table('users')->where("email",$request->query('email'))->get();
        // Session::flash('info',$id);
        // Session::flash('info',$request->email);

        Session::put('status','Logged In !');

        return view('home');
    }
}
