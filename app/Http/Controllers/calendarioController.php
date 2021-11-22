<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;

class calendarioController extends Controller
{
    public function calendarioPP (){
     $tenencias = new DateTime("now");
     $año = date('Y');
     $final = new DateTime("30-03-$año");
     
     if(new DateTime(" 01-02-$año")<= $tenencias and new DateTime(" 30-03-$año")>= $tenencias){
         echo "hola si pase";
     }
    }
    public function calendarioT (){
        return view('calendarios.calendario');
    }
    public function calendarioVE (){
        return view('calendarios.calendarioVE');
    }
    public function calendarioVF (){
        return view('calendarios.calendario');
    }
}
