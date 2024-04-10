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
    padding: 4px 8px;
    border-radius: 5px;
    margin: 0px 10px;
    color: #8e44ad;
    background: white;
    transition-duration: 1s;
    text-decoration: none;
    border-color: #8e44ad;
}

button.arrow:hover {
    color: white;
    background: #8e44ad;
    margin-right: 20px;
}
</style>

</head>
<body>
   
<!-- Section en-tête commence ici -->

<section class="header">

<a href="home.php" class="logo">FezCity</a>
   <nav class="navbar">
     <a href="home.php">
     <i class="fas fa-home"></i>
      Accueil</a>
     <a href="about.php">
     <i class="fas fa-info-circle"></i>
      À-Propos</a>
     <a href="hebergement.php">
                <i class="fas fa-bed"></i>
                Hébergement</a>
            
             <a href="restauration.php">
                <i class="fas fa-utensils"></i>
                Rèstauration</a>

             <a href="transport.php">
                <i class="fas fa-car"></i>
                Transport</a> 

         <a href="dashboard/analyse.html">
       <i class="fas fa-chart-line"> </i> 
       Dashbord</a>
     <!-- <a href="book.php">Réservation</a> -->

     
     
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>