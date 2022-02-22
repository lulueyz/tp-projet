<?php

if (empty($_GET['id'])) die ('Erreur 404');

require_once __DIR__ . '/../models/article.php';
$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) die ('Erreur 404');

if (!empty($_POST)) {



if (
  !empty($_POST['titre'])
  && !empty($_POST['image'])
  && !empty($_POST['contenu'])
  && !empty($_POST['date_de_publication'])



  && filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false
) {

 
  
  $article->titre = $_POST['titre'];
  $article->image = $_POST['image'];
  $article->contenu = $_POST['contenu'];
  $article->date_de_publication = $_POST['date_de_publication'];

  $article->save();

  redirection('articles');
  } else $error = true;
}
include __DIR__ . '/../views/parties/modifier.php';