<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends VCController
{
    public function getHomePage(){
//        dd('asd');
//        dd(strlen('$2y$10$RXHKGIFMPRlzP/Usj/CTMueb1pP4D0asquU0j9Rc8bZjAeE7Gqtjq'));
       return $this->buildPages('Admin.dashboard');
       
    }

    public function login(Request $request){
        if( $request->isMethod('post')){
            $data = $request->input();
            if (Auth::attempt(['email'=>$data ['email'],'password'=>$data['password'],'admin'=>'1'])){
                echo "Success"; die;
            }else{
                echo"Failed"; die;
            }
        }
        return $this->buildPages('Admin.login');
    }
}
