<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use DB;
use Illuminate\Support\Facades\DB;

/**
 * 留言板模块
 * @author phpopenfather <[email address]>
 */
class MsgController extends Controller
{
    //列表
    public function index()
    {
    	//1.获取所有留言数据 
    	$msgs = DB::table('msg')->get();
    	//2.加载视图
    	return view('msg.index', compact('msgs'));
    }

    //添加
    public function create(Request $request)
    {
    	//1.判断提交方式
    	if ($request->isMethod('post')) {
    		//2.接受数据
    		$postData = $request->only('uname', 'content');
    		$postData['created_at'] = $postData['updated_at'] = time();
    		//3.过滤数据
    		//4.入库
    		$rs = DB::table('msg')->insert($postData);
    		//5.判断跳转
    		if ($rs) {
    			return redirect(url('/msg'));
    		} else {
    			return redirect(url('/msg'));
    		}
    	}
    }
}
