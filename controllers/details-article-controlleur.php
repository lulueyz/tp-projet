<?php 

if (empty($_GET['id'])) die('Erreur 404');
 
include_once __DIR__ . '/../models/article.php';
$article = Article::retrieveByPK($_GET['id']);

if(empty($article)) die('Erreur 404');

include __DIR__ . '/../views/produit-article/details-article.php';