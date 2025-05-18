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
            <h3 class="text-center text-dark">Daftarkan Jasa anda disini</h3>
            <div class="card-body">
                <form action="daftar-jasa.php" method="POST">
                    <div class="mb-3">
                        <label for="nik" class="form-label text-dark">Nik</label>
                        <input type="text" class="form-control" id="nik" aria-describedby="textHelp"
                            placeholder="Masukan NIK">

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label text-dark">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="textHelp"
                            placeholder="Masukan Nama Lengkap">

                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label text-dark">Tempat lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" aria-describedby="textHelp"
                            placeholder="Masukan tempat lahir Lengkap">

                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label text-dark">Tempat lahir</label>
                        <input type="date" class="form-control" id="tempat_lahir" aria-describedby="emailHelp"
                            placeholder="Masukan tempat lahir Lengkap">

                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label text-dark">Jenis Kelamin</label> <br>
                        <input type="radio" name="jenis_kelamin" id=""> Laki-laki
                        <input type="radio" name="jenis_kelamin" id=""> Perempuan
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label text-dark">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"
                            placeholder="Masukan Alamat"></textarea>

                    </div>
                    <div class="mt-5 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Daftar</button>
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