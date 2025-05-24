<?php

include "../database/database.php";

if (isset($_GET['id_pengguna'])) {

    $id_pengguna = $_GET['id_pengguna'];
    $query = "DELETE FROM pengguna WHERE id_pengguna = '$id_pengguna'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "
            <script>
                alert('Data berhasil dihapus');
                window.location.href = '../kelola_pengguna.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus');
                window.location.href = '../kelola_pengguna.php';
            </script>
        ";
    }
} else {
    echo "
            <script>
                alert('Data tidak di temukan');
                window.location.href = '../kelola_pengguna.php';
            </script>
        ";
}
