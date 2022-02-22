<?php

function connexion(){
    require_once view('connexion');
}

function connexion_handler(){
    if (!empty($_POST)) {
        if (
            !empty($_POST['login'])
            && !empty($_POST['password'])
        ) {
            require_once model('Utilisateur');
            $utilisateur = Utilisateur::retrieveByField('identifiant', $_POST['login'], SimpleOrm::FETCH_ONE);

            if (!empty($utilisateur)) {
                if (password_verify($_POST['password'], $utilisateur->mot_de_passe)) {
                    
                    $_SESSION['pseudo'] = $utilisateur->pseudo;
                    $_SESSION['identifiant'] = $utilisateur->identifiant;
                    $_SESSION['id'] = $utilisateur->id;
                    $_SESSION['avatar'] = $utilisateur->avatar;

                    redirection('accueil');

                } else die('Mauvais mot de passe');
            } else die('Mauvais identifiant');
        } else die('Formulaire mal rempli');
    }

    if(isset($_POST['rester-co'])){
        setcookie("rester-co", $_POST['id'], time()+2628000);
    }
}