<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/welcome.css')}}">
        <title>Safar</title>

    </head>
    <body>
        <div class= "imagePrincipale">
            <img src="{{ asset('photos/imageAccueil.jpeg')}}">
        </div>

        <div class = "titre"> Nos Séjours </div>

		<div  class = "db"> 
			<a href= "/Client/Profil" style = "color:black;"> Profil</a> 
			<a href= "/Client/Reservation" style = "color:black;"> Réservation</a> 
			<a href= "/Client/ConsulterSejour" style = "color:black;"> Séjour</a>             
		</div>        
       
    <div class="voyages">
        <div class="voyage" onclick="alert('Voyage à Alger réservé !')">
            <img src="{{ asset('photos/avionParis.jpg')}}" alt="Alger" class="photoAvion" width="100">
            <div class = "voyage-text"> Voyager de Paris à Alger</div>
        </div>
        <div class="voyage" onclick="alert('Voyage à Pukhet réservé !')">
            <img src="{{ asset('photos/avionPukhet.jpg')}}" class="photoAvion" alt="Pukhet">
            <div class = "voyage-text"> Voyager de Alger à Pukhet</div>
        </div>
        <div class="voyage" onclick="alert('Voyage à Paris réservé !')">
            <img src="{{ asset('photos/avionAlger.jpg')}}" class = "photoAvion" alt="Paris">
            <div class = "voyage-text"> Voyager de Alger à Pukhet</div>
        </div>
    </div>

    </body>
</html>
