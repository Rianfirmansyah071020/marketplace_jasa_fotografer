<?php

include 'dashboard/database/database.php';

if (isset($_POST['daftar_pengguna'])) {
    $nama_pengguna = $_POST['nama_pengguna'];
    $nik_pengguna = $_POST['nik_pengguna'];
    $tempat_lahir_pengguna = $_POST['tempat_lahir_pengguna'];
    $jenis_kelamin_pengguna = $_POST['jenis_kelamin_pengguna'];
    $tanggal_lahir_pengguna = $_POST['tanggal_lahir_pengguna'];
    $alamat_pengguna = $_POST['alamat_pengguna'];
    $email_pengguna = $_POST['email_pengguna'];
    $password_pengguna = password_hash($_POST['password_pengguna'], PASSWORD_DEFAULT);
    $level_pengguna = $_POST['level_pengguna'];
    $nomor_hp_pengguna = $_POST['nomor_hp_pengguna'];

    // cek nik dan email
    $query = "SELECT * FROM pengguna WHERE nik_pengguna = '$nik_pengguna' OR email_pengguna = '$email_pengguna'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "
            <script>
                alert('NIK atau Email sudah digunakan');
                window.location.href = '';
            </script>
        ";
        exit;
    }


    $query = "INSERT INTO pengguna (nama_pengguna, nik_pengguna, tempat_lahir_pengguna, tanggal_lahir_pengguna, jenis_kelamin_pengguna, alamat_pengguna, email_pengguna, nomor_hp_pengguna, password_pengguna, level_pengguna) VALUES ('$nama_pengguna', '$nik_pengguna', '$tempat_lahir_pengguna', '$tanggal_lahir_pengguna', '$jenis_kelamin_pengguna', '$alamat_pengguna' ,'$email_pengguna', '$nomor_hp_pengguna', '$password_pengguna', '$level_pengguna')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                window.location.href = '';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
                window.location.href = '';
            </script>
        ";
    }
}

?>


<?php

include 'layouts/head.php';

?>

<body class="container-fluid">

    <?php

    include 'layouts/svg.php';

    ?>

    <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div>

    <a href="index.php" class="btn btn-sm btn-dark">
        Kembali</a>

    <div class="row mt-3 d-flex justify-content-center">
        <div class="card col-12 border-0 bg-secondary p-3">
            <h3 class="text-center text-dark">Cara Penggunaan Aplikasi</h3>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Jika belum punya akun anda bisa daftar pada menu seperti gambar dibawah
                        <br>
                        <img src="assets/petunjuk/daftar-akun.png" alt="" width="70%">
                    </li>
                    <li class="list-group-item">lalu lengkapi data yang dibutuhkan seperti gambar dibawah <br>
                        <img src="assets/petunjuk/isi-data-akun.png" alt="" width="70%">
                    </li>
                    <li class="list-group-item">Untuk melakukan transaksi anda harus login terlebih dahulu <br>
                        <img src="assets/petunjuk/login.png" alt="" width="70%">
                    </li>
                    <li class="list-group-item">lalu lakukan pemesanan <br>
                        <img src="assets/petunjuk/proses-checkout.png" alt="" width="70%">
                    </li>
                    <li class="list-group-item">lalu upload bukti pembayaran <br>
                        <img src="assets/petunjuk/checkout.png" alt="" width="70%">
                    </li>
                </ul>

            </div>
        </div>
    </div>
    </div>
    <?php

    include 'layouts/footer.php';

    ?>

    <div id="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>© <?= date('Y') ?> Fotografer. All rights reserved.</p>
                </div>

            </div>
        </div>
    </div>

    <?php

    include 'layouts/script.php';

    ?>

</body>