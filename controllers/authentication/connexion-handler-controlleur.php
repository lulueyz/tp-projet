<?php

if (!empty($_POST['password']) && !empty($_POST['login'])) {
   include __DIR__ .'/../../models/utilisateur.php';
   $utilisateur = utilisateur::retrieveByField('identifiant', $_POST['login'], SimpleOrm::FETCH_ONE);

if (!empty($utilisateur)){

if (password_verify($_POST['password'], $utilisateur->mot_de_passe)) {
    $_SESSION['identifiant'] = $utilisateur->identifiant;
    $_SESSION['id'] = $utilisateur->id;

    redirection('home');

}  else die('Erreur de mot de passe'); 
}
}

redirection('connexion');