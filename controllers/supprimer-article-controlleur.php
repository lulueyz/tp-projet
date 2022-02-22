<?php

if (empty($_GET['id'])) die('Erreur 404');

include __DIR__ . '/../models/article.php';

$article = article::retrieveByPK($_GET['id']);

if (empty($article)) die('Erreur 404');

$article->delete();

redirection('articles');
