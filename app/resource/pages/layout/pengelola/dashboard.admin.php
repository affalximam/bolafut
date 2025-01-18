
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

    <?php include __DIR__ . "/../../components/navbar-top-pengelola.php"; ?>

    <section class="admin">
        <div class="admin-profile-picture">
            <div class="top-bg bg-two z-0"></div>
            <div class="img z-2 rounded-circle">
                <img src="/assets/images/Ellipse 2.png" class="w-100 h-100" alt="" srcset="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h1 class="text-center font-size-2-0rem pt-sans-bold pt-2">Lapangan Futsal 1</h1>
            </div>
            <div class="row">
                <ul class="list-group px-5">
                    <li class="list-group-item bg-transparent">
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-location-dot font-size-1-2em"></i>
                            </div>
                            <div class="col-10 font-size-1-2em pt-sans-bold">
                                Jalan Raya Banjarnegara
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item bg-transparent">
                        <div class="row">
                            <div class="col-1">
                                <i class="bi bi-whatsapp font-size-1-2em"></i>
                            </div>
                            <div class="col-10 font-size-1-2em pt-sans-bold">
                                +6285973170278
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item bg-transparent">
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-history font-size-1-2em"></i>
                            </div>
                            <div class="col-10 font-size-1-2em pt-sans-bold">
                                Open (09.00 - 23.00)
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item bg-transparent">
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-money-bill font-size-1-2em"></i>
                            </div>
                            <div class="col-10">
                                <pre class="d-inline font-size-1-2em pt-sans-bold w-100 overflow-hidden">
09.00 - 16.00 Rp80.000/Jam
16.00 - 23.00 Rp130.000/Jam
                                </pre>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pengelola.php"; ?>

    <script type="module" src="/app/resource/js/dashboard.js"></script>
</body>

</html>