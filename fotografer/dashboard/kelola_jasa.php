<!-- [Head] end -->
<!-- [Head] end -->
<?php

session_start();

if (!isset($_SESSION['id_pengguna'])) {
    header("location: login.php");
}


?>
<?php

include 'database/database.php';

session_start();
$id_pengguna = $_SESSION['id_pengguna'];

if (isset($_POST['tambah_jasa'])) {
    $nama_jasa = $_POST['nama_jasa'];
    $id_kategori = $_POST['id_kategori'];
    $deskripsi_jasa = $_POST['deskripsi_jasa'];
    $harga_jasa = $_POST['harga_jasa'];

    $gambar_jasa_ori = $_FILES['gambar_jasa']['name'];
    $tmp_gambar_jasa = $_FILES['gambar_jasa']['tmp_name'];
    move_uploaded_file($tmp_gambar_jasa, "assets/img/jasa/$gambar_jasa_ori");
    $gambar_jasa = "assets/img/jasa/$gambar_jasa_ori";


    $query = "INSERT INTO jasa (id_pengguna , id_kategori, nama_jasa, deskripsi_jasa, harga_jasa, gambar_jasa) VALUES ('$id_pengguna', '$id_kategori', '$nama_jasa', '$deskripsi_jasa', '$harga_jasa', '$gambar_jasa')";
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

if (isset($_POST['edit_jasa'])) {
    $id_jasa = $_POST['id_jasa'];
    $id_kategori = $_POST['id_kategori'];
    $nama_jasa = $_POST['nama_jasa'];
    $harga_jasa = $_POST['harga_jasa'];
    $deskripsi_jasa = $_POST['deskripsi_jasa'];

    if ($_FILES['gambar_jasa']['name'] !== "") {
        $gambar_jasa_ori = $_FILES['gambar_jasa']['name'];
        $tmp_gambar_jasa = $_FILES['gambar_jasa']['tmp_name'];
        move_uploaded_file($tmp_gambar_jasa, "assets/img/jasa/$gambar_jasa_ori");
        $gambar_jasa = "assets/img/jasa/$gambar_jasa_ori";
    } else {
        $gambar_jasa = $_POST['gambar_jasa_lama'];
    }



    $query = "UPDATE jasa SET id_kategori = '$id_kategori', nama_jasa = '$nama_jasa', harga_jasa = '$harga_jasa', deskripsi_jasa = '$deskripsi_jasa', gambar_jasa = '$gambar_jasa' WHERE id_jasa = '$id_jasa'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "
            <script>
                alert('Data berhasil update');
                window.location.href = '';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal update');
                window.location.href = '';
            </script>
        ";
    }
}


if ($_SESSION['level_pengguna'] == 'Penyedia Jasa') {

    $queryJasa = mysqli_query($conn, "SELECT * FROM jasa LEFT JOIN kategori ON jasa.id_kategori = kategori.id_kategori LEFT JOIN pengguna ON jasa.id_pengguna = pengguna.id_pengguna WHERE jasa.id_pengguna = '$id_pengguna'");
    $dataJasa = mysqli_fetch_all($queryJasa, MYSQLI_ASSOC);
} else {
    $queryJasa = mysqli_query($conn, "SELECT * FROM jasa LEFT JOIN kategori ON jasa.id_kategori = kategori.id_kategori LEFT JOIN pengguna ON jasa.id_pengguna = pengguna.id_pengguna");
    $dataJasa = mysqli_fetch_all($queryJasa, MYSQLI_ASSOC);
}


$queryKategori = mysqli_query($conn, "SELECT * FROM kategori");
$dataKategori = mysqli_fetch_all($queryKategori, MYSQLI_ASSOC);


?>

<?php
include 'layouts/links.php';
?>
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    <?php
    include 'layouts/sidebar.php';
    ?>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->

    <!-- [ Header ] end -->
    <?php
    include 'layouts/header.php';
    ?>

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Kelola Jasa</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="kelola_jasa.php">Kelola Jasa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <?php
                include 'componentsDataJasa/modalTambahDataJasa.php';
                include 'componentsDataJasa/tableDataJasa.php';
                ?>

            </div>

        </div>
    </div>
    <!-- [ Main Content ] end -->

    <?php
    include 'layouts/footer.php';
    ?>


    <?php
    include 'layouts/scripts.php';
    ?>

</body>
<!-- [Body] end -->

</html>