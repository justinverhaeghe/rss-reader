<div class="container-fluid" id="parametersPage">
    <div class="row">
        <div class="col-12 text-center pt-2">
            <h2>Séléction des médias</h2>
            <p>Sélectionnez 3 médias sur les 5 présents</p>

            <form method="post" id="settingsForm">
                <div class=" row">
                    <div class="col-12 checkboxInput">
                        <input type="checkbox" name="choicesFeed[]" id="figaro" value="figaro">
                        <label for="figaro">
                            <img src="/public/assets/img/figaro.png" alt="logo figaro" class="img-fluid mb-3">
                        </label>
                    </div>
                    <div class="col-12 col-md-6 checkboxInput">
                        <input type="checkbox" name="choicesFeed[]" id="lemonde" value="lemonde">
                        <label for="lemonde">
                            <img src="/public/assets/img/lemonde.png" alt="logo lemonde" class="img-fluid mb-3">
                        </label>
                    </div>
                    <div class="col-12 col-md-6 checkboxInput">
                        <input type="checkbox" name="choicesFeed[]" id="zdnet" value="zdnet">
                        <label for="zdnet">
                            <img src="/public/assets/img/zdnet.png" alt="logo zdnet" class="img-fluid mb-3">
                        </label>
                    </div>
                    <div class="col-12 col-md-6 checkboxInput">
                        <input type="checkbox" name="choicesFeed[]" id="lesechos" value="lesechos">
                        <label for="lesechos">
                            <img src="/public/assets/img/lesechos.png" alt="logo lesechos" class="img-fluid mb-3">
                        </label>
                    </div>
                    <div class="col-12 col-md-6 checkboxInput">
                        <input type="checkbox" name="choicesFeed[]" id="cnet" value="cnet">
                        <label for="cnet">
                            <img src="/public/assets/img/cnet.png" alt="logo cnet" class="img-fluid mb-3">
                        </label>
                    </div>

                    <div class="col-12 text-center mb-3">
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

                    <div class="col-12 mb-3">
                        <button type="submit" class="btn btn-outline-light">Soumettre</button>
                    </div>
                </div>
            </form>
        </div>
        <hr>
        <div class="col-8 offset-2 text-center">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="darkmode">
                <label class="form-check-label" for="darkmode">
                    <h2>Dark Mode</h2>
                </label>
            </div>
        </div>
    </div>
</div>