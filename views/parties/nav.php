<nav class="accueil justify-content-center">
    <a class="accueil-link" href="index.php?route=home">Accueil</a>
    <a class="accueil-link" href="index.php?route=articles">Liste articles</a>

    <?php if (empty($_SESSION['identifiant']) && $_SESSION['pseudo'] == 'admin') : ?>
        <a class="accueil-link" href="index.php?route=ajouter-article">Ajouter un Article</a>
    <?php endif; ?>

    <?php if (empty($_SESSION['identifiant'])) : ?>
        <a class="accueil-link" href="index.php?route=connexion">Connexion</a>
    <?php else : ?>
        <a class="accueil-link" href="index.php?route=deconnexion">Deconnexion</a>
    <?php endif; ?>
</nav>