<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Update_confirmController extends Controller
{
  public function getIndex(Request $request) {

    $view = view('update_confirm');
    $view -> with('id','name','kana');

    return $view;
  }
}