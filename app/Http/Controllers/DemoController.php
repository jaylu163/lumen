<?php
/**
 * Created by PhpStorm.
 * User: luhuajun
 * Date: 2016/9/20
 * Time: 18:14
 */
 namespace App\Http\Controllers;
 use App\Models\UserModel;
 use Illuminate\Support\Facades\Mail;
 use Log;
 use DB;
 class DemoController extends Controller{

     public function index(){

         echo time();
     }

     public function getUserById(){

           $result = UserModel::getUserById(1);

           print_r($result);die;
     }


     public function phpinfo(){

         phpinfo();
     }

     public function sendMail(){

         $name = 'demohuaan';
         $flag = Mail::send('emails.test',['name'=>$name],function($message){
             $to = '320211697@qq.com';
             $message ->to($to)->subject('邮件错误警告。。');
         });
         if(!$flag){
             echo '发送邮件成功，请查收！';
         }else{
             echo '发送邮件失败，请重试！';
         }
     }
 }