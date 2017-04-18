<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class PersonalController extends Controller
{
    //
    public function personal(Request $request)
    {
//        $data = $request->session()->all();
//        dd($data);
//        $id = session('vip')->id;
//         dd($id);
//        $com =  DB::table('vip')->where('id',$id)->first();
        return view('home.personal.personal');
    }



}
