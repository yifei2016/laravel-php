<?php
namespace App\Http\Controllers;

use App\Models\UserModel;

class AdminController extends Controller{

  //laravel推荐的单条数据插入方式
  //该方式需要对应的user表有update_at, create_at， 
  //关闭方式， 在UserModel, public $timestamps = false;
  public function insert(){
    $user = new UserModel();
    $user -> name='Yifei';
    $user -> age='12';
    $user -> save();

    //===========fill一次插入多个数据，要在model中通过fillable 指定允许操作的字段
    // $user = new UserModel();
    // $user->fill(['name'=>'Jack', 'age'=>15]);
    // $user -> save();
   // dd($user->id);

    //=============
    // UserModel::create(['name'=>'jack1','age'=>14])
    // ->create(['name'=>'jack2','age'=>14])
    // ->create(['name'=>'jack3','age'=>14])
    // ->create(['name'=>'jack4','age'=>14]);
    
  //==============insert 插入一个大数组，每条小数组都是单独的一行数据
  // UserModel::insert([
  //   ['name'=>'jack1','age'=>14],
  //   ['name'=>'jack2','age'=>14]
  // ]);
    
  }


//read data
  public function select(){
    //read all data,  object
  //  $rows = UserModel::all();

  //get() read的执行函数, toArray convert searched data to array
  //$rows=UserModel::get()->toArray();

//where表示条件, first 表示第一条data
  //$user = UserModel::where('name', 'Tony')->first();

  //$user->id 取出成员 attri id, value函数直接取出id
  //$user=UserModel::where('name','Tony')->value('id');

  //select函数 选择需要查询的字段， 使用get()执行该查询
  $user = UserModel::where('name', 'Tony')->select('age','name')->get()->toArray();
   dd($user);
  }

//=============update data
  public function update(){
    //===========最简单的 way to update
    // $user = UserModel::where(['id'=>1])->first();
    // $user->name='laoli';
    // $user->save();

    //==================
    UserModel::where(['id'=>1])->update(['name'=>'maotao']);
  }
//=================delete data
  public function delete(){
    UserModel::where(['id'=>2])->delete();
  }

}