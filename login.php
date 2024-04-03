 
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="./middlewares/inscription.php" method="POST">
            <h1>Créer un compte</h1>
        
            <input type="text" name="nom" placeholder="Nom" required />
            <input type="email" name="email" placeholder="E-mail" required />
            <input type="password" name="password" placeholder="Mot de passe" required />
            <input type="password" name="confirm_password" placeholder="Confirmer le mot de passe" required />
            <label>
               J'accepte les termes et conditions <input type="checkbox" name="terms" required />
            </label>
            <button type="submit">S'inscrire</button>
        </form>
    </div>

    <div class="form-container sign-in-container">
        <form action="./middlewares/connexion.php" method="POST">
            <h1>Connexion</h1>

            <input type="email" name="email" placeholder="E-mail" required />
            <input type="password" name="password" placeholder="Mot de passe" required />
            <a href="#">Mot de passe oublié ?</a>
            <button type="submit">Se connecter</button>
        </form>
    </div>
	
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>De retour !</h1>
				<p>Pour rester connecté avec nous, veuillez vous connecter avec vos informations personnelles</p>
				<button class="ghost" id="signIn">Se connecter</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Bonjour</h1>
				<p>Entrez vos coordonnées personnelles et commencez votre voyage avec nous</p>
				<button class="ghost" id="signUp">S'inscrire</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Créé avec <i class="fa fa-heart"></i> par
		<a target="_blank" href="https://www.facebook.com/people/You-Ssef/pfbid0nG4jTnWSrSPgBi2i7rS9khqHgg17taEoAtdHz3rBPHj8hrZpYPsnuFqDf9CEhfa6l/?mibextid=2JQ9oc">Youssef_MoMo</a>
		| Tous droits réservés !
		<a target="_blank" href="https://www.facebook.com/people/You-Ssef/pfbid0nG4jTnWSrSPgBi2i7rS9khqHgg17taEoAtdHz3rBPHj8hrZpYPsnuFqDf9CEhfa6l/?mibextid=2JQ9oc">ici</a>.
	</p>
</footer>

<link rel="stylesheet" href="css/login.css">
<script src="js/login.js"></script>


