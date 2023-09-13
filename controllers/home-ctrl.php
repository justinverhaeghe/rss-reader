<?php


require_once __DIR__ . '/../helpers/fnFeed.php';
$script_js = 'home';

$json = file_get_contents('../config/feeds.json');
$feeds = json_decode($json, true);
$mediaSelects = array($feeds[0]);

if (!empty($_GET['nbrArticles'])) {
    if ($_GET['nbrArticles'] == '6' || $_GET['nbrArticles'] == '9' || $_GET['nbrArticles'] == '12') {
        setcookie('nbrArticles', $_GET['nbrArticles'], (time() + 3600), '/');
    }
}

if (isset($_COOKIE['choicesFeed'])) {
    $mediaSelects = json_decode($_COOKIE['choicesFeed'], true);
}

$display = $_COOKIE['nbrArticles'] ?? 6;




include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/home.php';
include __DIR__ . '/../views/templates/footer.php';
