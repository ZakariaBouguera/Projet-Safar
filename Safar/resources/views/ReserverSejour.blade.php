<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/welcome.css')}}">
        <title> Safar </title>
    </head>
    <body>
        <div  class = "db"> 
            <a href= "/Client/Connecter" style = "color:black;"> Accueil </a>   
			<a href= "/Client/Profil" style = "color:black;"> Profil</a> 
			<a href= "/Client/Reservation" style = "color:black;"> Réservation</a> 
			<a href= "/Client/ReserverSejour" style = "color:black;"> Séjour</a> 
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
                <div class = "voyage-text"> Voyager de Alger à Paris</div>
            </div>
        </div>
        <h2>Choisissez une date :</h2>

        <form action="/Client/Reservation" method="GET">
            @csrf
            <label for="date_sejour">Date de séjour :</label>
            <select name="date_sejour" id="date_sejour">
                <option value="2025-04-10">10 Avril 2025</option>
                <option value="2025-05-15">15 Mai 2025</option>
                <option value="2025-06-01">1 Juin 2025</option>
            </select>
            <button type="submit">Réserver</button>
        </form>

    </body>
</html>
