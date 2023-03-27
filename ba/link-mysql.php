<?php

$dsn = 'mysql:host=localhost;dbname=smo';  // avant tout il faut créer une nouvelle base de donnée à partir de PHPmyadmin qui portera le nom 'projet-neptune'
$user = 'root'; // à modifier selon le compte ('root' généralement)
$password = ''; // champ laissé à vide quand on se connecte avec le compte 'root' sinon mettre votre mdp.

try {
    $dbh = new PDO($dsn, $user, $password);
} 
catch (PDOException $e) {
    echo 'ERROR, RETRY.' . $e -> getMessage() ;
}
