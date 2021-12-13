<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use PDF;

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
        $numbers [] = range(1, 12);
        shuffle($numbers);
        return view("bingo.reporte");
    }
    public function pruebas (){
  $uno = 0;
  $array = ["0CS02453 WINDSHIELD ASSY",
  "0CS92872 2014 DX TRANSMISSION SHIPPING",
  "0CS94014 QTR WINDOW GLASS ASSY RH"
  ,"0CS94021 GLASS ASSY FRONT DOOR LH",
  "0CS94375 FLOOR ASSY CARGO AREA SHORT",
  "0CS94974 MOLDING ASSY SILL RH MP MCA 21",
  "0CS96134 CONVERTER ASSY EXHAUST WPIPE",
  "0CS96137 WINDSHIELD ASSY HD-MCA",
  "0CS96157 UREA FUEL TANK",
  "0CS96926 HEMI UNIVERSAL ENGINE BANSHEE J9",
  "304947 CROSS CAR GRIS",
  "AMORTIGUADOR DELANTERO STRUT",
  "CALIPER P02F-L21B",
  "CANASTILLA CM02-4001 V177",
  "CANASTILLA CM13 N71A",
  "CANASTILLA GB-05",
  "CANASTILLA METALICA SMA CM03-4002",
  "CANASTILLAS MTY",
  "CANASTILLAS WIP",
  "CHASSIS BRAKE",
  "CONSOLAS MP552",
  "CONTENEDOR CIGUEÑAL",
  "CONTENEDOR HDPE 0CCD1013 LX OIL PAN T1XX",
  "CYCLONE 3.5 FRONT COVER",
  "DOLLY MFA2 TEST DOLLY FAN",
  "DOLLY PENDULO",
  "DOOR ARNES N71A",
  "DOOR ARNESS V177",
  "ENGINE RACK VERSION U",
  "ENGRANE Y PIÑON P558 H60 14 CAVIDADES",
  "FCA CABINA",
  "FIXED DOLLY TUBERIAS MANGUERAS Y FRENO",
  "FLOOR PANEL TRUNK 6212908 G20",
  "GMET6 ENGINE ASSY",
  "HONDA OIL SEAL - TAPA PROYECTO HONDA OIL SEAL",
  "HUACAL DE MADERA H60",
  "MAC06619 BULK",
  "MAC26117 REINF ROOF PANEL SUPPORT LONG SUNROOF",
  "MAC28339 TRANSFER CASE",
  "MAC29523 PUBX FRONT END PANEL",
  "MAC29578 BRACKET PUBX WH PNL SHORT RH",
  "MAC30285 PUBX SI INNER PANEL 5´ 9 RH",
  "MAC30872 TRI FAN",
  "MAXION RIN 22.5",
  "OCS96421 REAR DRIVE SHAFT CARDANES - 120.5 LARGO",
  "PILGRIMS TARIMA 48X40C CAJAS POLLO",
  "PLATAFORMA 50X50",
  "PROTOTYPE LEGO KITBOX 1 REFILL DE M1",
  "SNEP ENGINE BANKING",
"STEERING WHEEL UL8",
"SUSPENSION FRT X247",
"TANQUE DE GASOLINA SECUENCIADO - 9 CAVIDADES",
"TORQUE CONVERTER ASSY - CHAROLA 2WF HR201451",
"TOYOTA FRT SHOCK 18PL"];

  shuffle($array);
   foreach($array as $array){
     $uno = $uno+1;
    echo "-";
    echo $array;
    echo "-";
   }     
           
        echo $uno;

       
    }
    public function calendarioVF (){
        return view('calendarios.calendario');
    }
}
