<?php
session_start();
if(!isset($_SESSION["email"])) {
    header("Location: ../login.php");
    exit();
}

// Vérifier si l'utilisateur est administrateur
if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] === true) {

    header("Location: ../login.php");
    exit();
} else {

    header("Location: ../login.php");
    exit();
}
?>
