<?php include __DIR__ . '/parties/header.php'; ?>

<h1>Connexion</h1>


<form method="post" action="index.php?route=connexion-handler">
    <div class="form-group row">
        <label for="login" class="col-sm-12 col-form-label">Identifiant</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="login" id="login" placeholder="Identifiant" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-12 col-form-label">Mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passepassword" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-col-sm-10">
            <button type="submit" class="btn btn-primary">Connexion</button>
        </div>
    </div>
</form>


<?php include __DIR__ . '/parties/footer.php'; ?>