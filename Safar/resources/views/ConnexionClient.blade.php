<<<<<<< HEAD
<form method="POST" action="/clients/connecter" >

{{csrf_field()}}
=======
<form method="POST" action="/Client/Connecter" >
>>>>>>> origin/Hakim

<label for="nom" > Nom de Connexion : </label>
<input type="text" name = "email">

<label for ="mdp"> Mot de passe : </label>
<input type = "password" name = "mdp">

<input type = "submit" value = "Se connecter">


{{csrf_field()}}

</form>



