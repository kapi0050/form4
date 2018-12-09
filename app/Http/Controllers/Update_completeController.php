<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Update_completeController extends Controller
{
  public function getIndex(Request $request) {

    // echo $_POST['id'] ."<br>";
    // echo $_POST['name'] ."<br>";
    // echo $_POST['kana'] ."<br>";

    DB::table('formtable4')
    ->where('id', $_POST['id'])
    ->update([
      'name' => $_POST['name']
    ]);

    DB::table('formtable4')
    ->where('id', $_POST['id'])
    ->update([
      'kana' => $_POST['kana']
    ]);

    $view = view('update_complete');

        return $view;
  }
}