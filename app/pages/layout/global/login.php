<?php if (empty($keyComponent) OR $keyComponent != "bolafut") { header("Location: /"); } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <link rel="stylesheet" href="/app/css/global.css">
    <script src="https://kit.fontawesome.com/19bde2125b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body class="bg-one">

<?php include __DIR__ . "/../../components/navbar-global.php" ?>

    <section class="login-header pt-5 mt-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center pt-sans-bold font-size-4-0rem">BOLAFUT</h1>
            </div>
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-8 offset-2">
                    <div class="row rounded rounded-4 row-card text-center">
                        <div class="col-6 py-2 cursor-default login-slider text-blue-303D57">
                            <span class="pt-sans-bold font-size-1-75em">Login</span>
                        </div>
                        <div class="col-6 py-2 cursor-pointer register-slider text-blue-DBE9F4 bg-two">
                            <span class="pt-sans-bold font-size-1-75em">Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sign-form d-flex flex-row pt-5">
        <div class="login-form min-w-100vw">
            <div class="container">
                <form>
                    <div class="my-2 w-75 mx-auto text-center">
                        <label for="exampleInputWhatsapp" class="form-label text-blue-303D57 font-size-1-3rem pt-sans-bold">Nomor Whatsapp</label>
                        <input  type="number" 
                                class="d-block p-2 w-100 border-4 rounded rounded-3 border-color-303D57 text-blue-303D57 font-size-1-3rem pt-sans-bold no-spinners" 
                                id="exampleInputWhatsapp">
                    </div>
                    
                    <div class="my-2 w-75 mx-auto text-center">
                        <label for="exampleInputPassword" class="form-label text-blue-303D57 font-size-1-3rem pt-sans-bold">Password</label>
                        <input  type="password" 
                                class="d-block p-2 w-100 border-4 rounded rounded-3 border-color-303D57 text-blue-303D57 font-size-1-3rem pt-sans-bold" 
                                id="exampleInputPassword">
                    </div>
                    <div class="row pt-3">
                        <div class="col-xl-6 offset-xl-3 col-8 offset-2">
                            <button type="submit" class="w-100 py-2 rounded rounded-4 bg-two text-blue-DBE9F4 font-size-1-3rem pt-sans-bold">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="register-form min-w-100vw">
            <div class="container">
                <form>
                    <div class="row">
                        <div class="col-xl-6 offset-xl-0 col-8 offset-2 py-2 text-center">
                            <label for="exampleInputNama" class="form-label text-blue-303D57 font-size-1-3rem pt-sans-bold">Nama</label>
                            <input  type="text" 
                                    class="d-block p-2 w-100 border-4 rounded rounded-3 border-color-303D57 text-blue-303D57 font-size-1-3rem pt-sans-bold" 
                                    id="exampleInputNama">
                        </div>
                        <div class="col-xl-6 offset-xl-0 col-8 offset-2 py-2 text-center">
                            <label for="exampleInputWhatsapp" class="form-label text-blue-303D57 font-size-1-3rem pt-sans-bold">Nomor Whatsapp</label>
                            <input  type="number" 
                                class="d-block p-2 w-100 border-4 rounded rounded-3 border-color-303D57 text-blue-303D57 font-size-1-3rem pt-sans-bold no-spinners" 
                                id="exampleInputWhatsapp">
                        </div>
                        <div class="col-xl-6 offset-xl-0 col-8 offset-2 py-2 text-center">
                            <label for="exampleInputEmail" class="form-label text-blue-303D57 font-size-1-3rem pt-sans-bold">Email</label>
                            <input  type="email" 
                                    class="d-block p-2 w-100 border-4 rounded rounded-3 border-color-303D57 text-blue-303D57 font-size-1-3rem pt-sans-bold" 
                                    id="exampleInputEmail">
                            </div>
                        <div class="col-xl-6 offset-xl-0 col-8 offset-2 py-2 text-center">
                            <label for="exampleInputPassword" class="form-label text-blue-303D57 font-size-1-3rem pt-sans-bold">Password</label>
                            <input  type="password" 
                                    class="d-block p-2 w-100 border-4 rounded rounded-3 border-color-303D57 text-blue-303D57 font-size-1-3rem pt-sans-bold" 
                                    id="exampleInputPassword">
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-xl-6 offset-xl-3 col-8 offset-2">
                            <button type="submit" class="w-100 py-2 rounded rounded-4 bg-two text-blue-DBE9F4 font-size-1-3rem pt-sans-bold">Buat Akun</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>

    <script type="module" src="/app/js/global.js"></script>
</body>
</html>