<?php

session_start();

/* include_once 'config.php'; */
 

include_once 'function.php';
include_once 'models/SimpleOrm.php';
$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error)
die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

SimpleOrm::useConnection($conn,'projet_php');



if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'home';


switch ($route) {
    case 'home':
        include __DIR__ . '/controllers/home-controller.php';
        break;

    case 'articles':
        include __DIR__ . '/controllers/articles-controlleur.php';
        break;

    case 'details-article':
        include __DIR__ . '/controllers/details-article-controlleur.php';
        break;

    case 'ajouter-article':
        include __DIR__ . '/controllers/ajouter-article-controlleur.php';
        break;

    case 'ajouter-article-handler':
        include __DIR__ . '/controllers/ajouter-article-handler-controlleur.php';
        break;

    case 'modifier-article':
        include __DIR__ . '/controllers/modifier-article-controlleur.php';
        break;


    case 'supprimer-article':
        include __DIR__ . '/controllers/supprimer-article-controlleur.php';
        break;

    case 'connexion':
        include __DIR__ . '/controllers/authentication/connexion-controlleur.php';
        break;

    case 'connexion-handler':
        include __DIR__ . '/controllers/authentication/connexion-handler-controlleur.php';
        break;


    case 'deconnexion':
        include __DIR__ . '/controllers/authentication/deconnexion-controlleur.php';
        break;


    default:
        die('Erreur 404');
}
