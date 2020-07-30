<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class quizController extends Controller
{
  public function add(Request $request)
  {
      return view('admin.zodiac_signs.quiz');
  }
}

