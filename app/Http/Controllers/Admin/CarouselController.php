<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarouselController extends Controller
{
    //首页轮播图管理//////////////////////////////////////////////////
    public function carousel(Request $request) {
        $result = DB::table('carousels')->where(function($query)use($request){
//            $where = ['cate'=>'0'];
            $query->where('title','like','%'.$request->input('keywords').'%');
        })->paginate($request->input('num',2));
        return view('admin/carousel/carousel',['result'=>$result,'request' => $request]);
    }

    //公司轮播图管理/////////////////////////////////////////////
    public function firmcarousel() {
        $result = DB::table('carousels')->orderBy('id')->where('cate',1)->paginate(4);
        $where = ['cate'=>'1'];
        return view('Admin/firmcarousel')->with('result',$result)->with('where',$where);
    }
    //添加轮播图////////////////////////////////////////////////////
    public function carousel_add() {
        // return '111';
        return view('admin.carousel.carousel_add');
    }
    //添加的操作///////////////////////////////////////////////////
    public function carousel_add2(Request $request) {
        if(!$request->file('pic')){
            return back()->with('status', '没有上传图片！ : (');
        }
        $ext = $request->file('pic')->getClientOriginalExtension();
        $url = $request->url;
        $descr = $request->descr;
        $cate = $request->cate;
        $onsale = $request->onsale;
        $title = $request->title;
        $abc = time().mt_rand(1000, 9999).'.'.$ext;
        $request->pic->move(public_path().'/admin/image/carousel', $abc);
        if($request->hasFile('pic')){
            $sss = DB::table('carousels')->insert([
                'pic' => $abc,
                'url' => $url,
                'descr'=> $descr,
                'cate' => $cate,
                'onsale' => $onsale,
                'title' => $title,
            ]);

            if($sss){
                if($cate == '0'){
                    return redirect('admin/carousel');
                }else{
                    return redirect('admin/carousel');
                }
            }
        }
    }
    //修改轮播图//////////////////////////////////////////////////////
    public function carousel_edit($id){
        $result = DB::table('carousels')->where('id',$id)->get()->first();
        return view('admin/carousel/carousel_edit')->with('arr',$result);
    }
    //修改的操作//////////////////////////////////////////////////////
    public function carousel_edit2(Request $request){
        $id = $request->id;
        $url = $request->url;
        $descr = $request->descr;
        $cate = $request->cate;
        $title = $request->title;
        if($request->file('pic')){
            $ext = $request->file('pic')->getClientOriginalExtension();
            $abc = time().mt_rand(1000, 9999).'.'.$ext;
            $request->pic->move(public_path().'/admin/image/carousel', $abc);
            if($request->hasFile('pic')){
                $sss = DB::table('carousels')
                    ->where('id',$id)
                    ->update(
                        [
                            'pic' => $abc,
                            'url' => $url,
                            'descr' => $descr,
                            'cate' => $cate,
                            'title' => $title
                        ]
                    );
            }else{
                return back()->with('status', '图片上传失败！ :(');
            }
        }else{
            $sss = DB::table('carousels')
                ->where('id',$id)
                ->update(
                    [
                        'url' => $url,
                        'descr' => $descr,
                        'cate' => $cate,
                        'title' => $title
                    ]
                );
        }
        if($sss){
            if($cate == '0'){
                return redirect('admin/carousel');
            }else{
                return redirect('admin/carousel');
            }
        }else{
            return back()->with('status', '修改失败！ :(');
        }

    }
    //删除的操作////////////////////////////////////////////////////////
    public function carousel_del($id){
        $sss = DB::table('carousels')
            ->where('id',$id)
            ->delete();
        if($sss){
            return back();
        }else{
            return back()->with('status', '删除失败！ : (');
        }
    }
    //修改上架的操作//////////////////////////////////////////////////
    public function carousel_onsale(Request $request) {
        $onsale = $request->onsale;
        $id = $request->id;
        $sss = DB::table('carousels')
            ->where('id',$id)
            ->update(
                [
                    'onsale' => $onsale,
                ]
            );
    }
}
