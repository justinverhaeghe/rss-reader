<?php 
$display = $_COOKIE['nbrArticles'] ?? '6';
var_dump($display);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12" id="feeds">
            <div class="row align-items-center pt-2">
                <div class="col-4"><img src="/public/assets/img/figaro.png" alt="logo figaro" class="img-fluid"></div>
                <div class="col-4"><img src="/public/assets/img/lemonde.png" alt="logo monde" class="img-fluid"></div>
                <div class="col-4 d-flex justify-content-center"><img src="/public/assets/img/zdnet.png" alt="logo zdnet" class="img-fluid"></div>
            </div>
        </div>
        <div class="mt-2 parameters">
            <h2 class="text-center pt-3 parameters">Nombres d'articles</h2>
            <form action="" method="" class="mb-3 pt-1 d-flex justify-content-center parameters">
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
    <div class="row">
        <div class="col-12">