<?php

namespace App\Http\Controllers;//////////////

use Illuminate\Http\Request;//////////////
use DB;//////////////

class CompleteController extends Controller//////////////
{
  public function getIndex(Request $request) {//////////////

$name1 = $request->session()->get('users1');//////////////
$kana1 = $request->session()->get('users2');//////////////

$users = DB::table('formtable4')->insert(['name' => $name1,'kana' => $kana1]);//////////////


    $view = view('complete');/////////////////
    return $view;//////////////////////
  }
}
