<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
//require "Models/User.php";

Class ClientController extends Controller {
    
    public function ConnexionClient (){
<<<<<<< HEAD
        $login = $_POST ['login'];
        $mdp = $_POST ['password'];
        $requete = "select nom , prenom from client where login = '$login' and mdp = '$mdp'";

=======
        return view('ConnexionClient');
>>>>>>> origin/Hakim
    }

    public function ConnecterClient (){
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $client = User::getConnexionP($email, $mdp);

        
        if($client != FALSE){
            session_start();

            $_SESSION["nom"] = $client["nom"] ; 
            $_SESSION["prenom"] = $client["prenom"];

            //header("Location: /");
            return view('welcome');

        }
        else{
            printf('Identfiant ou mot de passe incorrect.');
            return view('ConnexionClient');
        }
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