<?php
include_once 'db.php';
include_once 'user.php';

if(!isset($_SESSION)){
    session_start();
}

$con = new DBConnector();
$pdo = $con->connectToDB();

if(isset($_POST["register"])){
    $userName = $_POST["name"];
    $userEmail = $_POST["email"];
    $userCity = $_POST["city"];
    $userPhoto = $_FILES["image"];
    $userPass = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $user = new User();
    $user->setFullName($userName);
    $user->setEmail($userEmail);
    $user->setinputPass($userPass);
    $user->setCity($userCity);
    $user->setImage($userPhoto);

    $message = $user->register($pdo);
    echo $message;

    header("Location:login.php");
}

if(isset($_POST['login'])){
    $userEmail = $_POST["email"];
    $userPass = $_POST["password"];

    $user = new User();
    $user->setEmail($userEmail);
    $user->setinputPass($userPass);
    $user_details = $user->login($pdo);


    $_SESSION['user_id'] = $user_details['UserID'];
    $_SESSION['user_name'] = $user_details['name_user'];
    $_SESSION['user_email'] = $user_details['Email'];
    $_SESSION['residence'] = $user_details['City'];
    $_SESSION['user_image'] = $user_details['ProfilePic'];

    header("location: index.php");
}

?>