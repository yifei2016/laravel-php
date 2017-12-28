<?php
namespace App\Http\Controllers;

class ViewController extends Controller{
  public function show(){
    return view('layout.view', ['name'=>'jein']);
  }
  //=====template
  public function template(){
    //return view('template.master');
    //display child
    return view('template.child');
  }
  public function blade(){
    $h1_name='<h1>nnn</h1>';
    return view('layout.display', ['name'=>'yyy', 'h1'=>$h1_name]);
  }
  public function ifTest(){
    $arr=[1,2,3,4,5,6];
    return view('layout.if', ['arr'=>$arr]);
  }

  public function loop(){
    $arr=[1,2,3,4,5,6];
    return view('layout.loop',['arr'=>$arr]);
  }
}