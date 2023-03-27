<?php

require "link-mysql.php";

if (isset ($_POST["email"])){
    $email = $_POST["email"];
}else {
    $email = "";
}

if (isset ($_POST["password"])){
    $password = $_POST["password"];
}else {
    $password = "";
}

try {
    $select = $dbh->prepare("SELECT * FROM `client` WHERE email= $email ");
    $select->execute();
    $result = $select->fetchAll();
    die();
} catch (PDOException $e) {
    echo 'ERROR, RETRY.' . $e -> getMessage() ;
}



?>
