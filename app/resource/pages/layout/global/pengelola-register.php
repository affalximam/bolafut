<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR SEBAGAI PENGELOLA LAPANGAN</title>

    <link rel="stylesheet" href="/app/resource/css/global.css">
    <script src="https://kit.fontawesome.com/19bde2125b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body class="bg-one">

    <?php include __DIR__ . "/../../components/navbar-global.php" ?>

    <section class="pt-5 mt-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center pt-sans-bold font-size-4-0rem">BOLAFUT</h1>
                <h2 class="text-center pt-sans-bold font-size-1-5rem">Daftar sebagai Lapangan Futsal</h2>
            </div>
        </div>
    </section>

    <section class="register-form d-flex flex-row pt-5 pb-5 mb-5">
        <div class="min-w-100vw">
            <div class="container">
                <form method="POST">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-0 col-8 offset-2 py-2 text-center">
                            <label for="exampleInputNamaLapangan" class="form-label text-blue-303D57 font-size-1-3rem pt-sans-bold">Nama Lapangan</label>
                            <input  type="text" 
                                    name="lapangan_name"
                                    class="d-block p-2 w-100 border-4 rounded rounded-3 border-color-303D57 text-blue-303D57 font-size-1-3rem pt-sans-bold" 
                                    id="exampleInputNamaLapangan">
                        </div>
                        <div class="col-xl-6 offset-xl-0 col-8 offset-2 py-2 text-center">
                            <label for="exampleInputAlamat" class="form-label text-blue-303D57 font-size-1-3rem pt-sans-bold">Alamat Lapangan</label>
                            <input  type="text"
                                    name="lapangan_alamat"
                                    class="d-block p-2 w-100 border-4 rounded rounded-3 border-color-303D57 text-blue-303D57 font-size-1-3rem pt-sans-bold" 
                                    id="exampleInputAlamat"
                                    required>
                        </div>
                        <div class="col-xl-6 offset-xl-0 col-8 offset-2 py-2 text-center">
                            <label for="exampleInputWhatsapp" class="form-label text-blue-303D57 font-size-1-3rem pt-sans-bold">Nomor Whatsapp</label>
                            <input  type="number"
                                    name="lapangan_number"
                                    class="d-block p-2 w-100 border-4 rounded rounded-3 border-color-303D57 text-blue-303D57 font-size-1-3rem pt-sans-bold no-spinners" 
                                    id="exampleInputWhatsapp"
                                    required>
                        </div>
                        <div class="col-xl-6 offset-xl-0 col-8 offset-2 py-2 text-center">
                            <label for="exampleInputEmail" class="form-label text-blue-303D57 font-size-1-3rem pt-sans-bold">Email</label>
                            <input  type="email"
                                    name="users_email"
                                    class="d-block p-2 w-100 border-4 rounded rounded-3 border-color-303D57 text-blue-303D57 font-size-1-3rem pt-sans-bold" 
                                    id="exampleInputEmail"
                                    required>
                            </div>
                        <div class="col-xl-6 offset-xl-0 col-8 offset-2 py-2 text-center">
                            <label for="exampleInputPassword" class="form-label text-blue-303D57 font-size-1-3rem pt-sans-bold">Password</label>
                            <input  type="password"
                                    name="users_password"
                                    class="d-block p-2 w-100 border-4 rounded rounded-3 border-color-303D57 text-blue-303D57 font-size-1-3rem pt-sans-bold" 
                                    id="exampleInputPassword"
                                    required>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-xl-6 offset-xl-3 col-8 offset-2">
                            <button type="submit"
                                    name="pengelola_register"
                                    class="w-100 py-2 rounded rounded-4 bg-two text-blue-DBE9F4 font-size-1-3rem pt-sans-bold">Buat Akun</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script type="module" src="/app/resource/js/global.js"></script>
    <?php @include __DIR__ . "/../../components/sweetalert.php"; ?>

</body>
</html>