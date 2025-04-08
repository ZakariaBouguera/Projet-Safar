<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/welcome.css')}}">
        <title> Safar </title>
    </head>
    <body>
        <div  class = "db"> 
            <a href= "/" style = "color:black;"> Accueil </a>   
			<a href= "/Client/Connexion" style = "color:black;"> Profil</a> 
			<a href= "/Client/ConsulterSejour" style = "color:black;"> Séjour</a> 
	    </div>

        <div class="voyages">
        <div class="voyage"  onclick="alert('Découvrez la magie d Alger en partant de Paris ! Entre ses ruelles historiques, son front de mer envoûtant et sa cuisine savoureuse, la capitale algérienne vous promet un dépaysement total. À seulement quelques heures de vol, laissez-vous séduire par son mélange unique de modernité et de tradition. Réservez dès maintenant et vivez une aventure inoubliable')">
            <img src="{{ asset('photos/avionParis.jpg')}}" alt="Alger" class="photoAvion" width="100">
            <div class = "voyage-text"> Voyager de Paris à Alger</div>
        </div>
        <div class="voyage" onclick="alert('Évadez-vous d Alger vers le paradis exotique de Phuket ! Plages de sable fin, eaux turquoise et couchers de soleil inoubliables vous attendent. Entre temples majestueux, cuisine thaïlandaise savoureuse et aventures tropicales, ce voyage promet détente et émerveillement. Réservez votre vol et laissez-vous transporter vers un rêve éveillé !')">
            <img src="{{ asset('photos/avionPukhet.jpg')}}" class="photoAvion" alt="Pukhet">
            <div class = "voyage-text"> Voyager de Alger à Pukhet</div>
        </div>
        <div class="voyage" onclick="alert('Partez d Alger à la découverte de Paris, la ville lumière ! Entre monuments emblématiques, balades romantiques et ambiance chic, chaque coin de rue raconte une histoire. Laissez-vous séduire par la magie parisienne, sa gastronomie raffinée et son art de vivre unique. Un voyage inoubliable vous attend au cœur de l élégance ! ')">
            <img src="{{ asset('photos/avionAlger.jpg')}}" class = "photoAvion" alt="Paris">
            <div class = "voyage-text"> Voyager de Alger à Pukhet</div>
        </div>
    </div>

    </body>
</html>

