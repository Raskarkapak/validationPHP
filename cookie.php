<?php

session_start();
setcookie("username", $_POST['prenom'],time()+3600);
header('Location: ./index.php');
sleep(1);



?>