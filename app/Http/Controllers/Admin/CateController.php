<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class CateController extends Controller
{
    //
    public function categorySearch(Request $request)
    {
        $res = \DB::table('category')->where(function($query)use($request){

            $query->where('name','like','%'.$request->input('keywords').'%');

        })->paginate($request->input('num',2));
        //dd($res);

        return view('admin/category/index',['res' => $res,'request' => $request]);
    }
}
