<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Lien CSS de Swiper -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- Lien CDN de Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- Lien du fichier CSS personnalisé -->
   <link rel="stylesheet" href="./css/style.css">
   <style>


button.arrow {
   border: 0px;
   padding: 4px;
   border-radius: 5px;
   margin: 0px 10px;
   color: white;
   background: #8e44ad;
   transition-duration: 1s;
   text-decoration: none;
   border-color: #8e44ad;
   text-align: center;
   font-size: 12px;
   font-weight: 700;
   letter-spacing: .02em;
   
}

button.arrow:hover {
   color: white;
   background:rgb(67, 67, 67);;
   margin-right: 20px;
}
</style>

</head>
<body>


<?php
session_start();
require('./middlewares/db.php'); // Inclure le fichier de connexion à la base de données

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['email'])) {
    $button_text = "Déconnexion";
    $button_url = "./login.php"; // Lien vers la page de déconnexion
} else {
    $button_text = "Connexion";
    $button_url = "./login.php"; // Lien vers la page de connexion
}
?>
   
<!-- Section en-tête commence ici -->
<section class="header">
    <a href="home.php" class="logo">FezCity</a>
    <nav class="navbar">
        <a href="home.php"><i class="fas fa-home"></i> Accueil</a>
        <a href="about.php"><i class="fas fa-info-circle"></i> À-Propos</a>
        <a href="hebergement.php"><i class="fas fa-bed"></i> Hébergement</a>
        <a href="restauration.php"><i class="fas fa-utensils"></i> Restauration</a>
        <a href="transport.php"><i class="fas fa-car"></i> Transport</a>
        <a href="dashboard/analyse.html"><i class="fas fa-chart-line"></i> Portail Tourisme</a>

        <!-- Bouton de connexion/déconnexion -->
        <button onclick="window.location.href='<?php echo $button_url; ?>'" class="arrow"><?php echo $button_text; ?></button>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<?php
require('./middlewares/db.php'); // Inclure le fichier de connexion à la base de données
include("./middlewares/db.php"); // Inclure le fichier de vérification de session
?>