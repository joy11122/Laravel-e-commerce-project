<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $data=User::paginate(15);
        return view('user.alluser',compact('data'));

    }
   
}
