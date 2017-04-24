<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    //
    public function resume()
    {
        return view('home.resume.pending');
    }

    //有效职位
    public function getPending(Request $request){
        //简历加简历状态
        $company = session('company');
        $user = DB::table('resume')
            ->join('send', 'resume.id', '=', 'send.user_id')
            ->join('job', 'job.id', '=', 'send.job_id')
            ->where(['send.company_id'=>$company,'send.state4'=>0,'send.send_type'=>0])
            ->select('resume.*', 'send.*', 'job.name as job_name','job.city as job_city')
            ->get();
             dd($user);
        return view('home.resume.pending',['user'=>$user]);
    }
}
