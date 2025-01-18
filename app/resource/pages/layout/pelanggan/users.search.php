
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
                <h1 class="font-size-2-0rem pt-sans-bold text-center text-black pt-3">Search</h1>
            </div>
            <form method="POST">
                <div class="row px-3 px-lg-5 mb-4">
                    <div class="col-10 col-lg-11">
                        <input type="text" name="" class="form-control input-lg font-size-1-2em pt-sans-bold text-black h-100 w-100" placeholder="Search">
                    </div>
                    <div class="col-2 col-lg-1">
                        <button type="submit" class="btn btn-lg bg-two w-100 h-100 text-white text-center">
                            <i class="fa-solid fa-magnifying-glass font-size-1-2em"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- default -->
            <div class="row px-3 pb-3">
                <div class="col-12 text-end border-black border-bottom">
                    <form method="POST">
                        <button type="submit" class="btn w-auto pt-sans-bold font-size-1-2em">Hapus History</button>
                    </form>
                </div>
            </div>
            <?php for($i = 1; $i < 10; $i++) : ?>
                <div class="row px-3 px-lg-5 mb-2">
                    <div class="col-10 col-lg-11">
                        <a href="/users-detail/<?= $i; ?>" class="text-black text-decoration-none font-size-1-2em pt-sans-bold">User <?= $i; ?></a>
                    </div>
                    <div class="col-2 col-lg-1">
                        <form method="POST">
                            <button type="submit" class="btn bg-transparent fa-solid fa-x font-size-1-2em"></button>
                        </form>
                    </div>
                </div>
            <?php endfor; ?>

            <!-- verse 2 -->
            <!-- <div class="row px-3 pb-3 search-filter">
                <div class="col-12 border-black border-bottom mb-3">
                    <div class="row mb-3">
                        <div class="col-4 col-xl-3 px-0 offset-2 offset-xl-6 active">
                            <a class="card w-100 text-decoration-none rounded-start-3 rounded-end-0 cursor-pointer border-2 border-color-303D57 py-1 font-size-1-2em text-center ext-dark bg-one">
                                Users
                            </a>
                        </div>
                        <div class="col-4 col-xl-3 px-0">
                            <a class="card w-100 text-decoration-none rounded-start-0 rounded-end-3 cursor-pointer border-2 border-color-303D57 py-1 font-size-1-2em text-center ext-dark bg-one">
                                Lapangan
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 mb-2">
                    <a href="" class="text-black text-decoration-none font-size-1-2em pt-sans-bold">User 1</a>
                </div>
                <div class="col-12 mb-2">
                    <a href="" class="text-black text-decoration-none font-size-1-2em pt-sans-bold">User 1</a>
                </div>
            </div> -->

        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pelanggan.php" ?>
    <script type="module" src="/app/resource/js/dashboard.js"></script>

</body>

</html>