<?php
require_once __DIR__ . '/../helpers/fnFeed.php';
$script_js = 'pages';

$json = file_get_contents('../config/feeds.json');
$feeds = json_decode($json, true);

$mediaSelects = [];

if (isset($_GET['feed'])) {
    $choice = trim(htmlspecialchars($_GET['feed']));
    foreach ($feeds as $keyFeed => $feed) {
        if ($feed["_id"] == $choice) {
            array_push($mediaSelects, $feed);
        }
    }
}
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/pages.php';
include __DIR__ . '/../views/templates/footer.php';
