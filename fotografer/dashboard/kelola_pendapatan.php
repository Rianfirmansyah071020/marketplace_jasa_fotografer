<!-- [Head] end -->
<?php

include 'database/database.php';

session_start();

if (!isset($_SESSION['id_pengguna'])) {
    header("location: login.php");
}

$queryPendapatan = "SELECT * FROM pendapatan INNER JOIN transaksi ON pendapatan.id_transaksi = transaksi.id_transaksi";
$resultPendapatan = mysqli_query($conn, $queryPendapatan);
$dataPendapatan = mysqli_fetch_all($resultPendapatan, MYSQLI_ASSOC);


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
                                <h5 class="m-b-10">Kelola Pendapatan</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="kelola_jasa.php">Kelola Pendapatan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <?php
                include 'componentsDataPendapatan/tableDataPendapatan.php';
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