<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Delete_confirmController extends Controller
{
  public function getIndex(Request $request) {

    $view = view('delete_confirm');
    $view->with('id','name','kana');

        return $view;
  }
}