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

if (isset($_POST['tambah_pengguna'])) {
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


if (isset($_POST['edit_pengguna'])) {
    $id_pengguna = $_POST['id_pengguna'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $nik_pengguna = $_POST['nik_pengguna'];
    $tempat_lahir_pengguna = $_POST['tempat_lahir_pengguna'];
    $jenis_kelamin_pengguna = $_POST['jenis_kelamin_pengguna'];
    $tanggal_lahir_pengguna = $_POST['tanggal_lahir_pengguna'];
    $alamat_pengguna = $_POST['alamat_pengguna'];
    $email_pengguna = $_POST['email_pengguna'];
    $level_pengguna = $_POST['level_pengguna'];
    $nomor_hp_pengguna = $_POST['nomor_hp_pengguna'];

    if ($_POST['password_pengguna'] == '') {
        $password_pengguna = $_POST['password_pengguna_lama'];
    } else {
        $password_pengguna = password_hash($_POST['password_pengguna'], PASSWORD_DEFAULT);
    }

    // cek nik dan email
    // $query = "SELECT * FROM pengguna WHERE nik_pengguna = '$nik_pengguna' OR email_pengguna = '$email_pengguna'";
    // $result = mysqli_query($conn, $query);
    // if (mysqli_num_rows($result) > 1) {
    //     echo "
    //         <script>
    //             alert('NIK atau Email sudah digunakan');
    //             window.location.href = '';
    //         </script>
    //     ";
    //     exit;
    // }



    $query = "UPDATE pengguna SET nik_pengguna = '$nik_pengguna', nama_pengguna = '$nama_pengguna', tempat_lahir_pengguna = '$tempat_lahir_pengguna', tanggal_lahir_pengguna = '$tanggal_lahir_pengguna', jenis_kelamin_pengguna = '$jenis_kelamin_pengguna', alamat_pengguna = '$alamat_pengguna', email_pengguna = '$email_pengguna', nomor_hp_pengguna = '$nomor_hp_pengguna', password_pengguna = '$password_pengguna', level_pengguna = '$level_pengguna'  WHERE id_pengguna = '$id_pengguna'";

    var_dump($query);

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


$querypengguna = mysqli_query($conn, "SELECT * FROM pengguna");
$datapengguna = mysqli_fetch_all($querypengguna, MYSQLI_ASSOC);




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
                                <h5 class="m-b-10">Kelola pengguna</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="kelola_pengguna.php">Kelola pengguna</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <?php
                include 'componentsDatapengguna/modalTambahDatapengguna.php';
                include 'componentsDatapengguna/tableDatapengguna.php';
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