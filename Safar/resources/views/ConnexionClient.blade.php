<form method="POST" action="/Client/Connecter" >

<label for="nom" > Nom de Connexion : </label>
<input type="text" name = "email">

<label for ="mdp"> Mot de passe : </label>
<input type = "password" name = "mdp">

<input type = "submit" value = "Se connecter">


{{csrf_field()}}

</form>



