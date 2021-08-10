<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class DashboardController extends Controller
{

    public function index(){


    	$user = Auth::user();

    	$logged_in =  User::with('role')->where('id',$user->id)->first();



    	return view('dashboard.dashboard',['user' => json_encode($logged_in)]);
    }

}
