<?php

erreurEmptyId();

getArticleId();

if (empty($article)) erreur(404);

require_once view('details-article');
