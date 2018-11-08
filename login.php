<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style2.css">
</head>
<body>


<form action="./cookie.php" method="post">

  <div class="container">
    <label for="uname"><b>Prénom</b></label>
    <input type="text" placeholder="Prénom" name="prenom">

    <label for="uname"><b>Nom</b></label>
    <input type="text" placeholder="Nom" name="nom">

    <label ><b>Age</b></label>
    <input type="text" placeholder="age" name="age">

    <label for="uname"><b>Sexe</b></label>
    <input type="text" placeholder="sexe" name="sexe">
        
    <label for="uname"><b>Ville</b></label>
    <input type="text" placeholder="ville" name="ville">

   <label for="uname"><b>Mot de passe</b></label>
    <input type="password" placeholder="Mot de passe" name="psw" minlength="8" required>

    <button type="submit">Envoyer</button>
  </div>
<?php




?>
</form>

</body>
</html>
