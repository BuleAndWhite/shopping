<?php 
namespace App\Http\Controllers\F1;

use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redis;

use Illuminate\Support\Facades\RedirectResponse;


class WuYuController extends Controller 
{          
    public function  index(){
     	return view("login/index");
    }
	public function  login(Request $Request){
	 $username= $Request->username;
	 $password= $Request->password;
	 //此用户名是否有
	 //账号密码都是 1 
     $res=DB::table("user")->where("username",$username)->get();
	     if(!empty($res)){
                 
	     }
	     $res=$res[0];

	     $res= json_decode(json_encode($res),true);
	     if($res["password"]==$password){
         // $name=Redis::SET("username","1");
	     	return  redirect('index/index');
	     }

     }	
     public function  loginout(){
     	// $name=Redis::DEL("username","1");
        return  redirect('login/index');
    }
}