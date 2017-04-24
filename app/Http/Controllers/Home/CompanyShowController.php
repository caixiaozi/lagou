<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CompanyShowController extends Controller
{
    //
    public function CompanyShow(Request $request)
    {
        //return view('home.CompanyShow.index');
        $com_id = $request -> company;
        if(empty($com_id))
        {
            $com_id =1;
        }

        $company = DB::table('company') -> where('id', $com_id) -> first();
        //dd($company);
        return view('home.companyShow.index',['data' => $company]);

    }
}
