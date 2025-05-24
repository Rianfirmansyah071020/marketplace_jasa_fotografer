<!-- [Head] end -->
<?php

include 'database/database.php';

session_start();

if (!isset($_SESSION['id_pengguna'])) {
    header("location: login.php");
}

if ($_SESSION['level_pengguna'] == 'Penyedia Jasa') {
    $queryJumlahTransaksi = "SELECT SUM(total_bayar_transaksi) AS jumlah_transaksi FROM transaksi WHERE id_pengguna = '$_SESSION[id_pengguna]'";
} else {
    $queryJumlahTransaksi = "SELECT SUM(total_bayar_transaksi) AS jumlah_transaksi FROM transaksi";
}


$resultJumlahTransaksi = mysqli_query($conn, $queryJumlahTransaksi);
$dataJumlahTransaksi = mysqli_fetch_all($resultJumlahTransaksi, MYSQLI_ASSOC);

$queryJumlahPengguna = "SELECT COUNT(*) AS jumlah_pengguna FROM pengguna";
$resultJumlahPengguna = mysqli_query($conn, $queryJumlahPengguna);
$dataJumlahPengguna = mysqli_fetch_all($resultJumlahPengguna, MYSQLI_ASSOC);

$queryJumlahPendapatan = "SELECT SUM(total_pendapatan) AS jumlah_pendapatan FROM pendapatan";
$resultJumlahPendapatan = mysqli_query($conn, $queryJumlahPendapatan);
$dataJumlahPendapatan = mysqli_fetch_all($resultJumlahPendapatan, MYSQLI_ASSOC);


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
                                <h5 class="m-b-10">Home</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Home</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Transaksi</h6>
                            <h4 class="mb-3">Rp. <?= number_format($dataJumlahTransaksi[0]['jumlah_transaksi']); ?>
                                <span class="badge bg-light-primary border border-primary"><i
                                        class="ti ti-trending-up"></i> 59.3%</span>
                            </h4>
                        </div>
                    </div>
                </div>
                <?php

                if ($_SESSION['level_pengguna'] == 'admin') { ?>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Pengguna</h6>
                                <h4 class="mb-3"><?= number_format($dataJumlahPengguna[0]['jumlah_pengguna']); ?> <span
                                        class="badge bg-light-success border border-success"><i
                                            class="ti ti-trending-up"></i> 70.5%</span></h4>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php

                if ($_SESSION['level_pengguna'] == 'admin') { ?>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-2 f-w-400 text-muted">Total Pendapatan</h6>
                                <h4 class="mb-3">Rp. <?= number_format($dataJumlahPendapatan[0]['jumlah_pendapatan']); ?>
                                    <span class="badge bg-light-success border border-success"><i
                                            class="ti ti-trending-up"></i> 70.5%</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                <?php }

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