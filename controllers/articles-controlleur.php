<?php

include __DIR__ . '/../models/article.php';
$articles = Article ::all();


include __DIR__ . '/../views/produit-article/liste.php';



