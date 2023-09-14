<!DOCTYPE html>
<html lang="fr-FR"
    data-bs-theme="<?= isset($_COOKIE['darkmode']) && $_COOKIE['darkmode'] == 'dark' ? 'dark' : 'light' ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/public/assets/img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title>Tech Feed</title>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row pt-3">
                <div class="col-3 d-flex align-items-center justify-content-center">
                    <a href="/controllers/parameters-ctrl.php"><i class="fa-sharp fa-solid fa-gears"></i></a>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-center">
                    <a href="/index.php"><img src="/public/assets/img/logo.png" alt="logo tech feed" class="img-fluid"
                            id="mainLogo"></a>
                </div>
                <div class="col-3 d-flex align-items-center justify-content-center">
                    <button>
                        <?php if (isset($_COOKIE['darkmode']) && $_COOKIE['darkmode'] == 'dark') { ?>
                        <i class="fa-solid fa-moon"></i>
                        <?php } else { ?>
                        <i class="fa-solid fa-sun"></i>
                        <?php } ?>
                    </button>
                </div>
            </div>
        </div>
    </header>