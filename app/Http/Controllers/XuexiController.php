<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class XuexiController extends Controller
{
    public function index(){
    	$data=DB::table('user')->get();

    	return view('liuyanban')->with('data',$data);
    }

    public function post(Request $request){

    	dd($request->input());
    }
}
