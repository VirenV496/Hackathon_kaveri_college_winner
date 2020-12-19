<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


function GetShoe(){

$data['data'] = DB::select('select * from question where QestionID=1');

if($data)
	return view('Test',$data);



}
function getprofile(){

$data['data'] = DB::table('registration')->get();

if($data)
	return view('profile1',$data);



}


}
