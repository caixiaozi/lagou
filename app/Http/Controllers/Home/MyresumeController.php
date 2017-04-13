<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyresumeController extends Controller
{
    public function myresume()
    {
        return view('home.myresume.index');
    }
}
