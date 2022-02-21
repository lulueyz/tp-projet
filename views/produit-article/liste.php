<?php include __DIR__ . '/../parties/header.php'; ?>



<h1>Les articles</h1>

<div class="row">
    <?php foreach ($articles as $article) { ?>
        <div class="card col-3">
        <img class="card-img-top" src="<?= $article->image ?>" alt="">
        <div class="card-body">
            <h4 class="card-title"><?= $article->titre ?></h4>
            <p class="card-text"><?= $article->contenu?></p>
        </div>   

    </div>
    <?php } ?>
        
</div>

















<?php include __DIR__ . '/../parties/footer.php';
