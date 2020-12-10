<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class IndexController extends controller
{
    public function index(){
    	
    	return view('liuyanban');
    }
}
