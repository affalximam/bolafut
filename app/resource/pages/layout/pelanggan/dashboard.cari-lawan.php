
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

    <section class="cari-lawan mt-5 pt-5 pb-5 mb-5 ts-1-0s">
        <div class="container">
            <div class="row">
                <?php for($i = 1; $i <= 10; $i++) : ?>
                    <div class="col-xl-6 my-2">
                        <a href="/cari-lawan-detail/<?= $i; ?>" class="card bg-none ts-0-5s w-100 border-0 px-3 py-2 text-decoration-none pt-sans-bold">
                            <div class="row">
                                <div class="col-3 pt-3">
                                    <img src="/assets/icons/VS.svg" class="invert-1 w-100 m-auto" alt="">
                                </div>
                                <div class="col-9">
                                    <h1 class="pt-sans-bold font-size-1-5em pt-3">Blacksteel</h1>
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
                <div class="col-xl-6 my-2">
                    <a href="#" class="card bg-none ts-0-5s w-100 border-0 px-3 py-2 text-decoration-none pt-sans-bold">
                        <div class="row">
                            <div class="col-3 pt-3">
                                <img src="/assets/icons/VS.svg" class="invert-1 w-100 m-auto" alt="">
                            </div>
                            <div class="col-9">
                                <span class="bg-two text-white p-1 rounded rounded-2 w-25 text-center d-block position-absolute end-0">
                                    Edit
                                </span>       
                                <h1 class="pt-sans-bold font-size-1-5em pt-3">Blacksteel</h1>
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
            </div>
        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pelanggan.php" ?>

    <script type="module" src="/app/resource/js/dashboard.js"></script>
</body>

</html>