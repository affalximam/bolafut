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

    <section class="jadwal mt-5 pt-5 pb-5 mb-5 ts-1-0s">
        <div class="container">
            <div class="row">
                <?php if(!empty($Jadwal)) : ?>
                    <?php foreach($Jadwal as $index => $value) : ?>
                        <div class="col-md-6 col-xl-4 my-2">
                            <a href="/jadwal-detail/<?= htmlspecialchars($value["Booking"]["booking_id"], ENT_QUOTES, "UTF-8"); ?>" class="card bg-none ts-0-5s w-100 border-0 px-3 py-2 text-decoration-none pt-sans-bold">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="/assets/icons/futbol-solid 1.svg" class="invert-1 w-100 m-auto" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h1 class="pt-sans-bold font-size-1-5em"><?= htmlspecialchars($value["Booking"]["booking_name"], ENT_QUOTES, "UTF-8"); ?></h1>
                                        <h2 class="pt-sans-bold font-size-1-2em">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <?= htmlspecialchars($value["Lapangan"]["lapangan_name"], ENT_QUOTES, "UTF-8"); ?>
                                        </h2>
                                        <h2 class="pt-sans-bold font-size-1-2em">
                                            <i class="fa-solid fa-clock"></i>
                                            <time datetime="DDMMYYYY">
                                                <?= date('d-M-Y', strtotime(htmlspecialchars($value["Booking"]["booking_time_start"], ENT_QUOTES, "UTF-8"))); ?>
                                            </time>
                                            (<?= date('H:i', strtotime(htmlspecialchars($value["Booking"]["booking_time_start"], ENT_QUOTES, "UTF-8"))); ?>
                                                - 
                                            <?= date('H:i', strtotime(htmlspecialchars($value["Booking"]["booking_time_end"], ENT_QUOTES, "UTF-8"))); ?>)
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <h2 class="text-center pt-sans-bold font-size-2-0em">Tidak Ada Jadwal</h2>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pelanggan.php" ?>


    <script type="module" src="/app/resource/js/dashboard.js"></script>
</body>

</html>