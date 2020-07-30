<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class answerController extends Controller
{
  public function add(Request $request)
  {
    //右辺をDBのクイズテーブルのコレクトアンサーカラムの値に書き換える。
    if ($request->ans == "1"){ 
      $strAns ="正解";
    }else{
      $strAns ="不正解";
    }
    
    return view('admin.zodiac_signs.answer',compact('strAns'));
  }
}
