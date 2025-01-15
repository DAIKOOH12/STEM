<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){

    }
    public function index(){
        return view('clients.home');
    }
    public function category(){
        return view('clients.category');
    }
    public function itemDetail(){
        return view('clients.item_detail');
    }
    public function cart(){
        return view('clients.cart');
    }
    public function blog(){
        return view('clients.blog');
    }
    public function blogDetail(){
        return view('clients.blog_detail');
    }
    public function contact(){
        return view('clients.contact');
    }
    
}
