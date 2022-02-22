<?php require_once view('header'); ?>

<?php require_once 'nav.php'; ?>

<h1>Création de compte</h1>

<form method="post">
    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oups !</strong> Vous avez mal rempli le formulaire
        </div>
    <?php } ?>

    <?php if (!empty($error_mdp)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oups !</strong> Les mots de passe ne correspondent pas
        </div>
    <?php } ?>

    <div class="form-group row">
        <label for="identifiant" class="col-12 col-form-label">Identifiant :</label>
        <div class="col-12">
            <input type="text" class="form-control" name="identifiant" id="identifiant" placeholder="Votre identifiant" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-12 col-form-label">Mot de passe :</label>
        <div class="col-12">
            <input type="password" class="form-control" name="password" id="password" placeholder="Votre mot de passe" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="confirm-password" class="col-12 col-form-label">Confirmation mot de passe :</label>
        <div class="col-12">
            <input type="password" class="form-control" name="confirm-password" id="confirm-password" placeholder="Votre mot de passe" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="pseudo" class="col-12 col-form-label">Pseudo :</label>
        <div class="col-12">
            <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Votre pseudo" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="avatar" class="col-12 col-form-label">Avatar (Un url vers une image hébergée est demandé) :</label>
        <div class="col-12">
            <input type="url" class="form-control" name="avatar" id="avatar" placeholder="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Wolf_at_Woburn_Safari_Park.jpg/1280px-Wolf_at_Woburn_Safari_Park.jpg" required>
        </div>
    </div>

    <div class="form-group row">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</form>


<?php require_once view('footer');