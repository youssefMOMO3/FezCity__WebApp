<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hèbergement</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<?php
require('./middlewares/db.php'); // Inclure le fichier de connexion à la base de données
include("./middlewares/db.php"); // Inclure le fichier de vérification de session
?>

<body>

<?php
   include('includes/navbar.php');

 ?> 

<div class="video-container">
   <video autoplay loop muted plays-inline>
      <source src="./video/hotel.mp4" type="video/mp4">
   </video>
   <h1 class="co">Hèbergement</h1>
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

   <h1 class="heading-title">Top Hôtels</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/HoImg/1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Riad Fes - Relais & Châteaux</h3>
            <p>Cet hôtel luxueux offre un mélange de design marocain traditionnel et contemporain. Il est réputé pour ses vues imprenables, son excellent service et sa magnifique terrasse sur le toit.</p>
            <a href="https://riadfes.com/fr/" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/HoImg/2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Hotel Sahrai</h3>
            <p>Un hôtel moderne qui combine design contemporain avec des éléments traditionnels marocains. Il dispose de chambres spacieuses, d'un spa et de vues panoramiques sur la médina de Fès.</p>
            <a href="https://hotelsahrai.com/fr/" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/HoImg/3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Palais Faraj</h3>
            <p>Situé dans un palais du 19ème siècle, cet hôtel propose des suites luxueuses, un spa exquis et une restauration raffinée. Son architecture et sa décoration reflètent le riche patrimoine culturel de Fès.</p>
            <a href="https://www.palaisfaraj.com/fr/" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/HoImg/4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Palais Amani </h3>
            <p>Ce riad opulent offre des chambres spacieuses et élégamment décorées, un hammam spa et une terrasse sur le toit avec vue sur la médina.</p>
            <a href="https://www.palaisamani.com/fr/" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/HoImg/5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Riad Laaroussa</h3>
            <p> Cet hôtel est installé dans un palais du 17ème siècle et offre une expérience chaleureuse et authentique. Il dispose d'un jardin, d'un spa et de chambres décorées de manière traditionnelle.</p>
            <a href="https://riad-laaroussa.com/?lang=fr" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/HoImg/6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Riad El Amine Fes</h3>
            <p>Situé à l'entrée de l'ancienne médina, ce riad combine l'artisanat marocain traditionnel avec le confort moderne, offrant une belle cour centrale et un spa.</p>
            <a href="https://www.riadelaminefes.com/" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/HoImg/7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Les Merinides </h3>
            <p>Perché sur les collines surplombant Fès, cet hôtel offre des vues panoramiques sur toute la ville et ses ruines historiques. Il propose des chambres confortables et une fine gastronomie.</p>
            <a href="https://www.lesmerinides.com/fr/availibility?idetab=12414&start_date=2024-05-02&end_date=2024-05-03&adults=2&enfants=0&devise=MAD&track=ghf&utm_campaign=google_ad_click&utm_medium=gha&utm_source=google_paid#/checkprice/availibility" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/HoImg/8.jpg" alt="">
         </div>
         <div class="content">
            <h3>Riad Maison Bleue and Spa</h3>
            <p>Un hôtel charmant offrant des chambres joliment décorées, un spa relaxant et une terrasse sur le toit avec des vues imprenables sur la médina.</p>
            <a href="https://www.maisonbleue.com/?lang=fr" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/HoImg/9.jpg" alt="">
         </div>
         <div class="content">
            <h3>Hotel & Spa Riad Dar Bensouda</h3>
            <p> Un riad authentique magnifiquement restauré, offrant aux invités un havre de paix avec une jolie cour intérieure, une piscine et un hammam traditionnel.</p>
            <a href="https://riaddarbensouda.com/fr/" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/HoImg/10.jpg" alt="">
         </div>
         <div class="content">
            <h3>Riad Braya</h3>
            <p> Au cœur de la médina historique, ce riad élégant dispose d'une piscine intérieure, de chambres luxueuses et d'une terrasse sur le toit.</p>
            <a href="https://www.riadbraya.com/" class="btn">Découvrir Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/HoImg/11.jpg" alt="">
         </div>
         <div class="content">
            <h3>Riad Andalib</h3>
            <p>Un riad moderne offrant un mélange de design traditionnel et contemporain, avec une piscine, un restaurant et des chambres confortables.</p>
            <a href="https://www.riadandalib.ma/" class="btn">Découvrir Plus</a>
         </div>
      </div>

     
      <div class="box">
         <div class="image">
            <img src="images/HoImg/12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Riad Fes Maya Suite & Spa</h3>
            <p>Un riad magnifiquement restauré offrant des suites élégantes, un spa et une terrasse sur le toit avec vue sur la médina de Fès.</p>
            <a href="https://riadfesmaya.com/" class="btn">Découvrir Plus</a>
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