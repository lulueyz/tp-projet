<?php
if (empty($_SESSION['identifiant']) || $_SESSION['identifiant'] != 'admin') die('Erreur 403');


if (empty($_GET['id'])) die('Erreur 404');
 
include_once __DIR__ . '/../models/article.php';
$article = Article::retrieveByPK($_GET['id']);

if(empty($article)) die('Erreur 404');

include __DIR__ . '/../views/produit-article/details-article.php';