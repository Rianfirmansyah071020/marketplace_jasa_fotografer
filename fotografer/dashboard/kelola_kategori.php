<!-- [Head] end -->
<?php

session_start();

if (!isset($_SESSION['id_pengguna'])) {
    header("location: login.php");
}

if ($_SESSION['level_pengguna'] == 'penjual') {
    header("location: index.php");
}


?>
<?php

include 'database/database.php';

if (isset($_POST['tambah_kategori'])) {
    $nama_kategori = $_POST['nama_kategori'];
    $deskripsi_kategori = $_POST['deskripsi_kategori'];

    $gambar_kategori_ori = $_FILES['gambar_kategori']['name'];
    $tmp_gambar_kategori = $_FILES['gambar_kategori']['tmp_name'];
    move_uploaded_file($tmp_gambar_kategori, "assets/img/kategori/$gambar_kategori_ori");
    $gambar_kategori = "assets/img/kategori/$gambar_kategori_ori";

    $query = "INSERT INTO kategori (nama_kategori, deskripsi_kategori, gambar_kategori) VALUES ('$nama_kategori', '$deskripsi_kategori', '$gambar_kategori')";
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

if (isset($_POST['edit_kategori'])) {
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];
    $deskripsi_kategori = $_POST['deskripsi_kategori'];

    if ($_FILES['gambar_kategori']['name'] !== "") {
        $gambar_kategori_ori = $_FILES['gambar_kategori']['name'];
        $tmp_gambar_kategori = $_FILES['gambar_kategori']['tmp_name'];
        move_uploaded_file($tmp_gambar_kategori, "assets/img/kategori/$gambar_kategori_ori");
        $gambar_kategori = "assets/img/kategori/$gambar_kategori_ori";
    } else {
        $gambar_kategori = $_POST['gambar_kategori_lama'];
    }



    $query = "UPDATE kategori SET nama_kategori = '$nama_kategori', deskripsi_kategori = '$deskripsi_kategori', gambar_kategori = '$gambar_kategori' WHERE id_kategori = '$id_kategori'";
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
                                <h5 class="m-b-10">Kelola Kategori</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="kelola_kategori.php">Kelola Kategori</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <?php
                include 'componentsDataKategori/modalTambahDataKategori.php';
                include 'componentsDataKategori/tableDataKategori.php';
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