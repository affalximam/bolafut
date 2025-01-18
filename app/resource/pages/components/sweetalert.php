
<script>

    <?php if (isset($_SESSION['login_gagal']) && is_array($_SESSION['login_gagal'])): ?>

        let loginGagal = <?php echo json_encode($_SESSION['login_gagal']); ?>;

            Swal.fire({
                icon: loginGagal.icon,
                title: loginGagal.title,
                text: loginGagal.text,
                confirmButtonText: 'OK'
            }).then(() => {
                <?php unset($_SESSION['login_gagal']); ?>
                window.location.href = "/login";
            });


    <?php elseif (isset($_SESSION['register_gagal']) && is_array($_SESSION['register_gagal'])): ?>

        let registerGagal = <?php echo json_encode($_SESSION['register_gagal']); ?>;

        Swal.fire({
            icon: registerGagal.icon,
            title: registerGagal.title,
            text: registerGagal.text,
            confirmButtonText: 'OK'
        }).then(() => {
            <?php unset($_SESSION['register_gagal']); ?>
            window.location.href = "/login";
        });


    <?php elseif (isset($_SESSION['register_sukses']) && is_array($_SESSION['register_sukses'])): ?>

        let registerSuccess = <?php echo json_encode($_SESSION['register_sukses']); ?>;

            Swal.fire({
                icon: registerSuccess.icon,
                title: registerSuccess.title,
                confirmButtonText: 'OK'
            }).then(() => {
                <?php unset($_SESSION['register_sukses']); ?>
                window.location.href = history.back();
            });

    <?php elseif (isset($_SESSION['lapangan_isi']) && is_array($_SESSION['lapangan_isi'])): ?>

        let Message = <?php echo json_encode($_SESSION['lapangan_isi']); ?>;

            Swal.fire({
                icon: Message.icon,
                title: Message.title,
                text: Message.text,
                confirmButtonText: 'OK'
            }).then(() => {
                <?php unset($_SESSION['lapangan_isi']); ?>
            });

    <?php elseif (isset($_SESSION['booking_sukses']) && is_array($_SESSION['booking_sukses'])): ?>

        let Message = <?php echo json_encode($_SESSION['booking_sukses']); ?>;

            Swal.fire({
                icon: Message.icon,
                title: Message.title,
                confirmButtonText: 'OK'
            }).then(() => {
                <?php unset($_SESSION['booking_sukses']); ?>
                window.location.href = "/jadwal";
            });

    <?php elseif (isset($_SESSION['booking_gagal']) && is_array($_SESSION['booking_gagal'])): ?>

        let Message = <?php echo json_encode($_SESSION['booking_gagal']); ?>;

            Swal.fire({
                icon: Message.icon,
                title: Message.title,
                text: Message.text,
                confirmButtonText: 'OK'
            }).then(() => {
                <?php unset($_SESSION['booking_gagal']); ?>
            });

    <?php endif; ?>

</script>