
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
                <h1 class="font-size-2-0rem pt-sans-bold text-center text-black pt-3">Pengaturan</h1>
            </div>
            <form method="POST">
                <div class="row px-3 px-lg-5 pb-5">
                    <div class="col-lg-6">
                        <label for="" class="font-size-1-5em pt-sans-bold text-black">Username</label>
                        <input type="text" name="" class="form-control input-lg font-size-1-2em pt-sans-bold text-black mb-2">
                    </div>
                    <div class="col-lg-6">
                        <label for="" class="font-size-1-5em pt-sans-bold text-black">Nama</label>
                        <input type="text" name="" class="form-control input-lg font-size-1-2em pt-sans-bold text-black mb-2">
                    </div>
                    <div class="col-lg-6">
                        <label for="" class="font-size-1-5em pt-sans-bold text-black">Default Nama Team</label>
                        <input type="text" name="" class="form-control input-lg font-size-1-2em pt-sans-bold text-black mb-2">
                    </div>
                    <div class="col-lg-6">
                        <label for="" class="font-size-1-5em pt-sans-bold text-black">Profile</label>
                        <input type="file" name="" class="form-control input-lg font-size-1-2em pt-sans-bold text-black mb-2">
                    </div>
                    <div class="col-lg-6">
                        <label for="" class="font-size-1-5em pt-sans-bold text-black">Email</label>
                        <input type="email" name="" class="form-control input-lg font-size-1-2em pt-sans-bold text-black mb-2">
                    </div>
                    <div class="col-lg-6">
                        <label for="" class="font-size-1-5em pt-sans-bold text-black">Whatsapp</label>
                        <input type="number" name="" class="form-control input-lg font-size-1-2em pt-sans-bold text-black mb-2">
                    </div>
                    <div class="col-8 offset-2 col-lg-6 offset-lg-3">
                        <button type="submit" class="btn btn-lg bg-two w-100 text-white mt-4">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pelanggan.php" ?>
    <script type="module" src="/app/resource/js/dashboard.js"></script>

</body>

</html>