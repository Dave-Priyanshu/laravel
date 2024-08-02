<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(){
        return view('welcome');
 
    }
    public function showUser(string $id){
        // return view('about',['id' => $id]); One way

        return view('about',compact('id')); //another way
    }

    public function showPost(){
        return view('post');
    }
}
