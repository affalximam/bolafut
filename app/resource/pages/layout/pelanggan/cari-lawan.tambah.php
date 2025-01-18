
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
                <h1 class="font-size-2-0rem pt-sans-bold text-center text-black py-3">Tambah Cari Lawan</h1>
            </div>
            <form method="POST">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label class="form-label font-size-1-2em pt-sans-bold">Nama Team</label>
                        <input type="text" name="" class="form-control w-100 border-none input-lg">
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label font-size-1-2em pt-sans-bold">Tempat</label>
                        <select class="form-select w-100 pt-sans-bold" aria-label="Pilih Tempat">
                            <option class="bg-two" value="" selected disabled>Pilih Tempat</option>
                            <option class="bg-two text-white" value="1">Lapangan Futsal 1</option>
                            <option class="bg-two text-white" value="2">Lapangan Futsal 2</option>
                            <option class="bg-two text-white" value="3">Lapangan Futsal 3</option>
                            <option class="bg-two text-white" value="4">Lapangan Futsal 4</option>
                            <option class="bg-two text-white" value="5">Lapangan Futsal 5</option>
                            <option class="bg-two text-white" value="6">Lapangan Futsal 6</option>
                            <option class="bg-two text-white" value="7">Lapangan Futsal 7</option>
                            <option class="bg-two text-white" value="8">Lapangan Futsal 8</option>
                            <option class="bg-two text-white" value="9">Lapangan Futsal 9</option>
                            <option class="bg-two text-white" value="10">Lapangan Futsal 10</option>
                            <option class="bg-two text-white" value="11">Lapangan Futsal 11</option>
                            <option class="bg-two text-white" value="12">Lapangan Futsal 12</option>
                        </select>
                </div>
                    <div class="col-4 mb-3">
                        <label class="form-label font-size-1-2em pt-sans-bold">Tahun</label>
                        <select class="form-select w-100 pt-sans-bold" aria-label="Pilih Tahun">
                            <option class="bg-two" value="" selected disabled>Pilih Tahun</option>
                            <option class="bg-two text-white" value="2025">2025</option>
                            <option class="bg-two text-white" value="2026">2026</option>
                            <option class="bg-two text-white" value="2027">2027</option>
                            <option class="bg-two text-white" value="2028">2028</option>
                        </select>
                    </div>
                    
                    <div class="col-4 mb-3">
                        <label class="form-label font-size-1-2em pt-sans-bold">Bulan</label>
                        <select class="form-select w-100 pt-sans-bold" aria-label="Pilih Bulan">
                            <option class="bg-two" value="" selected disabled>Pilih Bulan</option>
                            <option class="bg-two text-white" value="1">Januari</option>
                            <option class="bg-two text-white" value="2">Februari</option>
                            <option class="bg-two text-white" value="3">Maret</option>
                            <option class="bg-two text-white" value="4">April</option>
                            <option class="bg-two text-white" value="5">Mei</option>
                            <option class="bg-two text-white" value="6">Juni</option>
                            <option class="bg-two text-white" value="7">Juli</option>
                            <option class="bg-two text-white" value="8">Agustus</option>
                            <option class="bg-two text-white" value="9">September</option>
                            <option class="bg-two text-white" value="10">Oktober</option>
                            <option class="bg-two text-white" value="11">November</option>
                            <option class="bg-two text-white" value="12">Desember</option>
                        </select>
                    </div>
                    
                    <div class="col-4 mb-3">
                        <label class="form-label font-size-1-2em pt-sans-bold">Tanggal</label>
                        <select class="form-select w-100 pt-sans-bold" aria-label="Pilih Tanggal">
                            <option class="bg-two text-white" value="" selected disabled>Pilih Tanggal</option>
                            <?php for ($i = 1; $i <= 31; $i++): ?>
                                <option class="bg-two text-white" value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="col-4 mb-3">
                        <label class="form-label font-size-1-2em pt-sans-bold">Jam</label>
                        <select class="form-select w-100 pt-sans-bold" aria-label="Pilih Jam">
                            <option class="bg-two text-white" value="" selected disabled>Pilih Waktu</option>
                            <?php for ($i = 0; $i < 24; $i++): ?>
                                <option class="bg-two text-white" value="<?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>">
                                    <?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>:00
                                </option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="col-4 mb-3">
                        <label class="form-label font-size-1-2em pt-sans-bold">Durasi</label>
                        <select class="form-select w-100 pt-sans-bold" aria-label="Pilih Jam">
                            <option class="bg-two text-white" value="" selected disabled>Pilih Jam</option>
                            <?php for ($i = 1; $i < 24; $i++): ?>
                                <option class="bg-two text-white" value="<?= $i; ?>">
                                    <?= $i; ?> Jam
                                </option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-lg text-white bg-two w-100 border-0 font-size-1-2em pt-sans-bold my-4">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pelanggan.php" ?>
    <script type="module" src="/app/resource/js/dashboard.js"></script>

</body>

</html>