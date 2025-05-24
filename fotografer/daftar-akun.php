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
            <h3 class="text-center text-dark">Daftarkan Diri anda disini</h3>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nik" class="form-label text-dark">Nik</label>
                        <input type="text" name="nik_pengguna" class="form-control" id="nik" aria-describedby="textHelp"
                            placeholder="Masukan NIK" required>

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label text-dark">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="textHelp"
                            placeholder="Masukan Nama Lengkap" name="nama_pengguna" required>

                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label text-dark">Tempat lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" aria-describedby="textHelp"
                            placeholder="Masukan tempat lahir Lengkap" required name="tempat_lahir_pengguna">

                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir_pengguna" class="form-label text-dark">Tanggal lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir_pengguna" aria-describedby="emailHelp"
                            placeholder="Masukan tempat lahir Lengkap" required name="tanggal_lahir_pengguna">

                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label text-dark">Jenis Kelamin</label> <br>
                        <input type="radio" name="jenis_kelamin_pengguna" id="" value="Laki-laki"> Laki-laki <br>
                        <input type="radio" name="jenis_kelamin_pengguna" id="" value="Perempuan"> Perempuan <br>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label text-dark">Alamat</label>
                        <textarea name="alamat_pengguna" id="alamat" required class="form-control"
                            placeholder="Masukan Alamat"></textarea>

                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label text-dark">Daftar sebagai</label> <br>
                        <input type="radio" name="level_pengguna" id="" value="Penyedia Jasa"> Penyedia Jasa <br>
                        <input type="radio" name="level_pengguna" id="" value="Pelanggan"> Pelanggan <br>
                    </div>
                    <div class="mb-3">
                        <label for="nomor_hp_pengguna" class="form-label text-dark">Nomor HP</label>
                        <input type="text" name="nomor_hp_pengguna" class="form-control" id="nomor_hp_pengguna"
                            aria-describedby="textHelp" placeholder="Masukan email pengguna" required>

                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label text-dark">Email</label>
                        <input type="email" name="email_pengguna" class="form-control" id="email_pengguna"
                            aria-describedby="textHelp" placeholder="Masukan email pengguna" required>

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-dark">password</label>
                        <input type="text" name="password_pengguna" class="form-control" id="password"
                            aria-describedby="textHelp" placeholder="Masukan password" required>

                    </div>
                    <div class="mt-5 d-flex justify-content-end">
                        <button type="submit" name="daftar_pengguna" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
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