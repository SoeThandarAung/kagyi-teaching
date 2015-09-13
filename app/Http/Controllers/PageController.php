<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        $posts = array('He','Nic','Dona','Yo');
        return view('home',compact('posts')); //check compact
    }
    public function about($name){
        //dd($name);

        return view('about',compact('name'));
    }
    public function contact(){
        return view('contact');
    }
}
