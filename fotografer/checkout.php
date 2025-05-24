<?php

session_start();

include "dashboard/database/database.php";

$id_jasa = $_GET['id_jasa'];

$queryJasa = "SELECT * FROM jasa LEFT JOIN kategori ON jasa.id_kategori = kategori.id_kategori LEFT JOIN pengguna ON jasa.id_pengguna = pengguna.id_pengguna WHERE id_jasa = '$id_jasa'";
$resultJasa = mysqli_query($conn, $queryJasa);
$dataJasa = mysqli_fetch_array($resultJasa, MYSQLI_ASSOC);


if (isset($_POST['checkout'])) {
    $id_jasa = $_POST['id_jasa'];
    $id_pengguna = $_POST['id_pengguna'];
    $tanggal_acara = $_POST['tanggal_acara'];
    $catatan = $_POST['catatan'];
    $total_bayar_transaksi = $_POST['total_bayar_transaksi'];
    $bukti_bayar_transaksi = $_FILES['bukti_bayar_transaksi']['name'];
    $tmp_bukti_bayar_transaksi = $_FILES['bukti_bayar_transaksi']['tmp_name'];
    move_uploaded_file($tmp_bukti_bayar_transaksi, "dashboard/assets/img/bukti_bayar_transaksi/$bukti_bayar_transaksi");
    $bukti_bayar_transaksi = "assets/img/bukti_bayar_transaksi/$bukti_bayar_transaksi";

    $kode_transaksi = "TRX" . date("Ymdhis");

    $potongan_transaksi = $total_bayar_transaksi * 0.1;

    $query = "INSERT INTO transaksi (id_jasa, id_pengguna, total_bayar_transaksi, bukti_bayar_transaksi, potongan_transaksi, kode_transaksi, tanggal_acara, catatan) VALUES ('$id_jasa', '$id_pengguna', '$total_bayar_transaksi', '$bukti_bayar_transaksi', '$potongan_transaksi', '$kode_transaksi', '$tanggal_acara', '$catatan')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "
            <script>
                alert('Checkout berhasil');
                window.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Checkout gagal');
                window.location.href = 'index.php';
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
            <h3 class="text-center text-dark">Checkout</h3>
            <div class="card-body">
                <div class="mt-3 p-3 mb-3 bg-white">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><img src="dashboard/<?= $dataJasa['gambar_jasa'] ?>" alt=""
                                width="100"></li>
                        <li class="list-group-item" style="font-weight: bold;"><?= $dataJasa['nama_jasa'] ?></li>
                        <li class="list-group-item">Deskripsi : <?= $dataJasa['deskripsi_jasa'] ?></li>
                        <li class="list-group-item">Harga : Rp.
                            <?= number_format($dataJasa['harga_jasa'], 0, ',', '.') ?></li>
                        <li class="list-group-item">Kategori : <?= $dataJasa['nama_kategori'] ?></li>
                        <li class="list-group-item">Penyedia : <?= $dataJasa['nama_pengguna'] ?></li>
                        <li class="list-group-item">Email : <?= $dataJasa['email_pengguna'] ?></li>
                        <li class="list-group-item">No. Telepon : <?= $dataJasa['nomor_hp_pengguna'] ?></li>
                    </ul>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_jasa" value="<?= $dataJasa['id_jasa'] ?>">
                    <input type="hidden" name="id_pengguna" value="<?= $_SESSION['id_pengguna'] ?>">
                    <div class="mb-3">
                        <label for="tanggal_acara" class="form-label text-dark">Tanggal Acara</label>
                        <input type="date" class="form-control" name="tanggal_acara" id="tanggal_acara"
                            aria-describedby="emailHelp" placeholder="Masukan total bayar" required>

                    </div>
                    <div class="mb-3">
                        <label for="catatan" class="form-label text-dark">Catatan</label>
                        <Textarea class="form-control" name="catatan" id="catatan" rows="3"
                            placeholder="Masukan catatan"></Textarea>

                    </div>
                    <div class="mb-3">
                        <label for="total_bayar_transaksi" class="form-label text-dark">Total bayar</label>
                        <input type="number" class="form-control" name="total_bayar_transaksi"
                            id="total_bayar_transaksi" aria-describedby="emailHelp" placeholder="Masukan total bayar"
                            value="<?= $dataJasa['harga_jasa'] ?>" required readonly>

                    </div>
                    <div class="mb-3">
                        <label for="bukti_bayar_transaksi" class="form-label text-dark">Bukti pembayaran</label>
                        <input type="file" class="form-control" name="bukti_bayar_transaksi" id="bukti_bayar_transaksi"
                            aria-describedby="emailHelp" placeholder="Masukan total bayar" required>

                    </div>
                    <div class="mt-5 d-flex justify-content-end">
                        <button type="submit" name="checkout" class="btn btn-info">Kirim</button>
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