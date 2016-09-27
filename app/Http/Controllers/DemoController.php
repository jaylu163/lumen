<?php
/**
 * Created by PhpStorm.
 * User: luhuajun
 * Date: 2016/9/20
 * Time: 18:14
 */
 namespace App\Http\Controllers;
 use App\Models\UserModel;
 class DemoController extends Controller{

     public function index(){

         echo time();
     }

     public function getUserById(){

           $result = UserModel::getUserById(1);
           print_r($result);die;
     }
 }