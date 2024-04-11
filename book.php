<?php
// Vérifier si une session est active avant de démarrer une nouvelle session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inclusion du fichier de connexion à la base de données
require('./middlewares/db.php');

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
        // Récupérer les valeurs des champs du formulaire
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $location = mysqli_real_escape_string($con, $_POST['location']);
        $guests = mysqli_real_escape_string($con, $_POST['guests']);
        $arrivals = mysqli_real_escape_string($con, $_POST['arrivals']);
        $leaving = mysqli_real_escape_string($con, $_POST['leaving']);

        // Créer la requête d'insertion
        $query = "INSERT INTO reservations (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";
       
        // Exécuter la requête d'insertion
        if(mysqli_query($con, $query)) {
            header("Location: ./middlewares/confirmation.php");
            exit();
        } else {
            echo "Erreur lors de l'insertion des données dans la base de données: " . mysqli_error($con);
        }
    }
}
   
// Vérification du rôle de l'utilisateur et affichage des réservations
if(isset($_SESSION['role'])) {
    $role = $_SESSION['role'];

    // Exécuter la requête SQL appropriée en fonction du rôle de l'utilisateur
    if($role == 'admin') {
        // Pour l'administrateur : récupérer toutes les réservations
        $query = "SELECT * FROM reservations";
    } else {
        // Pour l'utilisateur normal : récupérer les réservations de l'utilisateur connecté
        $userId = $_SESSION['user_id'];
        $query = "SELECT * FROM reservations WHERE user_id = $userId";
    }

    $result = mysqli_query($con, $query);

    // Vérifier s'il y a des réservations
    if(mysqli_num_rows($result) > 0) {
        // Afficher les réservations
        echo "<h1>Liste des réservations</h1>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Nom</th><th>Email</th><th>Téléphone</th><th>Adresse</th><th>Lieu</th><th>Nombre d'invités</th><th>Arrivée</th><th>Départ</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['location']."</td>";
            echo "<td>".$row['guests']."</td>";
            echo "<td>".$row['arrivals']."</td>";
            echo "<td>".$row['leaving']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucune réservation trouvée.";
    }
} else {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: login.php");
    exit();
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
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
    color: #333;
}

tr:hover {
    background-color: #f5f5f5;
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

   <?php
// Vérifier si une session est active avant de démarrer une nouvelle session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Inclusion du fichier de connexion à la base de données
require('./middlewares/db.php');

// Vérification du rôle de l'utilisateur
if(isset($_SESSION['role'])) {
    $role = $_SESSION['role'];

    // Exécuter la requête SQL appropriée en fonction du rôle de l'utilisateur
    if($role == 'admin') {
        // Pour l'administrateur : récupérer toutes les réservations
        $query = "SELECT * FROM reservations";
    } else {
        // Pour l'utilisateur normal : récupérer les réservations de l'utilisateur connecté
        $userId = $_SESSION['user_id'];
        $query = "SELECT * FROM reservations WHERE user_id = $userId";
    }

    $result = mysqli_query($con, $query);

    // Vérifier s'il y a des réservations
    if(mysqli_num_rows($result) > 0) {
        // Afficher les réservations
        echo "<h1>Liste des réservations</h1>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Nom</th><th>Email</th><th>Téléphone</th><th>Adresse</th><th>Lieu</th><th>Nombre d'invités</th><th>Arrivée</th><th>Départ</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['location']."</td>";
            echo "<td>".$row['guests']."</td>";
            echo "<td>".$row['arrivals']."</td>";
            echo "<td>".$row['leaving']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucune réservation trouvée.";
    }
} else {
   //  // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
   //  header("Location: login.php");
    exit();
}
?>


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