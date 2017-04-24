<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class JobShowController extends Controller
{
    //
  public function jobShow(Request $request)
    {
        //dd('dkd');
   //return view('home.jobShow.index');
   		preg_match('/\d+/',$request -> job,$id);
		//dd($id);
		if($request -> job)
		{
			preg_match('/\d+/',$request -> job,$id);

			$job_id = $id[0];
			
		}else{
			$job_id = 7;

		}
		
		//dd($job_id);
		//$job_id = 7;
		$job = DB::table('job')->where('id',$job_id)->first();
		//dd($job);

		//var_dump($arr);die;
		//搜索公司信息
		/*$company=M('company');
		$res_company=$company->where("id={$res_job['company_id']}")->find();
		$ayy=$res_company;*/
		//dd($job);
		$company = DB::table('company')->where('id',$job->company_id) -> first();
		//dd($company);
		if(!$company)
		{
			$company = DB::table('company')->where('id',1) -> first();

		}
		/*//收藏框的判断
		$user_col=M('user_col');
		$res_user_col=$user_col->where("job_id={$_GET['jid']} and uid={$_SESSION['user']['id']}")->find();
		if($res_user_col){
			$showCol='collected';
		}else{
			$showCol='';
		}*/

		$user_col = DB::table('user_col')->where('job_id',$job->id)->first();
		//dd($user_col);
		if($user_col)
		{
			$showCol = 'collected';
		}else{
			$showCol = '';
		}
		//是否投递过简历的判断
		/*$send=M('send');
		$res_send=$send->where("job_id={$_GET['jid']} and user_id={$_SESSION['user']['id']}")->select();
		if($res_send){
			$cl['value']="已投递";
			$cl['cls']="btn_sended";
			$cl['address']="javascript:;";
		}else{
			$cl['value']="投递简历";
			$cl['cls']="btn_apply";
			$cl['address']=U('JobShow/resumeSend',array('job_id'=>$arr['id'],'uid'=>$_SESSION['user']['id'],'company_id'=>$ayy['id']));
		}		*/
		//dd($job_id);
		//dd(session('user'));
		$cl = "false";
		if(!empty(session('vip') -> id))
		{

			$res_send = DB::table('send')-> where([
				'user_id' => session('vip') -> id,
				'job_id' => $job_id
				]) -> first();

			if($res_send)
			{
				$send = '已投递';
				$cl = "false";
			}else{
				$send = '投个简历';
				$cl = "true";
			}
		}else{
			$send = '投个简历';
			$cl = "true";
		}

		//判断是否收藏
		if(!empty(session('vip') -> id))
		{
			$cang['uid'] = session('vip') -> id;
			$cang['job_id'] = $job_id;

			$res_cang = DB::table('cang') -> where($cang) ->first();

			//dd($res_cang);
			if($res_cang)
			{
				$dn = "collected";
			}else{
				$dn = '';
			}

		}else{
			$dn = "";
		}
		
		//dd($dn);

		//dd(session('user') -> id);
	//$res_send = DB::table('send') -> 

		//輸出到模板
		/*$this->assign('data',$this->data);
		$this->assign('arr',$arr);
		$this->assign('ayy',$ayy);
		$this->assign('showCol',$showCol);
		$this->assign('cl',$cl);
		$this->display();*/
		/*dd($send);
		dd($job);
		dd($cl);
		dd($job);
		dd($company);*/
		return view('home.jobShow.index',[
			'job'=>$job,
			'company' => $company,
			'showCol'=>$showCol,
			'send' => $send,
			'cl' => $cl,
			'dn' => $dn
			]);
	}

    //简历的投递


//    public function jobShow()
//    {
//        return view('home.Public.footer');
//    }
    /*public function getResumesend()
    {
        return view('home.jobShow.indexs');
     }*/

    //简历的投递
    public function getResumesend(Request $request)
    {
       return view('home.jobShow.indexs');
        //dd($request -> all());
		$data['job_id'] = $request -> jobid;
		if(!empty(session('vid') -> id))
        {


            //$data['job_id'] = $request -> jobid;
            $data['company_id'] = $request -> comid;
            $data['vip_id'] = session('vid') -> id;
            $data['state1_time'] = time();
            $send = DB::table('send') -> insert($data);
            //dd($send);

            return redirect("jobShow/index?job={$data['job_id']}");
        }else{
           // echo "<script>alert('请先登录');top.location='/jobShow/index?job={$data['job_id']}';</script> ";
        }
    }

    public function postCanginsert(Request $request)
    {
        //dd($request -> all());
        if(empty(session('vip') -> id))
        {
            return response()->json(array(
                'status' => 0,
                'msg' => 'no'
            ));
        }else{


            $data = $request -> only('job_id');
            $data['uid'] = session('vip') -> id ;
            $res = DB::table('cang') -> insert($data);
            //dd($res);
            if($res){
                return response()->json(array(
                    'status' => 1,
                    'msg' => 'ok'
                ));
            }else{
                // return Redirect::back()->withInput()->withErrors('保存失败！');
                return response()->json(array(
                    'status' => -1,
                    'msg' => 'no'
                ));
            }

        }
    }


    public function postCangdelete(Request $request)
    {
        //dd($request -> all());
        $data = $request -> only('job_id');
        //$data['uid'] = session('user') -> id ;
        $res = DB::table('cang') -> where($data) -> delete();
        if($res){
            return response()->json(array(
                'status' => 1,
                'msg' => 'ok'
            ));
        }else{
            // return Redirect::back()->withInput()->withErrors('保存失败！');
            return response()->json(array(
                'status' => -1,
                'msg' => 'no'
            ));
        }

    }
    public function getCang()
    {
        $uid = session('vip') -> id;


        $cang = DB::table('cang')
            ->join('job','job.id','=','cang.job_id')
            ->join('company','job.company_id','=','company.id')
            ->where('cang.uid', $uid)
            ->get();
       // dd($cang);
        return view('home.jobShow.collect',['data' => $cang]);
    }


    public function getIndexs(Request $request)
    {
        //return view('home.jobShow.indexs');

        preg_match('/\d+/',$request -> job,$id);
        //dd($id);
        if($request -> job)
        {
            preg_match('/\d+/',$request -> job,$id);

            $job_id = $id[0];

        }else{
            $job_id = 14;

        }

        //dd($job_id);
        //$job_id = 7;
        $job = DB::table('job')->where('id',$job_id)->first();
        //dd($job);


        $company = DB::table('company')->where('id',$job->company_id) -> first();
        //dd($company);
        if(!$company)
        {
            $company = DB::table('company')->where('id',1) -> first();

        }


        $user_col = DB::table('user_col')->where('job_id',$job->id)->first();
      //dd($user_col);
        if($user_col)
        {
            $showCol = 'collected';
        }else{
            $showCol = '';
        }

        $cl = "false";
        if(!empty(session('vip') -> id))
        {

            $res_send = DB::table('send')-> where([
                'user_id' => session('vip') -> id,
                'job_id' => $job_id
            ]) -> first();

            if($res_send)
            {
                $send = '已投递';
                $cl = "false";
            }else{
                $send = '投个简历';
                $cl = "true";
            }
        }else{
            $send = '投个简历';
            $cl = "true";
        }

        //判断是否收藏
        if(!empty(session('vip') -> id))
        {
            $cang['uid'] = session('vip') -> id;
            $cang['job_id'] = $job_id;

            $res_cang = DB::table('cang') -> where($cang) ->first();

            //dd($res_cang);
            if($res_cang)
            {
                $dn = "collected";
            }else{
                $dn = '';
            }

        }else{
            $dn = "";
        }

        //dd($dn);


        return view('home.jobShow.indexs',[
            'job'=>$job,
            'company' => $company,
            'showCol'=>$showCol,
            'send' => $send,
            'cl' => $cl,
            'dn' => $dn
        ]);
    }






}
