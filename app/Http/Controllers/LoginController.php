<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;//データベースを使用する
class LoginController extends Controller
{
  public function getIndex(Request $request) {


    $items = \DB::table('logintb4')->get();//データベースのデータを配列にすべて入れる

//ログイン機能
if(isset($_POST["id"])){
  foreach( $items as $item ) {
    if ($_POST["id"] == $item->userid && 
        $_POST["pass"] == $item->pass) {
        return redirect('../list/index');
    }else{
      //echo "ログインエラー";
    
    }
    //echo "ログインエラー";
  }
  echo "ログインエラー";
}
    $view = view('login');

        return $view;
  }
}