<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; ?>

<h1><?= titre($article) ?></h1>

<dl>
    <dd>
        <p class="card-text"><?= $article->contenu ?>
    </dd>
    <dd>
        <img src="<?= $article->image ?>" alt="Image de l'article">
    </dd>
    <dd>
        <p class="card-text">@<?= $article->auteur ?></p>
    </dd>
    <dd>
        <p class="card-text"><?= $article->date_de_publication ?></p>
    </dd>
</dl>

<?php require_once 'footer.php'; ?>
