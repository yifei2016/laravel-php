<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
//inherit base Controller, must indicate route first
class StudentController extends Controller{
  public function index(){
    return "hello student";
  }
  //return view
  public function display(){
    return view('display');
  }

  public function red(){
    //==========redirect to local
    // return redirect("/student");
      //==========redirect to google
       //return redirect('http://www.google.com')
       //==========
      return Redirect::to('/student');
  }
//redirect to controller 
  public function redToAction(){
    return redirect()->action('StudentController@display');
  }
  
  public function show($id){
    return 'student id='.$id;
  }
 
  public function redToActionWithPar(){
    return redirect() -> action('StudentController@show', ['id'=>1234567]);
  }

}