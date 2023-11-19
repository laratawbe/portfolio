<?php
session_start();

if (isset($_POST["username"]) && isset($_POST["pass"])) {
    $user = new stdClass();
    $user->fullname = $_POST["fullname"];
    $user->password = $_POST["pass"];
    $user->username = $_POST["username"];
    $user->sex = $_POST["sex"];
    $user->birthdate = $_POST["birthdate"];

    $success = signup($user);
} 

if ($success) {
    $_SESSION["user"] = $user->username;  
    header("Location:../pages/home.php");
} else {
    header("location:signup.php"); 
}

function signup($user)
{
    $jsonFile = "../json/user.json";

    $userData = file_get_contents($jsonFile);
    $users = json_decode($userData, true);

    foreach ($users as $existingUser) {
        if ($existingUser['username'] == $user->username) {
            return false;
        }
    }

    $users[] = [
        "fullname" => $user->fullname,
        "username" => $user->username,
        "password" => $user->password,
        "sex" => $user->sex,
        "birthdate" => $user->birthdate
    ];

    file_put_contents($jsonFile, json_encode($users, JSON_PRETTY_PRINT));

    return true;
}
?>
