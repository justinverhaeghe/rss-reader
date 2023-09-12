<?php

$mediaSelects = [
    '/public/assets/img/figaro.png' => 'https://www.lefigaro.fr/rss/figaro_secteur_high-tech.xml',
    '/public/assets/img/lemonde.png' => 'https://www.lemonde.fr/cultures-web/rss_full.xml',
    '/public/assets/img/zdnet.png' => 'https://www.zdnet.fr/feeds/rss/actualites/internet/',
];
$display = 6;

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/home.php';

foreach ($mediaSelects as $key => $value) { ?>
<div class="d-flex justify-content-center">
    <img src="<?= $key ?>" alt="<?= 'logo' ?>" class="img-fluid p-3">
</div>
<?php
    for ($j = 0; $j < $display; $j++) {
        include __DIR__ . '/../views/templates/card.php';
    }
}


include __DIR__
    . '/../views/templates/footer.php';

?>