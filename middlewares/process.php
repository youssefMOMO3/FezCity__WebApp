<?php
session_start();

require('db.php');

// Réinitialiser les erreurs et les données du formulaire
$_SESSION['errors'] = [];
$_SESSION['form_inputs'] = [];

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données soumises du formulaire
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validation des données
    $isValid = true;

    // Validation du nom
    if (empty($nom)) {
        $_SESSION['errors']['nom'] = "Le nom est requis.";
        $isValid = false;
    }

    // Validation de l'email
    if (empty($email)) {
        $_SESSION['errors']['email'] = "L'email est requis.";
        $isValid = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['email'] = "L'email n'est pas valide.";
        $isValid = false;
    }

    // Validation du message
    if (empty($message)) {
        $_SESSION['errors']['message'] = "Le message est requis.";
        $isValid = false;
    }

    // Si les données sont valides, insérer dans la base de données
    if ($isValid) {
        $sql = "INSERT INTO comments (nom, email, message) VALUES (?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sss", $nom, $email, $message);
        $stmt->execute();

        // Réinitialiser les valeurs des champs dans la session
        $_SESSION['form_inputs']['nom'] = '';
        $_SESSION['form_inputs']['email'] = '';
        $_SESSION['form_inputs']['message'] = '';

        // Redirection vers une autre page
        header("Location: confirmationLog.php");
        exit();
    } else {

        $_SESSION['form_inputs']['nom'] = $nom;
        $_SESSION['form_inputs']['email'] = $email;
        $_SESSION['form_inputs']['message'] = $message;

        // Redirection vers la page précédente
        header("Location: ../home.php");
        exit();
    }
} else {

    header("Location: ../home.php");
    exit();
}
?>
