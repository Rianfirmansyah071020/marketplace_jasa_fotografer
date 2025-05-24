<?php

include "../database/database.php";

if (isset($_GET['id_jasa'])) {

    $id_jasa = $_GET['id_jasa'];
    $query = "DELETE FROM jasa WHERE id_jasa = '$id_jasa'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "
            <script>
                alert('Data berhasil dihapus');
                window.location.href = '../kelola_jasa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus');
                window.location.href = '../kelola_jasa.php';
            </script>
        ";
    }
} else {
    echo "
            <script>
                alert('Data tidak di temukan');
                window.location.href = '../kelola_jasa.php';
            </script>
        ";
}
