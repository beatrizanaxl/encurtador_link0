<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientesController extends Controller
{
    public function clientes(){
        return view('site.clientes');
    }
}
