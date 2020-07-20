<?php 
namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redis;

use Illuminate\Support\Facades\RedirectResponse;


class IndexController extends Controller 
{          
    public function  index(){
    	
     	return view("index/index");
    }
	
}