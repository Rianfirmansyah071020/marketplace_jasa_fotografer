<?php

include "../database/database.php";

if (isset($_GET['id_kategori'])) {

    $id_kategori = $_GET['id_kategori'];
    $query = "DELETE FROM kategori WHERE id_kategori = '$id_kategori'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "
            <script>
                alert('Data berhasil dihapus');
                window.location.href = '../kelola_kategori.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus');
                window.location.href = '../kelola_kategori.php';
            </script>
        ";
    }
} else {
    echo "
            <script>
                alert('Data tidak di temukan');
                window.location.href = '../kelola_kategori.php';
            </script>
        ";
}
