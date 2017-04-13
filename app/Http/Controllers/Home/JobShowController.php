<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobShowController extends Controller
{
    //
    public function jobShow()
    {
        return view('home.jobShow.index');
    }
}
