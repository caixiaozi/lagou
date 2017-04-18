<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
    //
    public function resume()
    {
        return view('home.resume.pending');
    }
}
