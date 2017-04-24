<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
/*    public function search()
    {
        return view('home.search.index');
    }*/

    public function getIndex(Request $request)
    {

        //dd($request -> all());
        //$search  =  $request -> search;
        //dd($search);

        $res = $request -> all();
        //dd($res);
        //dd($res['job']);
        if(!empty($res['job']))
        {
            $data['name'] = strstr($request -> job,'?','false');
            if(!$data['name'])
            {
                //$data['job'] = 'php';
                unset($data['name']);
            }
        }
        //dd($data);
        if(!empty($res['search']))
        {
            $data['name'] = $res['search'];
        }

        //$res['city'] = '北京';
        if(!empty($res['city']))
        {
            $data['city'] = $res['city'];
        }
        if(!empty($res['jobCate']))
        {
            $data['name'] = $res['jobCate'];
        }
        //dd($res);
        //工作经验

        if(!empty($res['work_year'])){
            $data['work_year'] =$res['work_year'];
        }
        //dd($data);

        //学历
        if(!empty($res['edu'])){
            $data['edu'] = $res['edu'];
        }

        //公司阶段
        // var_dump(is_null($_GET['stage']));die;
        // var_dump($_GET['stage']);
        /*if(!empty($res['stage']) && $res['stage'] != 0){
                $map['stage'] = (int)($res['stage'])-1;
        }*/
        // var_dump(C('company_stage'));

        //公司领域
        if(!empty($res['trade'])){
            $com['trade'] =$res['trade'];
        }
        //公司阶段
        // var_dump(is_null($_GET['stage']));die;
        // var_dump($_GET['stage']);
        /*if(!is_null($res['stage']) && $res['stage'] != 0){
                $com['stage'] = (int)($res['stage'])-1;
        }*/
        //dd($data);
        //月薪
        //$res['salary'] = '50k以上';
        if(!empty($res['salary'])){
            //dd('hello');
            switch($res['salary']){
                case '2k以下':
                    $sal['salary_low']=array(array('egt',0),array('elt',2));
                    break;
                case '2k-5k':
                    $sal['salary_low']=array(array('egt',2),array('elt',5));
                    break;
                case '5k-10k':
                    $sal['salary_low']=array(array('egt',5),array('elt',10));
                    break;
                case '10k-15k':
                    $sal['salary_low']=array(array('egt',10),array('elt',15));
                    break;
                case '15k-25k':
                    $sal['salary_low']=array(array('egt',15),array('elt',25));
                    break;
                case '25k-50k':
                    $sal['salary_low']=array(array('egt',25),array('elt',50));
                    break;
                case '50k以上':
                    $sal['salary_low']=array(array('egt',50));

                    break;
            }
        }

        //工作性质
        // if(isset($_GET['nature'])){
        // 	$data['nature']=$_GET['nature'];
        // }


        //排序方式
        if(isset($res['time'])){
            $order = 'create_time desc';
        }
        // lg_job
        //获取总数
        //获取符合公司条件的工作


        //dd()
        //dd($data);
        if($data)
        {
            foreach($data as $v)
            {
                $search = $v;
            }
        }else{
            $search = '';
        }

        //echo $search;
        //dd($data);
        $jobs = DB::table('job') -> limit('15') -> where($data) ->get();
        //dd($jobs);
        //$coms = DB::table('company') -> where($com) -> get();

        //dd($coms);


        //$jobbss = $dejob->where($data)->select();
        /*foreach ($jobbss as $key => $value) {
            $map['id'] = $value['company_id'];
            $com_res = $company->where($map)->find();
            if($com_res){
                $jobbss[$key]['company'] = $com_res;
            }else{
                unset($jobbss[$key]);
            }
        }*/
        //dd($jobs);
        foreach ($jobs as $key => $value) {
            $com_id = $value->company_id;
            //echo $com_id.'<br>';

            $com_res = DB::table('company') -> where('id',$com_id) -> first();
            //var_dump($com_res);
            //dd($com_id);
            //$com_res = $company -> where('id',$com_id) -> get();
            if($com_res){

                //dd($com_res);
                $jobs[$key] -> company = $com_res;
                //dd($jobs);
            }else{
                //dd('unset');
                unset($jobs[$key]);
            }
        }

        //dd($jobs);
        //dd($data);

        return view('home.Search.index',['data' => $jobs,'searchName' =>$search]);

        //dd($);
        /*
        $jj = array();
        //将数组重新排序
        foreach ($jobs as $key => $value) {
            if(!is_null($value)){
                $jj[] = $value;
            }
        }
        dd($jj);*/
        /*$count = count($jj);
        $num = 20;
        //创建分页对象
        $page = new \Think\Page($count,$num);// 实例化分页类
        //获取页码字符串
        $pages = $page->show();
        //获取limit参数
        $limit = $page->firstRow+$page->listRows;
        // var_dump($limit);
        $result = array();
        //将数组按分页取出数据
        for($i = $page->firstRow; $i<$limit;$i++){
            if(isset($jj[$i])){
                $result[] = $jj[$i];
            }
        }

        // var_dump($map);
        //获取公司标签
        $result = $this->getTags($result);
        // $result['sum'] = $count;
        //工作经验
        // var_dump($result);die;
        $works = $dejob->field('work_year')->group('work_year')->select();
        //学历
        $edu = $dejob->field('edu')->group('edu')->select();
        //行业领域
        $trade = M('trade')->field('name as trade')->group('trade')->select();
*/


        // var_dump($trade);die;
        //将查询条件带过去

        /*if(count($result)<=0){
            $isn = '<div style="clear:both;height:30px;color:#00B38A">暂无</div>';
        }else{
            $isn = '';
        }
        // var_dump($result);
        if(!is_null($_GET['stage'])){
            $map['stage'] = (int)($_GET['stage']);
        }else if($_GET['stage'] === ''){
            $map['stage'] = null;
        }
        // var_dump($map['stage']);
        //关键字
        $this->assign('k_words',$job);
        //是否为空
        $this->assign('isn',$isn);
        //查询条件
        $this->assign('da',$data);
        $this->assign('map',$map);
        //公司领域
        $this->assign('trade',$trade);
        // 工作经验
        $this->assign('works',$works);
        $this->assign('edu',$edu);
        $this->assign('jobs',$result);
        $this->assign('pages', $pages);

        // var_dump($result);
        $this->display();*/
    }

}
