
<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> Avis des clients </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

      
            <!-- Section pour afficher les commentaires -->
            <?php
            // Inclure le fichier de connexion à la base de données
            require('./middlewares/db.php');

            // Requête pour sélectionner tous les commentaires
            $sql = "SELECT nom, message FROM comments";
            $result = mysqli_query($con, $sql);

            // Vérifiez s'il y a des résultats
            if (mysqli_num_rows($result) > 0) {
                // Parcourez chaque ligne de résultat
                while($row = mysqli_fetch_assoc($result)) {
                    // Affichez chaque commentaire
                    echo "<div class='swiper-slide slide'>";
                    echo "<p>" . $row["message"] . "</p>";
                    echo "<h3>" . $row["nom"] . "</h3>";
                    echo "<img src='images/image.png' alt='Image'>";
                    echo "</div>";
                }
            } else {
                echo "Aucun commentaire trouvé.";
            }

            // Fermez la connexion à la base de données
            mysqli_close($con);
            ?>
        </div>
    </div>
   
      




     

   </div>

</section>

<!-- reviews section ends -->