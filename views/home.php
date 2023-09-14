<div class="container-fluid">
    <div class="row">
        <div class="col-12" id="feeds">
            <div class="row align-items-center pt-4">
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
        <div class="col-12 pt-5 parameters">
            <h2 class="text-center pt-3 parameters fs-5">Nombres d'articles</h2>
            <form action="" method="get" class="mb-3 pt-1 d-flex justify-content-center parameters">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nbrArticles" id="six" value="6" <?= $display == '6' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="six">
                        6
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nbrArticles" id="nine" value="9" <?= $display == '9' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="nine">
                        9
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nbrArticles" id="twelve" value="12" <?= $display == '12' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="twelve">
                        12
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">

    <?php foreach ($mediaSelects as $key => $value) {
        $image = isset($_COOKIE['darkmode']) && ($_COOKIE['darkmode'] == 'dark') ? $value['imageUrlBlack'] : $value['imageUrl'] ?>
        <div class="d-flex justify-content-center">
            <img src="<?= $image ?>" alt="<?= 'logo' ?>" class="img-fluid p-5">
        </div>
        <div class="row row-cols-1 row-cols-sm-2 justify-content-sm-center row-cols-md-3 g-2">
            <?php $articles = fnFeed($value['url'], $display);
            for ($j = 0; $j < $display; $j++) {
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