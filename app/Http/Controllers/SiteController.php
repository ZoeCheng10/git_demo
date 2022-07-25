<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function hello(){
      return "hello";
  }
  public function aaa(){
    return "aaa";
  }
    public function yachi()
    {
        return "我上傳成功啦!";
    }
}
