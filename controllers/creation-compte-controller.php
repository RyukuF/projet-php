<?php

if (!empty($_POST)) {

    if (
        !empty($_POST['identifiant'])
        && !empty($_POST['password'])

        && !empty($_POST['pseudo'])

    ) {
        require_once model('Utilisateur');
        $utilisateur = new Utilisateur;

        $utilisateur->identifiant = $_POST['identifiant'];
        $utilisateur->mot_de_passe = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $utilisateur->pseudo = $_POST['pseudo'];

        $utilisateur->save();

        redirection('connexion');
    } else $error = true;
}

require_once view('creation-compte');