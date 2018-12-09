<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
  public function getIndex(Request $request) {

    $view = view('update');


    if(isset($_POST['id'])){
      //exit;
      //$_POST['id']="ww";
      //var_dump($_POST['id']);exit;
      //echo $_POST['id'] ."<br>";
      //echo $_POST['name'] ."<br>";
      //echo $_POST['kana'] ."<br>";

    $view->with('id','name','kana');
    }



        return $view;
  }
}