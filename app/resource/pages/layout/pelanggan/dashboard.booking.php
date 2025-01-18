
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

    <section class="booking mt-5 pt-5 pb-5 mb-5 ts-1-0s">
        <div class="container">
            <div class="row">
                <?php foreach ($Lapangan as $LapanganIndex => $LapanganValue) : ?>
                    <div class="col-xl-6 my-2">
                        <a href="/booking-details/<?= htmlspecialchars($LapanganValue['lapangan_id'], ENT_QUOTES, "UTF-8"); ?>" class="card bg-none ts-0-5s w-100 border-0 px-3 py-2 text-decoration-none">
                            <div class="row">
                                <div class="col-3 pt-3">
                                    <img src="/assets/images/default-icon-lapangan.png" class="w-100 m-auto" alt="">
                                </div>
                                <div class="col-9">
                                    <?php if ($LapanganValue['lapangan_status'] == "active") : ?>
                                        <span class="bg-success text-white p-1 rounded rounded-2 w-25 text-center d-block position-absolute end-0">
                                            Buka
                                        </span>                                    
                                    <?php elseif ($LapanganValue['lapangan_status'] == "inactive")  : ?>
                                        <span class="bg-danger text-white p-1 rounded rounded-2 w-25 text-center d-block position-absolute end-0">
                                            Tutup
                                        </span>                                    
                                    <?php endif; ?>
                                    <h1 class="pt-sans-bold font-size-1-5em pt-3">
                                        <?= htmlspecialchars($LapanganValue['lapangan_name'], ENT_QUOTES, "UTF-8"); ?>
                                    </h1>
                                    <h2 class="pt-sans-bold font-size-1-2em">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <?= htmlspecialchars($LapanganValue['lapangan_alamat'], ENT_QUOTES, "UTF-8"); ?>
                                    </h2>
                                    <h2 class="pt-sans-bold font-size-1-2em">
                                        <i class="fa-solid fa-clock"></i>
                                        Open 
                                        <?= date('H:i', strtotime(htmlspecialchars($LapanganValue['lapangan_open_hours'], ENT_QUOTES, "UTF-8"))); ?>
                                        -
                                        <?= date('H:i', strtotime(htmlspecialchars($LapanganValue['lapangan_close_hours'], ENT_QUOTES, "UTF-8"))); ?>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pelanggan.php" ?>
    <script type="module" src="/app/resource/js/dashboard.js"></script>

</body>

</html>