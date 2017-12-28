<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{

    public function index(){
        return 'photo index';
    }
    //show a form for creating resource
    public function create(){
        return 'photo create';
    }
    //store a newlu created resource in storage, post
    public function store(Request $request){
        
    }
    //display the specified resource//http://127.0.0.1:8000/photo/1/
    public function show($id){
        return 'photo show id='. $id;
    }
    //http://127.0.0.1:8000/photo/1/edit
    public function edit($id){
        return 'photo edit id='. $id;
    }
    //update the specified resource
    public function update(Request $request, $id){
        
    }
    //remove a specified resource from storage, delete
    public function destroy($id){
        
    }
}
