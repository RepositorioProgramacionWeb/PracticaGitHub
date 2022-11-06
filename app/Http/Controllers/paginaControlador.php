<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginaControlador extends Controller
{
    public function vista1(){
        return view ('welcome');
    }

    public function vista2(){
        return view ('Vista2');
    }
}
