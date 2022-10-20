<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficina;
class OficinaController extends Controller
{
    function listar (){
        $offices = Oficina::get();
        return view("oficinas", compact("offices"));
    }
}
