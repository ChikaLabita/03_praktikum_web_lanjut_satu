<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        return '<a href=" https://www.educastudio.com/">Educational Games</a>';
    }

    public function products($id){
        return view('praktikum1.products', ['link' => $id]);
    }
    
}
