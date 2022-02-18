<?php

function controller(string $nom): string {
    return __DIR__ . '/controllers/' . $nom . '.php';
}

function url(string $route = 'accueil'): string {
    return 'index.php?route=' . $route;
}

function view(string $nom): string {
    return __DIR__ . '/views/' . $nom . '.php';
}

function model(string $nom): string {
    return __DIR__ . '/models/' . $nom . '.php';
}

function titre(object $article): string {
    return ucfirst($article->titre);
}

function erreur(int $code = 500) {
    echo 'Erreur ' . $code;
    die;
}