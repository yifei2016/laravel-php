<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
use Session;
//use load Illuminate\Http\Request;

class LoginController extends Controller{
  
  public function login(){
    return view('login/signin');
  }

  public function storeLogin(){
    $user = new LoginModel();
    $user -> username='yifei';
    $user -> password='yifei';
    $user -> save();
  }

  public function checkLogin(Request $request){
    //error_log('check login.');
    //print('$username');
    //die();
    $username = $request->input('username');
    $password = $request->input('password');
    
    //return (request() -> all());
    // return ($Request -> all());  return ($request -> all());
   //use model check name and password
   $result = LoginModel::check($username, $password);
   if($result == true){
     //use session save login situation
     Session::put('isLogin','yes');
     return redirect('/backend/index');
   }else{
     Session::flash('message', 'sth is wrong');
     return redirect('/login');
   }
  }
 public function logout(){
   Session::forget('isLogin');
 }







}