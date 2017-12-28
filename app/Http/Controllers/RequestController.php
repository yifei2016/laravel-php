<?php
namespace App\Http\Controllers;
//use request
use Illuminate\Http\Request;

class RequestController extends Controller{
  public function req(Request $request){
    // $request->method();//get current http request method
    // $request->isMethod('get');// to see if current request method is needed or not
    // dd($request->url());
    //dd($request->id); //http://127.0.0.1:8000/request?id=3
    // dd($request->isMethod('get'));
  }
// receive post 
  public function add(Request $request){
    //$=======request->all() return all data in form
    // dd($request->all());
  //=======get form input data
    dd($request->input('input'));
  }
}
//all resource are in server,restful api，$php artisan to show command, $php artisan make:controller PhotoController
