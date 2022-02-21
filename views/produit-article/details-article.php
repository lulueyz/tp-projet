<?php include __DIR__ . '/../parties/header.php'; ?>



<h1><?= $article->titre ?></h1>

<div class="row">
    <div class="col-4">
        <img src="<?= $article->image ?>" alt="" class="img-fluid thumbnail">
    </div>
    <div class="col-8">
        <dl>
            <dt>Articles</dt>
            <dd><?= $article->titre ?></dd>

            <dt>Contenu</dt>
            <dd><?= $article->contenu ?></dd>

            <dt>date_de_publication</dt>
            <dd><?= $article->date_de_publication ?></dd>
        </dl>
    </div>
</div>

















<?php include __DIR__ . '/../parties/footer.php';
