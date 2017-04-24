<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FirmController extends Controller
{
    //
    public function firm()
    {
        return view('home.firm.edit');
    }
}
