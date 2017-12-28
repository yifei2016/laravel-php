<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model{
  
  protected $table='username';

  public static function check($username,$password){
    $user = LoginModel::where(['username'=>$username]) -> first();
    
    if($user !=null){
      
        if($user->password == $password){
          return true;
        }else{
          return false;
        }
    }else{
      return FALSE;
    }
}
  
}