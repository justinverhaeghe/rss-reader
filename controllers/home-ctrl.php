<?php
require_once __DIR__ . '/../helpers/fnFeed.php';
$mediaSelects = [
    '/public/assets/img/figaro.png' => 'https://www.lefigaro.fr/rss/figaro_secteur_high-tech.xml',
    '/public/assets/img/lemonde.png' => 'https://www.lemonde.fr/technologies/rss_full.xml',
    '/public/assets/img/zdnet.png' => 'https://www.zdnet.fr/feeds/rss/actualites/internet/',
];
$display = 6;
$script_js = 'home';

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/home.php';
include __DIR__ . '/../views/templates/footer.php';
