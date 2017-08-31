<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
class captchaController extends Controller
{
     function index(){
         $builder = new CaptchaBuilder();
         $builder->build(150,32);   //获取验证码内容
         $phrase = $builder->getPhrase();
         //把内容存入session
         Session::put('captcha', $phrase);
         ob_clean(); //清除缓存
       return response($builder->output())->header('Content-type','image/jpeg'); //把验证码数据以jpeg图片的格式输出
     }
}
