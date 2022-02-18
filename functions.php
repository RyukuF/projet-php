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