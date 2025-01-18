
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
                <h1 class="font-size-2-0rem pt-sans-bold text-center text-black py-3">Detail Cari Lawan
                    
                <?php $idBooking = isset($_GET['cari_lawan_id']) ? $_GET['cari_lawan_id'] : ""; ?>
                    <?= $idBooking; ?>
                </h1>
            </div>
            <div class="row">
                <div class="col-1">
                    <i class="fa-solid fa-location-dot font-size-1-5em"></i>
                </div>
                <div class="col-11 font-size-1-2em pt-sans-bold text-black mb-2">
                    Lapangan Futsal 1
                </div>
                <div class="col-1">
                    <i class="bi bi-clock-fill font-size-1-5em"></i>
                </div>
                <div class="col-11 font-size-1-2em pt-sans-bold text-black mb-2">
                    10-11-2024 (21.00 - 23.00)
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3 mt-3">
                    <label class="form-label font-size-1-2em pt-sans-bold">Nama Team</label>
                    <input type="text" name="" class="form-control w-100 border-none input-lg pt-sans-bold font-size-1-2em" value="BlueSky" disabled>
                </div>
            </div>
            <form method="POST">
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-lg text-white bg-two w-100 border-0 font-size-1-2em pt-sans-bold mt-4">jadikan Lawan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pelanggan.php" ?>
    <script type="module" src="/app/resource/js/dashboard.js"></script>

</body>

</html>