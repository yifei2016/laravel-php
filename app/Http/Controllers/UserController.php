<?php

namespace App\Http\Controllers;

use DB;

class UserController extends Controller
{
    public function index(){

      //create sql 
      $sql = "select * from admin"; //search all data in admin table
      // // DB::select($sql); //use DB select excute sql
      $rows = DB::select($sql);
      // dd($rows);//dump
      // return 'hello laravel';
      // $test="this is test";
      return view('list',['rows'=>$rows]);
    }

    public function getId(){
      return 'return id';
    }

    public function getName(){
      return 'return name';
    }
}
