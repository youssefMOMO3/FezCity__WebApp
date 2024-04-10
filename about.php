
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>À propos</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>






<body>
   
<!-- header section starts  -->

<?php
   include('includes/navbar.php');

 ?> 
<!-- header section ends -->

<!-- <div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>À propos</h1>
</div> -->

<div class="video-container">
   <video autoplay loop muted plays-inline>
      <source src="./video/V3.mp4" type="video/mp4">
   </video>
   <h1 class="co">À propos</h1>
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
      /*     */
   }
   
</style>
 
</video>
  
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="img/fès2.webp" alt="">
   </div>

   <div class="content">
      <h3>Pourquoi Fès ?? </h3>
      <p>
        Fès, ville impériale et capitale spirituelle du Maroc, ensorcelle ses visiteurs par son authenticité et sa richesse. Sa médina, classée au patrimoine mondial de l'UNESCO, est un labyrinthe fascinant de ruelles étroites, où résonnent les cris des artisans et les effluves des épices. L'Université Al Quaraouiyine, la plus ancienne du monde, témoigne du rayonnement intellectuel de la cité. Les tanneries, aux couleurs vives et aux odeurs intenses, perpétuent un savoir-faire ancestral.</p>
      <p>Fès est une invitation au voyage dans le temps, à la découverte d'un Maroc authentique et vibrant. Laissez-vous envoûter par ses charmes et ses mystères.</p>
      <!-- <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
        <a href="book.php">
        <i class="fas fa-hand-holding-usd"></i>
        <span>affordable price</span>
       </a>
      </div>
    -->
      <!-- </div> --> 
   </div>

</section>

<!-- about section ends -->


<!-- packages section starts  -->

<section class="packages">

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

      <div class="box">
         <div class="image">
            <img src="img/2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Tanneries Chouara </h3>
            <p>Les tanneries de Fès sont célèbres dans le monde entier. La tannerie Chouara, avec ses cuves colorées de teinture et un processus de fabrication qui semble inchangé depuis des siècles, offre un aperçu fascinant de l'artisanat traditionnel.</p>
            <a href="book.php" class="btn">Rèserver</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Palais Royal de Fès</h3>
            <p> Bien que l'entrée au palais lui-même ne soit pas permise, les portes dorées massives et les murs environnants du Palais Royal sont un spectacle impressionnant et une excellente opportunité pour les photographes.</p>
            <a href="book.php" class="btn">Rèserver</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Musée Dar Batha</h3>
            <p>Situé dans un magnifique palais andalou, ce musée abrite une collection de poteries, de bijoux, d'instruments de musique et d'art marocain traditionnel.</p>
            <a href="book.php" class="btn">Rèserver</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/0.jpg" alt="">
         </div>
         <div class="content">
            <h3>Ancienne Médina</h3>
            <p>La médina de Fès, fondée au IXe siècle et inscrite à l'UNESCO, est le cœur historique de Fès, célèbre pour son dédale de ruelles et son riche patrimoine culturel.</p>
            <a href="book.php" class="btn">Rèserver</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/8.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bab Boujloud (Porte Bleue)</h3>
            <p>L'entrée principale de la médina, reconnaissable à ses magnifiques tuiles bleues et vertes. C'est un point de départ parfait pour explorer Fès el-Bali.</p>
            <a href="book.php" class="btn">Rèserver</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Jardin Jnan Sbil</h3>
            <p> Un peu de tranquillité loin de l'agitation de la médina. Ces jardins publics offrent un espace paisible avec des plantes exotiques, un lac, et des allées ombragées.</p>
            <a href="book.php" class="btn">Rèserver</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/10.jpg" alt="">
         </div>
         <div class="content">
            <h3>Fondouk el-Nejjarine</h3>
            <p> Un ancien caravansérail magnifiquement restauré qui abrite maintenant le Musée des Arts et Métiers du Bois, situé sur la place Nejjarine, célèbre pour sa fontaine décorée.</p>
            <a href="book.php" class="btn">Rèserver</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/11.jpg" alt="">
         </div>
         <div class="content">
            <h3>Mausolée de Moulay Idriss II </h3>
            <p>Considéré comme le fondateur de la ville de Fès, le mausolée de Moulay Idriss est un site de pèlerinage important. Bien que l'entrée au sanctuaire soit réservée aux musulmans, les visiteurs peuvent admirer l'extérieur et ressentir l'atmosphère spirituelle.</p>
            <a href="book.php" class="btn">Rèserver</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Médersa Attarine</h3>
            <p>Près de l'Université Al Quaraouiyine, cette médersa est un autre exemple splendide de l'architecture islamique, avec un patio central magnifiquement décoré.</p>
            <a href="book.php" class="btn">Rèserver</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">Plus</span></div>

</section>

<!-- packages section ends -->









<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> Avis des clients </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Fès est un labyrinthe vivant, plein de charme. Les tanneries sont inoubliables !</p>
            <h3>john deo</h3>
            <span>Visiteur</span>
            <!-- <img src="images/pic-1.png" alt=""> -->
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Charmée par Fès, ses cours de cuisine et sa musique andalouse. Une ville qui éveille les sens.</p>
            <h3>john deo</h3>
            <span>Visiteur</span>
            <img src="images/pic-2.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Fès authentique, mais un guide est essentiel pour naviguer la médina.</p>
            <h3>john deo</h3>
            <span>traveler</span>
            <img src="images/pic-3.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>La spiritualité et l'accueil à Fès m'ont touchée. La cuisine est un voyage en soi.</p>
            <h3>john deo</h3>
            <span>traveler</span>
            <img src="images/pic-4.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Passionné d'histoire, j'ai été comblé par Fès. Préparez-vous à beaucoup marcher.</p>
            <h3>john deo</h3>
            <span>traveler</span>
            <img src="images/pic-5.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Fès, un mélange de tradition et modernité. Ne ratez pas le hammam traditionnel !</p>
            <h3>Max</h3>
            <span>Visiteur</span>
            <img src="images/pic-6.png" alt="">
         </div>
         <!-- <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
            <h3>john deo</h3>
            <span>Visiteur</span>
            <img src="images/pic-5.png" alt="">
         </div> -->

         <!-- <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
            <h3>john deo</h3>
            <span>Visiteur</span>
            <img src="images/pic-6.png" alt="">
         </div>
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
            <h3>john deo</h3>
            <span>Visiteur</span>
            <img src="images/pic-5.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
            <h3>john deo</h3>
            <span>Visiteur</span>
            <img src="images/pic-6.png" alt="">
         </div> -->


      </div>

   </div>

</section>

<!-- reviews section ends -->












<?php
   include('includes/footer.php');

 ?> 


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>