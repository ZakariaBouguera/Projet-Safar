<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

Class ClientController extends Controller {
    public function ConsulterProfil (){
        return view ('ConsulterProfil');
    }
    public function ReserverSejour (){
        return view ('Reservation');
    }
    public function AnnulerReservation(){
        return view ('AnnulerReservation');
    }
    public function ConsulterSejour(){
        return view ('ConsulterSejour');
    }


}
?>