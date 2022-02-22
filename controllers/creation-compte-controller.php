<?php

if (!empty($_POST)) {

    if (
        !empty($_POST['identifiant'])
        && !empty($_POST['password'])
        && !empty($_POST['confirm-password'])
        && $_POST['password'] == $_POST['confirm-password']
        && !empty($_POST['pseudo'])
        && !empty($_POST['avatar'])
        && filter_var($_POST['avatar'], FILTER_VALIDATE_URL) !== false

    ) {
        require_once model('Utilisateur');
        $utilisateur = new Utilisateur;

        $utilisateur->identifiant = $_POST['identifiant'];
        $utilisateur->mot_de_passe = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $utilisateur->pseudo = $_POST['pseudo'];
        $utilisateur->avatar = $_POST['avatar'];

        $utilisateur->save();

        redirection('connexion');
    } else if ($_POST['password'] != $_POST['confirm-password']){
        $error_mdp = true;
    } else $error = true;
}

require_once view('creation-compte');