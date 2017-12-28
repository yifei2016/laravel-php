<?php
namespace App\Models;

//namespace correspond to folder
//model， use Illuminate\Database\Eloquent\Model
//each model, need $table 指定
//if key no id, use $primaryKey identify key
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model{
  protected $table='admin';
  // protected $table='users';
  //close updata attri when insert data
  public $timestamps = true;

  // protected $fillable=['name','age'];

  
}