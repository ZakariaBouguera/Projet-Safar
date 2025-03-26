<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

Class ClientController extends Controller {
    public function ConnexionClient (){
        return view ('ConnexionClient');
    }
    public function ConnecterClient (Request $req){
        return "Bonjour : ".$req-> input('login');
    }

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