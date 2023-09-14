<div class="container-fluid" id="parametersPage">
    <div class="row">
        <div class="col-12 text-center pt-2">
            <h2>Séléction des médias</h2>
            <p>Sélectionnez 3 médias sur les 5 présents</p>

            <form method="post" id="settingsForm">
                <div class=" row">
                    <?php foreach ($feeds as $key => $feed) { ?>
                    <div class="col-12 checkboxInput">
                        <input type="checkbox" class="feed" name="choicesFeed[]" id="<?= $feed['_id'] ?>"
                            value="<?= $feed['_id'] ?>">
                        <label for="<?= $feed['_id'] ?>">
                            <img src="<?= isset($_COOKIE['darkmode']) && ($_COOKIE['darkmode'] == 'dark') ? $feed['imageUrlBlack'] : $feed['imageUrl'] ?>"
                                alt="logo <?= $feed['_id'] ?>" class="img-fluid mb-3">
                        </label>
                    </div>
                    <?php } ?>

                    <div class="col-12 col-md-6 text-center mb-3">
                        <h3>Nombre d'articles</h3>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" value="6" type="radio" name="nbrArticles" id="six" checked>
                            <label class="form-check-label" for="six">
                                6
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" value="9" type="radio" name="nbrArticles" id="nine">
                            <label class="form-check-label" for="nine">
                                9
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" value="12" type="radio" name="nbrArticles" id="twelve">
                            <label class="form-check-label" for="twelve">
                                12
                            </label>
                        </div>
                    </div>

                    <div class="form-check form-switch col-12 col-md-6 text-center mb-3">
                        <div class="row">
                            <div class="col-12"><label class="form-check-label" for="darkmode">
                                    <h3>Dark Mode</h3>
                                </label></div>
                            <div class="col-12 d-flex justify-content-center">
                                <input class="form-check-input" name="darkmode" type="checkbox" role="switch"
                                    id="darkmode"
                                    <?= isset($_COOKIE['darkmode']) && $_COOKIE['darkmode'] == 'dark' ? 'checked' : '' ?>>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 mb-3">
                        <button type="submit" class="btn btn-outline-primary">Soumettre</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>