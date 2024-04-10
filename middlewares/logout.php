<?php
// Démarrez la session si ce n'est pas déjà fait
session_start();

// Détruisez la session
session_destroy();

// Redirigez l'utilisateur vers la page de connexion
header("Location: ./login.php");
exit(); // Assurez-vous d'arrêter l'exécution du script après la redirection
?>
