<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class birthdayController extends Controller
{
    public function add()
    {
        return view('admin.zodiac_signs.birthday');
    }
    
    public function selcetZodiacsigns(Request $request)
    {
        $birthday = date('m/d', strtotime($request->birthday));
        $url = "";

        //牡羊座の画面に飛ぶ
        if ($birthday < date("03/21") && $birthday < date("04/19") ){
            $url = "aries";
        } 
        
        //牡牛座の画面に飛ぶ
        else if ($birthday > date("04/20") && $birthday < date("05/20") ){ 
            $url = "taurus";
        } 
        
        //双子座の画面に飛ぶ
        else if ($birthday > date("05/21") && $birthday < date("06/21") ){
            $url = "gemini";
        } 
        
        //蟹座座の画面に飛ぶ
        else if ($birthday > date("06/22") && $birthday < date("07/22") ){ 
            $url =  "cancer";
        } 
        
        //獅子座の画面に飛ぶ
        else if ($birthday > date("07/23") && $birthday < date("08/22") ){ 
            $url =  "leo";
        } 
        
        //乙女座の画面に飛ぶ
        else if ($birthday > date("08/23") && $birthday < date("09/22") ){ 
            $url =  "virgo";
        } 
        
        //天秤座の画面に飛ぶ
        else if ($birthday > date("09/23") && $birthday < date("10/23") ){ 
            $url =  "libra";
        } 
        
        //蠍座の画面に飛ぶ
        else if ($birthday > date("10/24") && $birthday < date("11/22") ){ 
            $url =  "scorpio";
        } 
        
        //射手座の画面に飛ぶ
        else if ($birthday > date("11/23") && $birthday < date("12/21") ){ 
            $url =  "sagittarius";
        } 
        //山羊座の画面に飛ぶ
        else if ($birthday < date("12/22") && $birthday < date("01/20") ){
            $url =  "capricorn";
        } 
        //水瓶座の画面に飛ぶ
        else if ($birthday > date("01/19") && $birthday < date("02/18") ){
            $url =  "aquarius";
        } 
        //魚座の画面に飛ぶ
        else if ($birthday > date("02/19") && $birthday < date("03/20") ){ 
            $url =  "pisces";
        }else{
            dd($birthday);
            return redirect('admin/zodiac_signs/birthday');
        }
        return view('admin.zodiac_signs.' . $url);
    }
}

