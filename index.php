<?php

session_start();

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/models/SimpleOrm.php';

$conn = new mysqli('localhost', 'root', '');

if ($conn->connect_error)
    die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

SimpleOrm::useConnection($conn, 'projet_php');

if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'accueil';

switch ($route) {
    case 'accueil':
        require_once controller('accueil-controller');
        break;
    case 'liste-articles':
        require_once controller('liste-articles-controller');
        break;
    case 'details':
        require_once controller('details-article-controller');
        break;
    case 'modif':
        require_once controller('modif-article-controller');
        break;
    case 'ajout-article':
        require_once controller('ajout-article-controller');
        break;
    case 'suppr':
        require_once controller('suppr-article-controller');
        break;
    case 'connexion':
        require_once controller('connexion-controller');
        connexion();
        break;
    case 'connexion-handler':
        require_once controller('connexion-controller');
        connexion_handler();
        break;
    case 'deconnexion':
        require_once controller('deconnexion-controller');
        break;
    case 'creation-compte':
        require_once controller('creation-compte-controller');
        break;
}