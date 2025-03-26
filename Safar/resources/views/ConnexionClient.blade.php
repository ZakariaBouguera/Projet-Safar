<form method="POST" action="/clients/connecter" />

{{csrf_field()}}

<label for="nom" > Nom de Connexion : </label>
<input type="text" name = "login" id="nom">
<label for ="mdp"> Mot de passe : </label>
<input type = "password" name = "mdp" id="mdp">

<input type = "submit" value = "Se connecter">

</form>



