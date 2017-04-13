<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeadController extends Controller
{
    //
    public function head()
    {
        return view('home.head.index');
    }
}
