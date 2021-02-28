<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        echo "Nim : 1941720018";
        echo "<br>";
        echo "Nama: Chika Labita";
    }

    public function about_view(){
        return view('praktikum1.about-us', ['link' => 'about-us']);
    }
}
