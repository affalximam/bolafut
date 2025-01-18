
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

<?php include __DIR__ . "/../../components/navbar-top-pengelola.php" ?>

    <section class="pt-100px px-3">
        <div class="container">
            <div class="row">
                <h1 class="font-size-2-0rem pt-sans-bold text-center text-black py-3">Booking Lapangan</h1>
            </div>
            <div class="row font-size-1-2em pt-sans-bold">
                <div class="col-1">
                    <i class="fa-solid fa-location-dot me-2"></i>
                </div>
                <div class="col-11 font-size-1-2em pt-sans-bold">
                <?= htmlspecialchars($Lapangan['lapangan_name'], ENT_QUOTES, "UTF-8"); ?>
                </div>
            </div>
            <div class="row font-size-1-2em pt-sans-bold">
                <div class="col-1">
                    <i class="bi bi-clock-fill me-2"></i>
                </div>
                <div class="col-11 font-size-1-2em pt-sans-bold">
                    (<?= date('H:i', strtotime(htmlspecialchars($Lapangan['lapangan_open_hours'], ENT_QUOTES, "UTF-8"))); ?>
                    -
                    <?= date('H:i', strtotime(htmlspecialchars($Lapangan['lapangan_close_hours'], ENT_QUOTES, "UTF-8"))); ?>)
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <i class="fa-solid fa-money-bill font-size-1-2em"></i>
                </div>
                <div class="col-10">
                    <pre class="d-inline font-size-1-2em pt-sans-bold w-100 overflow-hidden">
Coming Soon
<!-- 09.00 - 16.00 Rp80.000/Jam
16.00 - 23.00 Rp130.000/Jam -->
                    </pre>
                </div>
            </div>
            
            <?php if ($Lapangan['lapangan_status'] == "active") : ?>
                <form method="POST">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label font-size-1-2em pt-sans-bold">Nama Booking</label>
                            <input type="text" name="" class="form-control w-100 border-none input-lg">
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-4 mb-3">
                            <label class="form-label font-size-1-2em pt-sans-bold">Tahun</label>
                            <select class="form-select w-100 pt-sans-bold" aria-label="Pilih Tahun">
                                <?php for ($i = 0; $i < $limitYear; $i++): ?>
                                    <option class="bg-two text-white" value="<?= $currentYear + $i ?>">
                                        <?= $currentYear + $i ?>
                                    </option>
                                <?php endfor; ?>
                            </select>
                        </div>

                        
                        <div class="col-4 mb-3">
                            <label class="form-label font-size-1-2em pt-sans-bold">Bulan</label>
                            <select class="form-select w-100 pt-sans-bold" aria-label="Pilih Bulan" id="bulan" onchange="updateDays()">
                                <option class="bg-two text-white" value="false" selected disabled>Pilih Bulan</option>
                                <?php foreach ($months as $key => $month): ?>
                                    <option 
                                        class="bg-two text-white" 
                                        value="<?= $key ?>" 
                                        <?= $key == $currentMonth ? 'selected' : '' ?>
                                    >
                                        <?= $month ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-4 mb-3">
                            <label class="form-label font-size-1-2em pt-sans-bold">Tanggal</label>
                            <select class="form-select w-100 pt-sans-bold" aria-label="Pilih Tanggal" id="tanggal">
                                <option class="bg-two text-white" value="false" selected disabled>Pilih Tanggal</option>
                                <?php for ($i = 1; $i <= $daysInMonth; $i++): ?>
                                    <option 
                                        class="bg-two text-white" 
                                        value="<?= $i ?>" 
                                        <?= $i == $currentDate ? 'selected' : '' ?>
                                    >
                                        <?= $i ?>
                                    </option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="col-4 mb-3">
                            <label class="form-label font-size-1-2em pt-sans-bold">Jam</label>
                            <select id="booking-time" class="form-select w-100 pt-sans-bold" aria-label="Pilih Jam Mulai">
                                <option value="" selected disabled>Pilih Jam Mulai</option>
                                <?php for ($i = 0; $i < $closeHour; $i++): ?>
                                    <option value="<?= $i; ?>"><?= str_pad($i, 2, '0', STR_PAD_LEFT); ?>:00</option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="col-4 mb-3">
                            <label class="form-label font-size-1-2em pt-sans-bold">Durasi</label>
                            <select id="booking-duration" class="form-select w-100 pt-sans-bold" aria-label="Pilih Durasi">
                                <option value="" selected disabled>Pilih Durasi</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-lg text-white bg-two w-100 border-0 font-size-1-2em pt-sans-bold my-4">Booking</button>
                        </div>
                    </div>
                </form>
            <?php elseif ($Lapangan['lapangan_status'] == "inactive")  : ?>
                <h2 class="font-size-2-0rem pt-sans-bold text-center text-black py-3">Lapangan Sedang Tutup</h2>
            <?php endif; ?>
        </div>
    </section>

    <?php include __DIR__ . "/../../components/navbar-bottom-pengelola.php" ?>
    <script type="module" src="/app/resource/js/dashboard.js"></script>

    <script>
        function updateDays() {
        const year = <?= $currentYear ?>; 
        const month = document.getElementById('bulan').value; 
        const daysInMonth = new Date(year, month, 0).getDate(); 
        
        const tanggalSelect = document.getElementById('tanggal');
        tanggalSelect.innerHTML = '<option class="bg-two text-white" value="false" selected disabled>Pilih Tanggal</option>';
        
        for (let i = 1; i <= daysInMonth; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.textContent = i;
            option.className = "bg-two text-white";
            tanggalSelect.appendChild(option);
        }
    }

    // PHP variable for closing time
    const closingTime = <?php echo $closeHour; ?>; // Get closing time from PHP

    // Get references to dropdowns
    const bookingTimeDropdown = document.getElementById('booking-time');
    const durationDropdown = document.getElementById('booking-duration');

    // Update duration options based on selected booking time
    bookingTimeDropdown.addEventListener('change', function () {
        const bookingTime = parseInt(this.value); // Selected booking time
        durationDropdown.innerHTML = '<option value="" selected disabled>Pilih Durasi</option>'; // Reset options

        if (!isNaN(bookingTime)) {
            // Calculate remaining hours until closing
            const remainingHours = closingTime - bookingTime;
            const maxDuration = remainingHours;  // Set max duration to the remaining time

            // Populate duration dropdown
            for (let i = 1; i <= maxDuration; i++) {
                const option = document.createElement('option');
                option.value = i;
                option.textContent = `${i} Jam`;
                durationDropdown.appendChild(option);
            }
        }
    });
    </script>

</body>

</html>