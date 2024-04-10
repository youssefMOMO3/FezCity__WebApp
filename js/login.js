// document.addEventListener("DOMContentLoaded", function() {
//     const signUpButton = document.querySelector('.img__btn .m--up');
//     const signInButton = document.querySelector('.img__btn .m--in');
//     const container = document.querySelector('.cont');

//     const nameInput = document.querySelector('.sign-up input[type="text"]');
//     const emailInput = document.querySelector('.sign-up input[type="email"]');
//     const passwordInput = document.querySelector('.sign-up input[type="password"]');
//     const signUpForm = document.querySelector('.sign-up');

//     const signInEmailInput = document.querySelector('.sign-in input[type="email"]');
//     const signInPasswordInput = document.querySelector('.sign-in input[type="password"]');
//     const signInForm = document.querySelector('.sign-in');

//     signUpButton.addEventListener('click', () => {
//         container.classList.add("s--signup");
//     });

//     signInButton.addEventListener('click', () => {
//         container.classList.remove("s--signup");
//     });

//     const viderSignUpForm = () => {
//         nameInput.value = '';
//         emailInput.value = '';
//         passwordInput.value = '';
//     };

//     const viderSignInForm = () => {
//         signInEmailInput.value = '';
//         signInPasswordInput.value = '';
//     };

//     const verifySignUpForm = () => {
//         const name = nameInput.value.trim();
//         const email = emailInput.value.trim();
//         const password = passwordInput.value.trim();

//         if (name === "" || email === "" || password === "") {
//             return false;
//         }

//         // Vous pouvez ajouter d'autres validations ici si nécessaire

//         return true;
//     };

//     const verifySignInForm = () => {
//         const email = signInEmailInput.value.trim();
//         const password = signInPasswordInput.value.trim();

//         if (email === "" || password === "") {
//             return false;
//         }

//         // Vous pouvez ajouter d'autres validations ici si nécessaire

//         return true;
//     };

//     signUpForm.addEventListener('submit', (event) => {
//         event.preventDefault(); // Empêche l'envoi du formulaire

//         if (verifySignUpForm()) {
//             console.log("Formulaire d'inscription valide, envoi au serveur...");
//             // Ajoutez ici le code pour envoyer le formulaire d'inscription au serveur
//             viderSignUpForm();
//         } else {
//             console.log("Le formulaire d'inscription contient des erreurs, veuillez corriger.");
//         }
//     });

//     signInForm.addEventListener('submit', (event) => {
//         event.preventDefault(); // Empêche l'envoi du formulaire

//         if (verifySignInForm()) {
//             console.log("Formulaire de connexion valide, envoi au serveur...");
//             // Ajoutez ici le code pour envoyer le formulaire de connexion au serveur
//             viderSignInForm();
//         } else {
//             console.log("Le formulaire de connexion contient des erreurs, veuillez corriger.");
//         }
//     });
// });
