<?php
require_once __DIR__ . '/../helpers/fnFeed.php';

if(!empty($_GET['nbrArticles'])){

    setcookie('nbrArticles', $_GET['nbrArticles'], (time() + 3600 ), '/');
}

$display = $_COOKIE['nbrArticles'] ?? 6;

$mediaSelects = [
    '/public/assets/img/figaro.png' => 'https://www.lefigaro.fr/rss/figaro_secteur_high-tech.xml',
    '/public/assets/img/lemonde.png' => 'https://www.lemonde.fr/technologies/rss_full.xml',
    '/public/assets/img/zdnet.png' => 'https://www.zdnet.fr/feeds/rss/actualites/internet/',
];

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/home.php';
$script_js = 'home';
foreach ($mediaSelects as $key => $value) { ?>
    <div class="d-flex justify-content-center">
        <img src="<?= $key ?>" alt="<?= 'logo' ?>" class="img-fluid p-3">
    </div>
<?php
    $articles = fnFeed($value, $display);
    for ($j = 0; $j < $display; $j++) {
        $title = $articles[$j][0];
        $date = $articles[$j][1];
        $imageUrl = $articles[$j][2];
        $link = $articles[$j][3];
        $description = $articles[$j][4];
        $imageAlt = $articles[$j][5];
        include __DIR__ . '/../views/templates/card.php';
    }
}


include __DIR__
    . '/../views/templates/footer.php';

?>