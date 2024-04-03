<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Accueil</title>

   <!-- Lien CSS de Swiper -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- Lien CDN de Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- Lien du fichier CSS personnalisé -->
   <link rel="stylesheet" href="css/style.css">
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
  

<?php
   include('includes/navbar.php');

 ?> 

<!-- Section en-tête se termine ici -->

<!-- Section Accueil commence ici -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>Explorer, Découvrir, Voyager</span>
               <h3>VISITEZ FÈS</h3>
               <a href="about.php" class="btn">Découvrez</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/bg1.jpg) no-repeat">
            <div class="content">
            <span>Explorer, Découvrir, Voyager</span>
               <h3>Découvrir de nouveaux endroits</h3>
               <a href="about.php" class="btn">Découvrez</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/bg2.jpg) no-repeat">
            <div class="content">
            <span>Explorer, Découvrir, Voyager</span>
               <h3>Rendez votre visite inoubliable</h3>
               <a href="about.php" class="btn">Découvrez</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- Section Accueil se termine ici -->
<!-- Section À propos de la maison commence ici -->

<section class="home-about">

   <div class="image">
      <img src="img/f.jpg" alt="">
   </div>

   <div class="content">
      <h3>À propos</h3>
      <p>Fès, située au cœur du Maroc, est une ville emblématique qui attire les voyageurs du monde entier. Son histoire millénaire, son architecture fascinante et sa culture vibrante en font une destination incontournable pour les amateurs de tourisme.</p>
      <a href="about.php" class="btn">En savoir plus</a>
   </div>

</section>

<!-- Section À propos de la maison se termine ici -->

<!-- Section Forfaits Accueil commence ici -->

<section class="home-packages">

<h1 class="heading-title">Top destinations</h1>

<div class="box-container">

   <div class="box">
      <div class="image">
         <img src="img/2.webp" alt="">
      </div>
      <div class="content">
         <h3>Fès el-Bali</h3>
         <p>C'est le cœur historique de Fès, un labyrinthe de ruelles étroites qui n'a pas changé depuis le Moyen Âge. La médina est un site du patrimoine mondial de l'UNESCO, plein de marchés, de mosquées, de madrasas et de palais.</p>
         <a href="book.php" class="btn">Rèserver</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="img/3.jpg" alt="">
      </div>
      <div class="content">
         <h3>Université Al Quaraouiyine</h3>
         <p>Fondée en 859, c'est l'une des plus anciennes universités en fonctionnement continu au monde. Elle est un centre d'apprentissage islamique et un must pour ceux qui s'intéressent à l'histoire et à la culture.</p>
         <a href="book.php" class="btn">Rèserver</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="img/1.jpg" alt="">
      </div>
      <div class="content">
         <h3>Médersa Bou Inania</h3>
         <p>Un exemple exquis de l'architecture marocaine, avec ses détails en stuc finement travaillés, ses sculptures sur bois et ses zelliges (carreaux de céramique) colorés. C'est l'une des rares institutions religieuses de Fès ouverte aux non-musulmans.</p>
         <a href="book.php" class="btn">Rèserver</a>
      </div>
   </div>

      </div>

   </div>

   <div class="load-more"> <a href="about.php" class="btn">Voir plus</a> </div>

</section>

<!-- Section Forfaits Accueil se termine ici -->



<!-- Section Services commence ici -->

<section class="services">

   <h1 class="heading-title"> Nos services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Aventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Guide touristique</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Randonnée</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Feu de camp</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Tout-terrain</h3>
      </div>
<!-- 
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Camping</h3>
      </div> -->

   </div>

</section>

<!-- Section Services se termine ici -->







<!-- Section Offre d'accueil commence ici -->

<section class="home-offer">
   <div class="content">
      <h3>Jusqu'à 50% de réduction</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">Réservez maintenant</a>
   </div>
</section>

<!-- Section Offre d'accueil se termine ici -->


<br>
<br>



<?php
   include('includes/contact.php');
?> 
<!-- Inclusion de la section contact -->

<br>
<br>


<?php
   include('includes/footer.php');

 ?> 

<!-- Lien JS de Swiper -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Lien du fichier JS personnalisé -->
<script src="js/script.js"></script>

</body>
</html>
