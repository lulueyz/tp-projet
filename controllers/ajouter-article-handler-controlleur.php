<?php
if (empty($_SESSION['identifiant']) || $_SESSION['identifiant'] != 'admin') die('Erreur 403');


if(
    !empty($_POST['titre'])
    && !empty($_POST['image'])
    && !empty($_POST['contenu'])
    && !empty($_POST['date_de_publication'])

    && date_create_from_format('Y-m-d',$_POST['date_de_publication'])

    && filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false
) {

  include __DIR__ . '/../models/article.php';
  $article = new Article;
  $article->titre = $_POST['titre'];
  $article->image = $_POST['image'];
  $article->contenu = $_POST['contenu'];
  $article->date_de_publication = $_POST['date_de_publication'];
  
  $article->save();

  redirection('articles');
} else redirection('ajouter-article');

