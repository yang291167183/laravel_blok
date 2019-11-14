<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Day1Controller extends Controller
{
    //接受数据
    public function t14(Request $request)
    {
        //判断提交的方式
        var_dump($request->isMethod('get'));
        echo '<br />';
        var_dump($request->isMethod('post'));
        echo '<hr /><hr /><hr />';
        //通过input方法接受数据
        echo $request->input('uname');   //$_GET['键']
        echo $request->input('age');
        echo $request->input('sdfasdfsdf', 123);
        echo '<hr />';
        //一次性接受多个值
        $getData = $request->only('uname', 'age');
        print_r($getData);
        echo '<br />';
        $getData = $request->only(['uname', 'age']);
        print_r($getData);
    }

    //加载视图
    public function t12()
    {
        // return view('t12', [
        //     'name' => 'c',
        //     'age' => 18
        // ]);
        
        $name = 'c';
        $age = 18;
        return view('a.t12', compact('name', 'age'));
    }

    //blade模板引擎
    public function t13()
    {
        return view('t13');
    }

    public function t1()
    {
    	echo 666;
    }

    public function t2()
    {
    	return 'this is day1 controller t2 function';
    }

    public function t4()
    {
    	return 'this is day1 controller t4 function';
    }
}
