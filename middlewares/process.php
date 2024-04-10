<!-- <?php
// session_start();

// $servername = "localhost";
// $username = "root";
// $password = "azsqaqwxsz";
// $dbname = "project";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $nom = trim($_POST['nom']);
// $email = trim($_POST['email']);
// $message = trim($_POST['message']);

// $errors = [];

// // Vérification si le nom ne contient que des lettres (et des espaces)
// if (!preg_match("/^[a-zA-Z\s]+$/", $nom)) {
//     $errors['nom'] = "Le nom ne doit contenir que des lettres et des espaces.";
// }

// if (strlen($nom) < 5 || strlen($nom) == 0) {
//     $errors['nom'] = "Le nom doit dépasser 5 caractères et ne doit pas être vide.";
// }
// if (!filter_var($email, FILTER_VALIDATE_EMAIL) ||
//     !(
//         substr($email, -10) === "@gmail.com" ||
//         substr($email, -13) === "@usmba.ac.ma" ||
//         substr($email, -11) === "@outlook.com"
//     )) {
//     $errors['email'] = "L'email doit être valide et appartenir à un des domaines autorisés.";
// }
// if (strlen($message) < 5 || strlen($message) == 0) {
//     $errors['message'] = "Le message doit dépasser 5 caractères et ne doit pas être vide.";
// }
// if (strlen($message) > 254) {
//     $errors['message'] = "Le message ne doit pas dépasser 255 caractères.";
// }

// if (empty($errors)) {
//     $sql = "INSERT INTO Commentaires (nom, email, message) VALUES (?, ?, ?)";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("sss", $nom, $email, $message);

//     if ($stmt->execute()) {
//         header("Location: succes.php");
//         exit();
//     } else {
//         echo "Erreur lors de l'insertion : " . $conn->error;
//     }
// } else {
//     // Ici, vous pourriez vouloir afficher les erreurs ou les retourner à l'utilisateur d'une manière ou d'une autre.
//     $_SESSION['errors'] = $errors;
//     $_SESSION['form_inputs'] = $_POST;
// }

// $conn->close();

// ?> -->
