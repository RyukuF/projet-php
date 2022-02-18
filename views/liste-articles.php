<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; ?>

<h1>Tous les articles</h1>

<div class="card-container">

    <?php foreach ($articles as $a) { ?>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?= titre($a) ?></h4>
                <p class="card-text"><?= $a->date_de_publication ?></p>
                <a href="<?= url('details') ?>&id=<?= $a->id ?>" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
            </div>
        </div>

    <?php } ?>

</div>

<?php require_once 'footer.php'; ?>