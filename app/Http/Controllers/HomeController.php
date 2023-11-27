<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');

   }

   public function index(){
    $user = Auth::user();

    $home = 'home';
    if($user->hasRole('admin')){

        $home = 'admin.home';
    }
        else if($user->hasRole('user')){
            $home = 'user.home';


        }

        return view($home);
    }
   }

