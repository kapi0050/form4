<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Delete_completeController extends Controller
{
  public function getIndex(Request $request) {

    
    // echo $_POST['id'] ."<br>";
    // echo $_POST['name'] ."<br>";
    // echo $_POST['kana'] ."<br>";

    DB::table('formtable4')->where('id',$_POST['id'])->delete();

    $view = view('delete_complete');

        return $view;
  }
}