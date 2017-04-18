<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobShowController extends Controller
{
    //
  /* public function jobShow()
    {
        return view('home.jobShow.index');
    }*/
//    public function jobShow()
//    {
//        return view('home.Public.footer');
//    }
    public function jobShow()
    {
        return view('home.email.welecome');
    }
}
