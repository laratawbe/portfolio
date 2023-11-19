<?php

$un = $_POST["username"];
$pass = $_POST["password"];

$JsonUser = file_get_contents('../json/user.json');
$userArray = json_decode($JsonUser, true);

$logged = false;

for ($i = 0; $i < count($userArray); $i++) {
    $user = $userArray[$i];

    if ($un == $user["username"] && $pass == $user["password"]) {
        $logged = true;
        break;
    }
}

if ($logged) {
    session_start();
    $_SESSION["username"] = $un;
    $_SESSION["fullname"] = $user["fullname"];
    header("location:../pages/home.php");
}else {
    header("location:../index.php"); 
}
?>
