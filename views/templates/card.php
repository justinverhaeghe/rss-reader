<a href="<?= $link ?>" target="_blank">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= $imageUrl ?>" class="img-fluid rounded-start" alt="<?= 'image' . $title ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $title ?></h5>
                    <p class="card-text"><?= $description ?></p>
                    <p class="card-text"><small class="text-body-secondary"><?= $date ?></small></p>
                </div>
            </div>
        </div>
    </div>
</a>