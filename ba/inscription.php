<?php

require "./link-mysql.php";

if (isset ($_POST["email"])){
    $email = $_POST["email"];
}else {
    $email = "";
}

if (isset ($_POST["password"])){
    $password = $_POST["password"];
    // $password = password_hash($password, PASSWORD_BCRYPT);
}else {
    $password = "";
}


try {
    $insert = $dbh->prepare("INSERT INTO client (email, password) VALUES ('$email','$password')");
    $insert->execute(array('email' => $email, 'password' => $password ));
    header('location: /code/connexion.html');
    exit();
} catch (PDOException $e) {
    echo 'ERROR, RETRY.' . $e -> getMessage() ;
}

?>

    