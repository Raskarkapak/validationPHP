<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adopte Un Mulet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 

if (!empty($_COOKIE)) {
    session_start();
    $_SESSION['user'] = $_COOKIE['username'];
}


include 'templates/navbar.php' 



?>



    <div class="text">
    <p>Bienvenue sur le premier site de rencontre de mulets ! Découvrez notre selection incroyable de mulets. Ils sont là pour votre plus grand plaisir et peuvent servir à de multiples usages tel que combler un vide affectif, animer une soirée d'anniversaire pour vos enfants, ou encore vous permettre de gagner haut la main un diner de cons... Les possibilités sont infinies ! Faites votres selection et attendez une réponse de leur part !</p>
    </div>
<?php include 'templates/footer.php' ?>





</body>
</html>



