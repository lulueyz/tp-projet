<?php include __DIR__ . '/../parties/header.php'; ?>



<h1>Les articles</h1>

<div class="row">
    <?php foreach ($articles as $article) { ?>
        <div class="card col-3">
            <img class="card-img-top" src="<?= $article->image ?>" alt="">
            <div class="card-body">
                <h4 class="card-title"><?= $article->titre ?></h4>
                <p class="card-text"><?= $article->contenu ?></p>
                <p class="card-text">
                    <a class="text-align-right" href="index.php?route=details-article&id=<?= $article->id ?>">Lire l'article</a>
                    <a class="text-align-right" href="index.php?route=modifier-article&id=<?= $article->id ?>">Modifier</a>
                    <a class="text-align-right text-danger ml-2" href="index.php?route=supprimer-article&id=<?= $article->id ?>" onclick="return confirm('Etes-vous certains de vouloir supprimer ?')">Supprimer</a>
            


                </p>

            </div>

        </div>
    <?php } ?>

</div>
<?php include __DIR__ . '/../parties/footer.php';
