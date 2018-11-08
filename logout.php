<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    session_start();
    if (!empty($_SESSION)) {
    session_destroy();
    setcookie('username', '', 1, '/');
    setcookie('PHPSESSID', '', 1, '/');
    
    echo "Adieu, adorateur de la beauté capilaire.<br>";
    echo "<a href='./index.php'> Retour a l'acccueil";
    }





?>
</body>
</html>




