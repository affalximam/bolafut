
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>

    <link rel="stylesheet" href="/app/resource/css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/19bde2125b.js" crossorigin="anonymous"></script>

</head>

<body class="bg-one">

<?php include __DIR__ . "/../../components/navbar-top-pelanggan.php" ?>

    <section class="pb-5 mb-5">
        <div class="users-profile-picture">
            <div class="top-bg bg-two z-0 pt-75px">
                <span class="d-inline-block text-white ps-3">@affalximam</span>
            </div>
            <div class="img z-2 rounded-circle">
                <img src="/assets/images/image 1.png" class="w-100 h-100" alt="" srcset="">
            </div>
        </div>
        <div class="row text-center">
            <h1 class="font-size-2-0em pt-sans-bold">affalximam 
                <?php $users_id = isset($_GET['users_id']) ? $_GET['users_id'] : ""; ?>
                <?= $users_id; ?>
            </h1>
            <h3 class="font-size-1-5em pt-sans-bold">history</h3>
        </div>
        <div class="row px-3">
            <?php for($i = 1; $i < 10; $i++) : ?>
                <div class="col-md-6 col-xl-4 my-2">
                    <a class="card bg-none ts-0-5s w-100 border-0 px-3 py-2 text-decoration-none pt-sans-bold">
                        <div class="row">
                            <div class="col-3">
                                <img src="/assets/icons/futbol-solid 1.svg" class="invert-1 w-100 m-auto" alt="">
                            </div>
                            <div class="col-9">
                                <h1 class="pt-sans-bold font-size-1-5em">Bluesky VS Blacksteel</h1>
                                <h2 class="pt-sans-bold font-size-1-2em">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Lapangan Futsal 1
                                </h2>
                                <h2 class="pt-sans-bold font-size-1-2em">
                                    <i class="fa-solid fa-clock"></i>
                                    <time datetime="DDMMYYYY">9-11-2024</time>
                                    (21.00 - 22.00)
                                </h2>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pelanggan.php" ?>
    <script type="module" src="/app/resource/js/dashboard.js"></script>

</body>

</html>