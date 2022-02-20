<?php include __DIR__ . '/../parties/header.php'; ?>
<?php include __DIR__ . '/../parties/nav.php'; ?>


<h1>Mes Articles</h1>

<form method="post" action="index.php?route=ajout-produit">
    <div class="form-group row">
        <label for="auteur" class="col-sm-12 col-form-label">Nom</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required autofocus>
        </div>
    </div>
</form>