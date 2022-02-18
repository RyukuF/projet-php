<?php

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
}