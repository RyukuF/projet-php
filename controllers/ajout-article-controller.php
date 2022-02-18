<?php

function validateDate($date, $format = 'Y-m-d'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

if (!empty($_POST)) {

    if (
        !empty($_POST['auteur'])
        && !empty($_POST['image'])
        && filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false

        && !empty($_POST['titre'])
        && !empty($_POST['contenu'])

        && !empty($_POST['date'])
        && validateDate($_POST['date'])

    ) {
        require_once model('Article');
        $article = new Article;

        $article->auteur = $_POST['auteur'];
        $article->image = $_POST['image'];
        $article->titre = $_POST['titre'];
        $article->contenu = $_POST['contenu'];
        $article->date_de_publication = $_POST['date'];

        $article->save();

        redirection('liste-articles');
    } else $error = true;
}

require_once view('ajout-article');
