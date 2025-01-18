
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

    <section class="pt-100px px-3">
        <div class="container">
            <div class="row">
                <h1 class="font-size-2-0rem pt-sans-bold text-center text-black py-3">Riwayat Jadwal</h1>
            </div>
            <div class="row">
            <?php if(!empty($Jadwal)) : ?>
                <?php foreach($Jadwal as $index => $value) : ?>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-3">
                                <img src="/assets/icons/futbol-solid 1.svg" class="w-100 invert-1">
                            </div>
                            <div class="col-9">
                                <h2 class="font-size-1-2em pt-sans-bold">
                                    <?= htmlspecialchars($value["Booking"]["booking_name"], ENT_QUOTES, "UTF-8"); ?>
                                </h2>
                                <h3 class="font-size-1-2em pt-sans-bold">
                                    <i class="fa-solid fa-location-dot me-2"></i>
                                    <?= htmlspecialchars($value["Lapangan"]["lapangan_name"], ENT_QUOTES, "UTF-8"); ?>
                                </h3>
                                <h3 class="font-size-1-2em pt-sans-bold">
                                    <i class="bi bi-clock-fill me-2"></i>
                                    <time datetime="DDMMYYYY">
                                    <?= date('d-M-Y', strtotime(htmlspecialchars($value["Booking"]["booking_time_start"], ENT_QUOTES, "UTF-8"))); ?>
                                    </time>
                                    (<?= date('H:i', strtotime(htmlspecialchars($value["Booking"]["booking_time_start"], ENT_QUOTES, "UTF-8"))); ?>
                                        - 
                                    <?= date('H:i', strtotime(htmlspecialchars($value["Booking"]["booking_time_end"], ENT_QUOTES, "UTF-8"))); ?>)
                                </h3>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <h2 class="text-center pt-sans-bold font-size-2-0em">Tidak Ada Riwayat</h2>
            <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pelanggan.php" ?>
    <script type="module" src="/app/resource/js/dashboard.js"></script>

</body>

</html>