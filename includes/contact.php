<!DOCTYPE html>
<!-- Créé par CodingLab - www.codinglabweb.com -->
<html lang="fr" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="./css/contact.css">
    <!-- Lien CDN de Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <style>
      .error-message {
    color: red;
    font-size: 1rem;
    margin-top: 5px;
}
</style>

   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Adresse</div>
          <div class="text-one">Maroc , Fès, 30000 </div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Téléphone</div>
          <div class="text-one">+212 06 30 38 81 37 </div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">berrissoul999@gmail.com</div>
          <div class="text-two">youssef.berrissoul@usmba.ac.ma</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Envoyez-nous un message</div>
        <!-- <p>Si vous avez du travail pour moi ou des types de questions relatives à mon tutoriel, vous pouvez m'envoyer un message d'ici. C'est un plaisir de vous aider.</p> -->
        <br>
        <div class="container">
        <div class="form">
            <form action="./middlewares/process.php" method="POST">
                <div class="input-box">
                    <input type="text" name="nom" placeholder="Entrez votre nom" value="<?php echo htmlspecialchars($_SESSION['form_inputs']['nom'] ?? '', ENT_QUOTES); ?>">
                    <br>
                    <span class="error-message">
                        <?php echo $_SESSION['errors']['nom'] ?? ''; ?>
                    </span>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="email" placeholder="Entrez votre email" value="<?php echo htmlspecialchars($_SESSION['form_inputs']['email'] ?? '', ENT_QUOTES); ?>">
                    <span class="error-message">
                        <?php echo $_SESSION['errors']['email'] ?? ''; ?>
                    </span>
                </div>
                <br>
                <div class="input-box message-box">
                    <textarea name="message" placeholder="Écrivez votre message ici"><?php echo htmlspecialchars($_SESSION['form_inputs']['message'] ?? '', ENT_QUOTES); ?></textarea>
                    <br>
                    <span class="error-message">
                        <?php echo $_SESSION['errors']['message'] ?? ''; ?>
                    </span>
                </div>
                <div class="button">
                    <input type="submit" value="Envoyer maintenant">
                </div>
            </form>
        </div>
    </div>
    <?php
    unset($_SESSION['errors']);
    unset($_SESSION['form_inputs']);
    ?>
    </div>
    </div>
  </div>
</body>
</html>


<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").onsubmit = function(e) {
        let isValid = true;

        // Réinitialisation des messages d'erreur
        document.querySelectorAll('.error-message').forEach(function(span) {
            span.textContent = '';
        });

        let nom = document.querySelector('input[name="nom"]').value;
        let email = document.querySelector('input[name="email"]').value;
        let message = document.querySelector('textarea[name="message"]').value;

        // Vérification du nom et du message
        if (nom.length < 5) {
            document.querySelector('input[name="nom"] + .error-message').textContent = "Le nom doit dépasser 5 caractères.";
            isValid = false;
        }
        if (message.length < 5) {
            document.querySelector('textarea[name="message"] + .error-message').textContent = "Le message doit dépasser 5 caractères.";
            isValid = false;
        }

        // Vérification de l'email
        if (!(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email) && (email.endsWith("@gmail.com") || email.endsWith("@usmba.ac.ma") || email.endsWith("@outlook.com")))) {
            document.querySelector('input[name="email"] + .error-message').textContent = "L'email doit être valide et appartenir à un des domaines spécifiés.";
            isValid = false;
        }

        if (!isValid) {
            e.preventDefault(); // Empêcher la soumission si des erreurs sont trouvées
        }
    };
});

</script>
