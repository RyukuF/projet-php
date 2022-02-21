<?php require_once view('header'); ?>
<?php require_once 'nav.php'; ?>

<h1>Modifier un article</h1>

<form method="post">
    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oups !</strong> Vous avez mal rempli le formulaire
        </div>
    <?php } ?>

    <div class="form-group row">
        <label for="auteur" class="col-12 col-form-label">Auteur :</label>
        <div class="col-12">
            <input type="text" class="form-control" name="auteur" id="auteur" value="<?= $article->auteur ?>" placeholder="Nom de l'auteur" autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="image" class="col-12 col-form-label">Image (Un url vers une image hébergée est demandé) :</label>
        <div class="col-12">
            <input type="url" class="form-control" name="image" id="image" value="<?= $article->image ?>" placeholder="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Wolf_at_Woburn_Safari_Park.jpg/1280px-Wolf_at_Woburn_Safari_Park.jpg">
        </div>
    </div>

    <div class="form-group row">
        <label for="titre" class="col-12 col-form-label">Titre :</label>
        <div class="col-12">
            <input type="text" class="form-control" name="titre" id="titre" value="<?= $article->titre ?>" placeholder="Titre de l'article">
        </div>
    </div>

    <div class="form-group row">
        <label for="contenu" class="col-12 col-form-label">Texte :</label>
        <div class="col-12">
            <textarea class="form-control" name="contenu" id="contenu" placeholder="Ecrivez votre article !" rows="8" cols="148"><?= $article->contenu ?></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="date" class="col-12 col-form-label">Date de publication :</label>
        <div class="col-12">
            <input type="date" class="form-control" name="date" id="date" value="<?= $article->date ?>"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</form>


<?php require_once view('footer');
