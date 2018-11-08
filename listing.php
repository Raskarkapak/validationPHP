<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <?php 
    if (!empty($_COOKIE)) {
        session_start();
    }

 include 'templates/navbar.php'?>

<?php
$dir = "./mulets";
$scans = scandir($dir);
echo "<div class='liste'>";
function retirer(){
    $file_name = "jeu.zob";
    $file_array = explode('.',$file_name);
    $extension = count($file_array) - 1;
    $new_file_name = substr($file_name,0,strlen($file_array[$extension]));
    echo $new_file_name;
    }

foreach ($scans as $scan) {

    if ($scan!='..' && $scan!='.' && $scan!='.DS_Store') {
    echo '<img class="mul" src=./mulets/'.$scan.'><br>';
    echo '' ;  
    $nomFichier = $scan;
    $nomFichier_array = explode('.',$nomFichier);
    echo '<p class="nom">'.$nomFichier_array[0].'</p>';
    
    }

}
echo "</div>";

?>

<?php include 'templates/footer.php'?>   
</body>
</html>



