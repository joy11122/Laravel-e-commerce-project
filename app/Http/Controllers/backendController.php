<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\backendController;

class backendController extends Controller
{
    public function index(){
        $data=User::where('rollAs',0)->count();
// dd($data);
    return view ('backend.dashboard',compact('data'));
}

}
