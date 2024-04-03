<?php

$connection = mysqli_connect('localhost', 'root', 'azsqaqwxsz', 'project');

if(isset($_POST['send'])){
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $téléphone = $_POST['phone'];
    $adresse = $_POST['address'];
    $lieu = $_POST['location'];
    $invités = $_POST['guests'];
    $arrivée = $_POST['arrivals'];  
    $départ = $_POST['leaving'];

    $request = "INSERT INTO book_form(nom, email, téléphone, adresse, lieu, invités, arrivée, départ) VALUES('$nom','$email','$téléphone','$adresse','$lieu','$invités','$arrivée','$départ')";
    mysqli_query($connection, $request);

    header('location:book.php'); 

} else {
    echo 'Une erreur s\'est produite. Veuillez réessayer !';
}

?>



// // Connexion à la base de données
// $connection = mysqli_connect('localhost', 'root', 'azsqaqwxsz', 'MyData');

// // Vérification si la requête POST a été soumise
// if (isset($_POST['send'])) {
//     // Récupération des données du formulaire et échappement des caractères spéciaux pour éviter les injections SQL
//     $name = mysqli_real_escape_string($connection, $_POST['name']);
//     $email = mysqli_real_escape_string($connection, $_POST['email']);
//     $phone = mysqli_real_escape_string($connection, $_POST['phone']);
//     $address = mysqli_real_escape_string($connection, $_POST['address']);
//     $location = mysqli_real_escape_string($connection, $_POST['location']);
//     $guests = mysqli_real_escape_string($connection, $_POST['guests']);
//     $arrivals = mysqli_real_escape_string($connection, $_POST['arrivals']);
//     $leaving = mysqli_real_escape_string($connection, $_POST['leaving']);

//     // Vérification si tous les champs requis sont remplis
//     if (!empty($name) && !empty($email) && !empty($phone) && !empty($address) && !empty($location) && !empty($guests) && !empty($arrivals) && !empty($leaving)) {
//         // Validation supplémentaire de l'adresse email
//         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             // Validation supplémentaire du numéro de téléphone
//             if (preg_match("/^[0-9]{10}$/", $phone)) { // Vérifie si le numéro de téléphone est composé de 10 chiffres
//                 // Insertion des données dans la base de données
//                 $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";
                
//                 // Exécution de la requête SQL
//                 if(mysqli_query($connection, $request)) {
//                     // Affichage de l'alerte de succès
//                     echo "<div class='content'>";
//                     echo "<div class='alert alert-success alert-white rounded'>";
//                     echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
//                     echo "<div class='icon'><i class='fa fa-check'></i></div>";
//                     echo "<strong>Success!</strong> Changes has been saved successfully!";
//                     echo "</div>";
//                     echo "</div>";
//                 } else {
//                     // Affichage de l'alerte d'erreur de la base de données
//                     echo "<div class='content'>";
//                     echo "<div class='alert alert-danger alert-white rounded'>";
//                     echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
//                     echo "<div class='icon'><i class='fa fa-times-circle'></i></div>";
//                     echo "<strong>Error!</strong> The server is not responding, try again later.";
//                     echo "</div>";
//                     echo "</div>";
//                 }
//             } else {
//                 echo 'Numéro de téléphone invalide (doit contenir 10 chiffres).';
//             }
//         } else {
//             echo 'Adresse email invalide.';
//         }
//     } else {
//         echo 'Veuillez remplir tous les champs obligatoires!';
//     }
// } else {
//     echo 'Erreur: Formulaire non soumis.';
// }
