<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use DB;
use App\Product;
class HomeController extends Controller
{
    public function index(){
        echo "This is first controller";
    }
    public function service(){
        return view("home.service");
    }
    public function login(){
       // echo "This is login page";

       return view("home.login");
    }
    public function query(){
        $values = array('name' => 'Het','email'=>'het@gmail.com','contact'=>'9087654356');
        DB::table('laravel')->insert($values);
       
        //  $res=DB::table("laravel")->insert(['name'=>"Het",'email'=>"hetcholera@gmail.com",'contact'=>"99586974236"]);
        //  echo $res;
     }
}
?>