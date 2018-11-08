





<?php
if (empty($_SESSION)) {
    echo "<div class='navbar'>
    <a href='./login.php'>Inscrivez Vous!</a>
    </div>";
}else {
    echo "<div class='navbar'>
<a href='./index.php'>Home</a>
<a href='./listing.php'>Catalogue des Mulets</a>
<a id='logout' href='logout.php'>Bienvenue, ".$_SESSION["user"]." ! </a>
</div>";


}






?>