<?php
erreurEmptyId();

require_once model('Article');
$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) erreur(404);

require_once view('details-article');
