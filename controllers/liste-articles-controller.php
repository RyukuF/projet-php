<?php

require_once model('Article');
$articles = Article::all();


require_once view('liste-articles');