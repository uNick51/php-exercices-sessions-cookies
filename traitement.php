<?php
session_start();

echo "Je m'appelle ".$_SESSION["nom"]." ".$_SESSION["prenom"]." et j'ai ".$_SESSION["age"]." ans";
// echo $_SESSION["nom"];
// echo $_SESSION["prenom"];
// echo $_SESSION["age"];
// session_destroy();
 ?>
