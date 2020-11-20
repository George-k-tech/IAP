<?php
    include_once 'db.php';
    include_once 'user.php';

    session_start();

    $con = new DBConnector();
    $pdo = $con->connectToDB();


    $user = new User();
    $user->logout($pdo);
    header("location:login.php")


?>