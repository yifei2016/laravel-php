<?php
namespace App\Http\Controllers;

class ArticleController extends Controller{
  public function create(){
    return view('backend.add');
  }
  public function update($id){
    return view('backend.edit');
  }
  public function delete($id){
    dd($id);
  }
  public function show($id){
   dd($id);
  }
  public function getlist(){
    return view('backend.list');
  }
}