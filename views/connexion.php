<?php require_once view('header'); ?>
<?php require_once 'nav.php'; ?>

<h1>Se connecter</h1>

<form method="post" action="index.php?route=connexion-handler">
    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oups !</strong> <?= $error ?>
        </div>
    <?php } ?>
    
    <div class="form-group row">
        <label for="login" class="col-sm-12 col-form-label">Identifiant</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="login" id="login" placeholder="Identifiant">
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-12 col-form-label">Mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Connexion</button>
            <span><a href="index.php?route=creation-compte">Inscription</a></span>
        </div>
    </div>
</form>

<?php require_once view('footer'); ?>