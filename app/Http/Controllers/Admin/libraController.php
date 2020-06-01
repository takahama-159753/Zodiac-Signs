<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class libraController extends Controller
{
  public function add()
  {
      return view('admin.zodiac_signs.libra');
  }
}
