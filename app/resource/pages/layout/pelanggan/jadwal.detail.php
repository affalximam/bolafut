
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


<section class="pt-100px px-5">
    <div class="container">
        <div class="row">
            <h1 class="font-size-2-0rem pt-sans-bold text-center text-black py-3">Detail Jadwal</h1>
            </div>
            <?php if(!empty($Jadwal)) : ?>
                <?php foreach($Jadwal as $index => $value) : ?>
                    <?php if ($value["Booking"]["booking_type"] == "individu") : ?>
                        <div class="row">
                            <h1 class="font-size-1-5rem pt-sans-bold text-center text-black py-3">
                            <?= htmlspecialchars($value["Booking"]["booking_name"], ENT_QUOTES, "UTF-8"); ?>
                            </h1>
                        </div>
                    <?php endif; ?>
                        <div class="row text-center pt-2">
                            <a href="#" class="text-decoration-none font-size-1-2em text-black pt-sans-bold text-center">
                                <i class="fa-solid fa-location-dot me-2"></i>
                                <?= htmlspecialchars($value["Lapangan"]["lapangan_name"], ENT_QUOTES, "UTF-8"); ?>
                            </a>
                            <p class="font-size-1-2em text-black pt-sans-bold text-center">
                                <i class="bi bi-clock-fill me-2"></i>
                                <time datetime="DDMMYYYY">
                                    <?= date('d-M-Y', strtotime(htmlspecialchars($value["Booking"]["booking_time_start"], ENT_QUOTES, "UTF-8"))); ?>
                                </time>
                                (<?= date('H:i', strtotime(htmlspecialchars($value["Booking"]["booking_time_start"], ENT_QUOTES, "UTF-8"))); ?>
                                    - 
                                <?= date('H:i', strtotime(htmlspecialchars($value["Booking"]["booking_time_end"], ENT_QUOTES, "UTF-8"))); ?>)
                            </p>
                        </div>
                    <?php if ($value["Booking"]["booking_type"] == "cari_lawan") : ?>
                        <div class="row">
                            <div class="col-5">
                                <div class="row">
                                    <img src="/assets/icons/futbol-solid 1.svg" class="w-100 invert-1">
                                    <a href="#" class="font-size-1-2em pt-sans-bold text-decoration-none text-black mt-3 text-center">Bluesky</a>
                                </div>
                            </div>
                            <div class="col-2 d-block d-flex flex-column text-center align-items-center justify-content-center">
                                <h2 class="font-size-2-0rem pt-sans-bold">VS</h2>
                            </div>
                            <div class="col-5">
                                <div class="row">
                                    <img src="/assets/icons/futbol-solid 1.svg" class="w-100 invert-1">
                                    <a href="#" class="font-size-1-2em pt-sans-bold text-decoration-none text-black mt-3 text-center">Bluesky</a>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <h3 class="font-size-1-2em text-black pt-sans-bold">CP BLUESKY : 
                                <a href="" class="text-decoration-none font-size-1-0em text-black pt-sans-bold">+622222222222</a>
                            </h3>
                            <h3 class="font-size-1-2em text-black pt-sans-bold">CP BLUESKY : 
                                <a href="" class="text-decoration-none font-size-1-0em text-black pt-sans-bold">+622222222222</a>
                            </h3>
                        </div>
                        
                        <?php endif; ?>
                <?php endforeach; ?>
            <?php else : ?>
                <h2 class="text-center pt-sans-bold font-size-2-0em">Tidak Ada Jadwal</h2>
            <?php endif; ?>
        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pelanggan.php" ?>
    <script type="module" src="/app/resource/js/dashboard.js"></script>

</body>

</html>