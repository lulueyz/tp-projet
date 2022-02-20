<?php

include __DIR__ . '/../models/article.php';
$article = Article ::all();


include __DIR__ . '/views/produit-article/liste.php';



