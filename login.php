<?php
session_start();
require('./middlewares/db.php');

// Vérification du login
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    // Récupérer le mot de passe depuis la base de données
    $query = "SELECT * FROM `users` WHERE email='$email'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_assoc($result);
    
    // Vérifier si l'email existe et si le mot de passe correspond
    if ($row && $password == $row['password']) {
        $_SESSION['email'] = $email;

        // Vérifier si l'utilisateur est un administrateur
        if (isAdmin($email)) {
            $_SESSION['isAdmin'] = true;
        }

        header("Location: home.php");
        exit();
    } else {
        $login_error = "Incorrect Email/Password.";
    }
}

// Processus d'inscription
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Validation de données
    if (empty($username) || empty($email) || empty($password)) {
        $signup_error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $signup_error = "Invalid email format.";
    } else {
        // Vérifier si l'email est déjà utilisé
        $check_query = "SELECT * FROM `users` WHERE email='$email'";
        $check_result = mysqli_query($con, $check_query);
        if (mysqli_num_rows($check_result) > 0) {
            $signup_error = "Email already exists.";
        } else {
            // Insérer les données utilisateur dans la base de données
            $query = "INSERT INTO `users` (username, email, password, create_datetime) VALUES ('$username', '$email', '$password', NOW())";
            $result = mysqli_query($con, $query);
            if ($result) {
                $_SESSION['email'] = $email;
                header("Location: home.php");
                exit();
            } else {
                $signup_error = "Registration failed.";
            }
        }
    }
}

// Fonction pour vérifier si l'utilisateur est un administrateur
function isAdmin($email) {
    $adminEmails = array("admin1@gmail.com", "admin2@gmail.com", "admin3@gmail.com", "admin4@gmail.com", "admin5@gmail.com", "admin6@gmail.com", "admin7@gmail.com", "admin8@gmail.com", "admin9@gmail.com", "youssef.berrissoul@usmba.ac.ma");

    return in_array($email, $adminEmails);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="css/connection.css"/>
    <style>
      
      .error {
    color: red;
    font-size: 14px;
    margin-top: 5px;
    text-align: center; /* Pour centrer le texte horizontalement */
    display: block; /* Pour que le message soit affiché comme un bloc */
    margin: 0 auto; /* Pour centrer le bloc dans son conteneur parent */
        }
        /* Animation de vibration pour les champs de formulaire invalides */
        input:invalid {
            animation: shake 0.5s;
        }

        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }
    </style>
</head>
<body>

<br>
<br>
<br>


<div class="cont">
    <div class="form sign-in">
        <h2>Welcome</h2>
        <form method="post">
            <label>
                <span>Email</span>
                <input type="email" name="email" />
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password" />
            </label>
            <?php if (isset($login_error)) { ?>
                <div class='error'><?php echo $login_error; ?></div>
            <?php } ?>
            <p class="forgot-pass">Forgot password?</p>
            <button type="submit" class="submit">Sign In</button>
        </form>
    </div>
    <div class="sub-cont">
        <div class="img">
            <div class="img__text m--up">
                <h3>Don't have an account? Please Sign up!</h3>
            </div>
            <div class="img__text m--in">
                <h3>If you already have an account, just sign in.</h3>
            </div>
            <div class="img__btn">
                <span class="m--up">Sign Up</span>
                <span class="m--in">Sign In</span>
            </div>
        </div>
        <div class="form sign-up">
            <h2>Create your Account</h2>
            <form method="post" action="">
                <label>
                    <span>Name</span>
                    <input type="text" name="username" required />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" required />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" required />
                </label>
                <?php if (isset($signup_error)) { ?>
                    <div class='error'><?php echo $signup_error; ?></div>
                <?php } ?>
                <button type="submit" class="submit">Sign Up</button>
            </form>
        </div>
    </div>
</div>
<script>
    document.querySelector('.img__btn').addEventListener('click', function() {
        document.querySelector('.cont').classList.toggle('s--signup');
    });
</script>
</body>
</html>
