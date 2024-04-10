<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rèstauration</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

<?php
   include('includes/navbar.php');

 ?> 

<?php
require('./middlewares/db.php'); // Inclure le fichier de connexion à la base de données
include("./middlewares/db.php"); // Inclure le fichier de vérification de session
?>



<div class="video-container">
   <video autoplay loop muted plays-inline>
      <source src="./video/restauration.mp4" type="video/mp4">
   </video>
   <h1 class="co">Rèstauration</h1>
</div>

<style>
   /* Pour une vidéo */
   .video-container {
      position: relative;
      width: 100%;
      height: 0;
      padding-top: 56.25%; /* Ratio 16:9 pour une vidéo */
   }

   .video-container video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
   }

   .video-container h1 {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 40px; /* ajustez la taille du texte selon vos préférences */
      color: white; /* ajustez la couleur du texte selon vos préférences */
      z-index: 1; /* assurez-vous que le texte est au-dessus de la vidéo */
   }
</style>
 
</video>
  
</div>






<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">Top Restaurants</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/ResImg/1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Café Clock</h3>
            <p> Un café culturel connu pour ses cours de cuisine, ses concerts et son fameux burger de chameau. Un endroit parfait pour une pause détente dans la médina.</p>
            <a href="https://www.cafeclock.com/" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ResImg/2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Restaurant Dar Hatim</h3>
            <p>Un restaurant familial offrant une expérience culinaire authentique dans un cadre traditionnel marocain. Idéal pour goûter au couscous et au tajine.</p>
            <a href="https://www.instagram.com/explore/locations/696343606/restaurant-dar-hatim/?max_id=1439131013669651003&hl=fr" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ResImg/3.jpg" alt="">
         </div>
         <div class="content">
            <h3>L'Amandier Palais Faraj</h3>
            <p>Situé dans l'hôtel Palais Faraj, ce restaurant offre une vue panoramique sur la médina et sert une cuisine marocaine et méditerranéenne raffinée.</p>
            <a href="https://www.palaisfaraj.com/fr/restaurant-lamandier-roof-top-garden-du-palais-faraj-de-fes/" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ResImg/4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Le Jardin des Biehn </h3>
            <p> Un oasis de tranquillité dans la médina, où vous pouvez déguster des plats marocains et internationaux dans un beau jardin.</p>
            <a href="https://jardindesbiehn.com/" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ResImg/5.jpg" alt="">
         </div>
         <div class="content">
            <h3>The Ruined Garden</h3>
            <p>Un restaurant et café situé dans les ruines d'un ancien riad, offrant une cuisine marocaine avec une touche moderne.</p>
            <a href="https://ruinedgarden.com/menu" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ResImg/6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Café Fez</h3>
            <p>Un endroit idéal pour une pause thé ou café, connu pour son ambiance décontractée et ses vues sur la médina.</p>
            <a href="https://www.tripadvisor.fr/Restaurants-g293733-c8-Fes_Fes_Meknes.html" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ResImg/7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Restaurant Numero 7</h3>
            <p>Un restaurant unique qui propose un menu changeant, élaboré par des chefs invités de différents horizons, offrant une cuisine moderne avec des ingrédients locaux.</p>
            <a href="" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ResImg/8.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dar Roumana</h3>
            <p> Un riad restaurant offrant une vue magnifique sur la ville et une cuisine marocaine fusion élaborée à partir de produits locaux.</p>
            <a href="https://www.darroumana.com/" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ResImg/9.jpg" alt="">
         </div>
         <div class="content">
            <h3>La Maison Bleue</h3>
            <p>Un restaurant élégant situé dans un riad traditionnel, connu pour sa cuisine raffinée et son cadre somptueux.</p>
            <a href="https://www.maisonbleue.com/restaurants-bars-et-lounges/?lang=fr" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ResImg/10.jpg" alt="">
         </div>
         <div class="content">
            <h3>Chez Rachid</h3>
            <p> Un restaurant décontracté dans la médina, apprécié pour ses plats marocains authentiques à des prix abordables.</p>
            <a href="https://www.facebook.com/p/Restaurant-chez-rachid-100067117571972/?locale=fr_FR" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ResImg/11.jpg" alt="">
         </div>
         <div class="content">
            <h3>Le Tarbouche Fès</h3>
            <p> Un endroit idéal pour goûter à la cuisine libanaise et marocaine, connu pour ses kebabs et ses mezze.</p>
            <a href="https://www.instagram.com/restaurant_le_tarbouche/?hl=fr" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ResImg/12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Palais de Fès Dar Tazi</h3>
            <p>Un excellent choix pour déguster des spécialités marocaines dans un cadre traditionnel, avec une belle terrasse offrant une vue sur la médina.</p>
            <a href="https://www.tripadvisor.fr/Restaurant_Review-g293733-d6376845-Reviews-Palais_De_Fes_Dar_Tazi-Fes_Fes_Meknes.html" class="btn">Découvrir Plus</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">Plus</span></div>

</section>

<!-- packages section ends -->









<?php
   include('includes/footer.php');

 ?> 
<!-- Lien JS de Swiper -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Lien du fichier JS personnalisé -->
<script src="js/script.js"></script>



</body>
</html>