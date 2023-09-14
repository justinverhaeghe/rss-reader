<div class="container-fluid">
    <div class="row">
        <div class="col-12" id="feeds">
            <div class="row align-items-center justify-content-center pt-2">
                <?php foreach ($mediaSelects as $key => $value) {
                    $image = isset($_COOKIE['darkmode']) && ($_COOKIE['darkmode'] == 'dark') ? $value['imageUrlBlack'] : $value['imageUrl'] ?>
                <div class="col-4 d-flex justify-content-center mb-2">
                    <a href="/controllers/pages-ctrl.php?feed=<?= $value['_id'] ?>">
                        <img src="<?= $image  ?>" alt="logo média" class="img-fluid">
                    </a>
                </div>
                <?php  } ?>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid">

    <?php foreach ($mediaSelects as $key => $value) { ?>
    <div class="row row-cols-1 row-cols-md-3 pt-3 g-2">
        <?php $articles = fnFeed($value['url'], 12);
            for ($j = 0; $j < 12; $j++) {
                $title = $articles[$j][0];
                $date = $articles[$j][1];
                $imageUrl = $articles[$j][2];
                $link = $articles[$j][3];
                $description = $articles[$j][4];
                $imageAlt = $articles[$j][5];
            ?>
        <div class="col">
            <?php include __DIR__ . '/../views/templates/card.php'; ?>
        </div>
        <?php } ?>
    </div>
    <?php
    }
    ?>
</div>