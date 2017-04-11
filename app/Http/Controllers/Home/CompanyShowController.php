<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyShowController extends Controller
{
    //
    public function CompanyShow()
    {
        return view('home.CompanyShow.index');

    }
}
