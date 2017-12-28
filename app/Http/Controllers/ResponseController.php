<?php
namespace App\Http\Controllers;

class ResponseController extends Controller{

 // use response return json
  public function rj(){
    //return json
    $data=['name'=>'jenny', 'age'=>18];
    return response()->json($data);
  }
  // 
  // public function download(){
    
  //   return response()->download();
  // }

  
}