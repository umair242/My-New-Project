<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductPagesController extends VCController
{
    public function getLaptopPage(){
        //dd (config('Products.pages.Laptops'));
        
           return $this->buildpages('laptops');
    }
}
