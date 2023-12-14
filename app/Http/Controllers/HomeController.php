<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function adminindex(){ //used to display admin index

        $datas=Service::all();
        return view('admin.index',compact('datas'));
    }
    public function userindex(){ //used to display user index

        $datas=Service::all();
        
        return view('user.index',compact('datas'));
    }
}
