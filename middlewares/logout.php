<?php
session_start(); // Démarre la session
session_unset(); // Supprime toutes les variables de session
session_destroy(); // Détruit la session

// Redirection vers la page d'accueil ou une autre page après la déconnexion
header("Location: ../login.php"); // Vous pouvez remplacer "home.php" par l'URL de la page vers laquelle vous souhaitez rediriger après la déconnexion
exit; // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
?>
