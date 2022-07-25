<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function hello(){
      return "hello";
  }

    public function yachi()
    {
        return "我上傳成功啦!再來一次";
    }
    public function ss(){
      return "我又來了!!";
    }
}