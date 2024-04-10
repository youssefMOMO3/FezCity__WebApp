<?php
// Vérification du formulaire lors de la soumission
if(isset($_POST['send'])) {
    // Vérification des champs requis
    $required_fields = ['name', 'email', 'phone', 'address', 'location', 'guests', 'arrivals', 'leaving'];
    $errors = [];
    
    foreach($required_fields as $field) {
        if(empty($_POST[$field])) {
            $errors[] = "Le champ $field est requis.";
        }
    }
    
    // Vérification du format d'email
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Adresse email invalide.";
    }
    
    // Vérification du format de téléphone (10 chiffres)
    if(!preg_match("/^[0-9]{10}$/", $_POST['phone'])) {
        $errors[] = "Numéro de téléphone invalide (format: 10 chiffres).";
    }
    
    // Si aucune erreur, traiter les données
    if(empty($errors)) {
        // Traitement des données (insérer dans la base de données, envoyer un email, etc.)
        // Insérer le code pour traiter les données ici
        
        // Redirection après soumission réussie
        header("Location: ./middlewares/confirmation.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Réservation</title>

   <!-- lien CSS swiper -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- lien CDN font awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- lien fichier CSS personnalisé -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php
   include('includes/navbar.php');
?> 

<!-- section en-tête se termine -->

<div class="video-container">
   <video autoplay loop muted plays-inline>
      <source src="./video/V1.mp4" type="video/mp4">
   </video>
   <h1 class="co">Réservez maintenant</h1>
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

   .errors {
    background-color: #f8d7da;
    color: #721c24;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

.errors ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.errors li {
    margin-bottom: 5px;
}

</style>
 
</video>
  
</div>

<!-- section réservation commence -->
<section class="booking">

   <h1 class="heading-title">Réservez votre voyage !</h1>

   <!-- Formulaire de réservation -->
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Nom :</span>
            <input type="text" placeholder="Entrez votre nom" name="name">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Entrez votre email" name="email">
         </div>
         <div class="inputBox">
            <span>Téléphone :</span>
            <input type="tel" placeholder="Entrez votre numéro" name="phone">
         </div>
         <div class="inputBox">
            <span>Adresse :</span>
            <input type="text" placeholder="Entrez votre adresse" name="address">
         </div>
         <div class="inputBox">
            <span>Où aller :</span>
            <input type="text" placeholder="Lieu que vous souhaitez visiter" name="location">
         </div>
         <div class="inputBox">
            <span>Combien de personnes :</span>
            <input type="number" placeholder="Nombre d'invités" name="guests">
         </div>
         <div class="inputBox">
            <span>Arrivée :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>Départ :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="Soumettre" class="btn" name="send">

   </form>

   <!-- Affichage des erreurs -->
   <?php if(!empty($errors)): ?>
       <div class="errors">
           <ul>
               <?php foreach($errors as $error): ?>
                   <li><?php echo $error; ?></li>
               <?php endforeach; ?>
           </ul>
       </div>
   <?php endif; ?>

</section>

<!-- section réservation se termine -->


<?php
   include('includes/footer.php');

 ?> 

<!-- section pied de page se termine -->

<!-- lien JS swiper -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- lien fichier JS personnalisé -->
<script src="js/script.js"></script>

</body>
</html>