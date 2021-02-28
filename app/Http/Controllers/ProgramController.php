<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program($id){
        return view('praktikum1.program', ['link' => $id]);
    }
}