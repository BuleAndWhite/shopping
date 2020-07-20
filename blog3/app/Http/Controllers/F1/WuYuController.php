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
         // $arr=[
         //    'stat'=>202,
         //    'msg'=>'验证码错误'
         //   ];
         // return json_encode( $arr);
	 //此用户名是否有
	 //账号密码都是 1 
     $res=DB::table("user")->where("username",$username)->get();
         $name=json_encode($res);
         $res= json_decode(json_encode($res),true);
         // dump($res);die;
	     if($res==[]){
            echo "<script>alert('账号密码错误')</script>"; 
            return  view('login/index');    
	     }
	     // die;
	     $res=$res[0];

	     if($res["password"]==$password){
            $name=Redis::SET("username",$name);
	     	return  redirect('index/index');
	     }

     }	
     public function  loginout(){
     	// $name=Redis::GET("username");
        // dump($name);die;
        return  redirect('login/index');
    }
}