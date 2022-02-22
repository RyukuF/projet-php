<nav class="nav justify-content-center">
    <a class="nav-link" href="<?= url('accueil') ?>">Accueil</a>
    <a class="nav-link" href="<?= url('liste-articles') ?>">Articles</a>
    <a class="nav-link" href="<?= url('ajout-article') ?>">Ajouter un article</a>

    <?php if (empty($_SESSION['pseudo'])) : ?>
        <a class="nav-link" href="index.php?route=connexion">Connexion</a>
    <?php else : ?>
        <a class="nav-link" href="index.php?route=deconnexion">Déconnexion</a>
        <span class="ml-auto nav-item"><?= $_SESSION['pseudo'] ?></span>
        <img src="<?= $_SESSION['avatar'] ?>" style="height:50px; width:50px;" alt="Avatar de l'utilisateur">
    <?php endif; ?>
</nav>