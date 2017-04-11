<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    //显示用户信息列表
    public function user()
    {

        $users =DB::table('users')->paginate(5);
//        dd($users);
        return view('admin.user.user')->with('users',$users);
    }
}
