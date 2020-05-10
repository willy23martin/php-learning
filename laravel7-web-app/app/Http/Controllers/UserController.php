<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
    	$user = "New user";
    	return "A new user wants to be created: $user";
    }

}
