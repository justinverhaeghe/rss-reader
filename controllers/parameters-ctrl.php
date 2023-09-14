<?php
$script_js = 'parameters';

$json = file_get_contents('../config/feeds.json');
$feeds = json_decode($json, true);

$choicesFeed = [];

if (isset($_POST['choicesFeed'])) {
    foreach ($_POST['choicesFeed'] as $keyChoice => $choice) {
        $choice = trim(htmlspecialchars($choice));
        if (count($choicesFeed) < 3) {
            foreach ($feeds as $keyFeed => $feed) {
                if ($feed["_id"] == $choice) {
                    array_push($choicesFeed, $feed);
                }
            }
        }
    }
    setcookie('choicesFeed', json_encode($choicesFeed), (time() + 3600), '/');
}

if (isset($_POST['nbrArticles'])) {
    if ($_POST['nbrArticles'] == '6' || $_POST['nbrArticles'] == '9' || $_POST['nbrArticles'] == '12') {
        setcookie('nbrArticles', $_POST['nbrArticles'], (time() + 3600), '/');
    }
}

setcookie('darkmode', 'light', (time() + 3600), '/');
if (isset($_POST['darkmode'])) {
    $darkMode = trim(htmlspecialchars($_POST['darkmode']));
    if ($darkMode == 'on') {
        setcookie('darkmode', 'dark', (time() + 3600), '/');
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('location: home-ctrl.php');
    exit;
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/parameters.php';
include __DIR__ . '/../views/templates/footer.php';
