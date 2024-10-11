<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class Aulacontroller extends Controller
{
    public function index(){
        
        $aulas = Aula::all();

        return view('aulas', compact('aulas'));
    }
}
