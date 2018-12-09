<?php

namespace App\Http\Controllers;//////////////////////////////

use Illuminate\Http\Request;//////////////////////////////

class InputController extends Controller//////////////////////////////
{
public function getIndex(Request $request) {//////////////////////////////
$errors = array();//////////////////////////////
if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {

    if(!isset($_POST['back'])){
        $_SESSION = array();//////////////////////////////
        $name = filter_input(INPUT_POST, 'name');
        $kana = filter_input(INPUT_POST, 'kana');
        $errors = [];
        if (empty($name)) {
            $errors['name'] = '名前は入力必須です。';
        }
        if (empty($kana)) {
            $errors['kana'] = 'フリガナは入力必須です。';
        }
        if (count($errors) == 0) {
            $request->session()->put('users1', $name);//////////////////////////////
            $request->session()->put('users2', $kana);//////////////////////////////
            return redirect('../confirm/index');//////////////////////////////
        }
    }
}
    $view = view('input');//////////////////////////////
    $view->with('name','kana');//////////////////////////////
    $view->with('errors',$errors);//////////////////////////////
    if((isset($_POST['back']))){//////////////////////////////
        $name1 = $request->session()->get('users1');//////////////////////////////
        $kana1 = $request->session()->get('users2');//////////////////////////////
        $view->with('name1',$name1);//////////////////////////////
        $view->with('kana1',$kana1);//////////////////////////////
    }
        return $view;//////////////////////////////
    }
}