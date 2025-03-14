<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

Class ResponsableController extends Controller {
    public function ProgrammerSejour (){
        return view ('ProgrammerSejour');
    }
    public function SuivreReservation (){
        return view ('SuivreReservation');
    }
    public function AnnulerSejour (){
        return view ('AnnulerSejour');
    }



}