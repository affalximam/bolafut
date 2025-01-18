
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
                <h1 class="font-size-2-0rem pt-sans-bold text-center text-black pt-3">Lapangan Futsal
                <?php $idBooking = isset($_GET['event_id']) ? $_GET['event_id'] : ""; ?>
                <?= $idBooking; ?>
                </h1>
                <h2 class="font-size-1-5rem pt-sans-bold text-center text-black ">1-11-2024 (21.30)</h2>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <img src="/assets/images/141428_wo 1.png" class="w-100">
                </div>
            </div>
            <div class="row pt-3">
                <pre class="d-inline font-size-1-0em pt-sans-bold w-100 overflow-hidden text-justify">
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium accusamus facere quis, eos consectetur exercitationem culpa inventore vel adipisci in, voluptatum tenetur dolore perspiciatis ipsum ea distinctio repellendus quam nisi quidem porro quos itaque dicta nostrum maiores. Aliquid cum delectus, officiis laudantium natus hic itaque quasi ab totam iste nesciunt deleniti aspernatur suscipit iusto qui ut? Quisquam tempora corrupti est, exercitationem, vero suscipit cumque ex sit laborum minima ab eum optio deserunt hic distinctio obcaecati architecto. Vel sequi accusantium quas labore optio maxime ratione delectus eius ut nisi suscipit vero asperiores reiciendis, laborum eos repellat sint facilis corrupti blanditiis quo.
                </pre>
            </div>
        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pelanggan.php" ?>
    <script type="module" src="/app/resource/js/dashboard.js"></script>

</body>

</html>