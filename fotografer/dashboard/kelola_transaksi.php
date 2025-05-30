<!-- [Head] end -->
<?php

session_start();

if (!isset($_SESSION['id_pengguna'])) {
    header("location: login.php");
}

?>


<?php

include 'database/database.php';

if ($_SESSION['level_pengguna'] == 'Penyedia Jasa') {
    $queryTransaksi = "SELECT * FROM transaksi LEFT JOIN jasa ON transaksi.id_jasa = jasa.id_jasa LEFT JOIN pengguna ON transaksi.id_pengguna = pengguna.id_pengguna LEFT JOIN kategori ON jasa.id_kategori = kategori.id_kategori WHERE jasa.id_pengguna = '$_SESSION[id_pengguna]'";
} else {
    $queryTransaksi = "SELECT * FROM transaksi LEFT JOIN jasa ON transaksi.id_jasa = jasa.id_jasa LEFT JOIN pengguna ON transaksi.id_pengguna = pengguna.id_pengguna LEFT JOIN kategori ON jasa.id_kategori = kategori.id_kategori";
}

$resultTransaksi = mysqli_query($conn, $queryTransaksi);
$dataTransaksi = mysqli_fetch_all($resultTransaksi, MYSQLI_ASSOC);



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
                                <h5 class="m-b-10">Kelola Transaksi</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="kelola_jasa.php">Kelola Transaksi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <?php
                include 'componentsDataTransaksi/tableDataTransaksi.php';
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