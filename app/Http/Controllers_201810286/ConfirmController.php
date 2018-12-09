<?php

namespace App\Http\Controllers;/////////////////

use Illuminate\Http\Request;/////////////////

class ConfirmController extends Controller/////////////////
{
public function getIndex(Request $request) {/////////////////

    $name1 = $request->session()->get('users1');/////////////////
    $kana1 = $request->session()->get('users2');/////////////////
    $view = view('confirm');/////////////////
    $view->with('name1',$name1);/////////////////
    $view->with('kana1',$kana1);/////////////////ß
    return $view;
  }
}