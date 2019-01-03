<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Image;

class UserController extends VCController
{
    public function getRegistrationPage (Request $request){
    return $this->buildPages ('register');
}
public function postRegistrationPage(Request $request){
    dd($request->all ());
}

}