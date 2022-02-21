<?php include __DIR__ . '/../parties/header.php'; ?>



<h1><?= $article->titre ?></h1>

<div class="row">
    <div class="col-4">
        <img src="<?= $article->image ?>" alt="" class="img-fluid thumbnail">
    </div>
    <div class="col-8">
        <dl>
            <dd>Articles</dd>
            <dt><?= $article->titre ?></dt>

            <dd>Contenu</dd>
            <dt><?= $article->contenu ?></dt>

            <dd>date_de_publication</dd>
            <dt><?= $article->date_de_publication ?></dt>
        </dl>
    </div>
</div>

















<?php include __DIR__ . '/../parties/footer.php';
