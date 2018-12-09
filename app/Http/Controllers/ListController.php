<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ListController extends Controller
{
  public function getIndex(Request $request) {
    if(isset($_POST["Search"])){
      $items = \DB::table('formtable4')->where('name','like',"%{$_POST['Search']}%")
                                       ->orwhere('kana','like',"%{$_POST['Search']}%")
                                       ->get();
          if (count($items)==0 && $_POST["Search"] === ''){
            echo "検索キーワードを";
            //var_dump($items);exit;
            $items = \DB::table('formtable4')->get();
          }


      //var_dump($items);exit;
    }else{
      $items = \DB::table('formtable4')->get();
    }

    //$view = view('list');

    return view('list',[
      "items" => $items//配列をViewに渡す方法
      ]);
  }
}