<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    //
    public function index()
    {
    
        //$cars = DB::table('cars')->select('id','manufacture','name','model','manufacturing_year','seating_capacity')->get();
        
       
        //return view('user')->with('cars', $cars);//using with

        $cars=DB::select('select * from cars');


        return view('user',['cars'=> $cars]);   //using controller
    }
}
