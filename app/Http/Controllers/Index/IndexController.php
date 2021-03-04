<?php

namespace App\Http\Controllers\Index;
use App\member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{	
	//連接到註冊頁面
   function Regist(){
   	return view('index.register');
   }
   //接收註冊資料
   function registered(Request $request){
   		//刪除_token並新增日期 再存入db
   		member::insert(collect(array_except($request->input(),'_token'))->merge(['joindate' => date("Y-m-d H:i:s")])->toArray());

   }
}
