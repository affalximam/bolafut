<?php if (empty($keyComponent) OR $keyComponent != "bolafut") { header("Location: /"); exit; } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOON</title>

    <link rel="stylesheet" href="/app/resource/css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/19bde2125b.js" crossorigin="anonymous"></script>

</head>

<body class="bg-one">


    <section class="min-vh-100 d-flex flex-column justify-content-center">
        <i class="fa-solid fa-gear text-center font-size-3-5em fa-spin"></i>
        <h1 class="font-size-2-5rem text-center pt-sans-bold">Coming Soon</h1>
        <div class="row">
            <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3 col-8 offset-2">
                <a href="javascript:history.back()" class="btn btn-lg border-0 bg-two btn-primary w-100">Kembali</a>
            </div>
        </div>
    </section>

    <script type="module" src="/app/resource/js/dashboard.js"></script>
</body>

</html>