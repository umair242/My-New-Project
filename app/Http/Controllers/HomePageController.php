<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends VCController
{
    public function getHomePage(){
     //dd (config('pages.home'));
       // return (config('pages.home'));
        return $this->buildpages('home');
    }
}
