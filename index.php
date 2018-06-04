<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 1</title>
  </head>
  <body>
    <?php
    session_start();
    $user = $_SERVER['HTTP_USER_AGENT'];
    $ip = $_SERVER['SERVER_ADDR'];
    $server = $_SERVER['SERVER_NAME'];

    $_SESSION["nom"] = "FIEVET";
    $_SESSION["prenom"] = "Nicolas";
    $_SESSION["age"] = "38";

    // session_destroy();
    // $nicolas = "test"
    // $log = $_POST["login"];
    // $fin = time() * 60 * 60 * 24;
    // setcookie("login", $_POST["login"], time()+3600);
    // setcookie("login", $log, time()+3600);

    // setcookie("mdp", $_POST["mdp"]; time()+3600);
    // echo $_COOKIE["login"];

    setcookie("login",$_POST["login"]);
    echo $_COOKIE["login"];

    ?>

    <p><h1>L' User Agent est:</h1> <?= $user?></p>
    <p><h1>L' Adresse ip est:</h1> <?= $ip?></p>
    <p><h1>Le nom du serveur est:</h1> <?= $server?></p>

    <h2>Lien vers la page 2</h2>
      <a href="traitement.php?">page2</a>

    <form class="form1" action="traitement2.php" method="post">
      <label for="login">Login</label>
      <input type="text" name="login" value="">
      <label for="mdp">Mot de passe</label>
      <input type="password" name="mdp" value="">
      <button type="submit" name="button">Valider</button>
    </form>

  </body>
</html>
