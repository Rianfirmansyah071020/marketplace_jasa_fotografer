 <?php

    session_start();

    if (isset($_SESSION['id_pengguna'])) {
        header("location: index.php");
    }


    ?>
 <?php

    include 'database/database.php';

    if (isset($_POST['login'])) {
        $email_pengguna = $_POST['email_pengguna'];
        $password_pengguna = $_POST['password_pengguna'];

        $query = "SELECT * FROM pengguna WHERE email_pengguna = '$email_pengguna'";

        if (!$query) {
            echo "
                <script>
                    alert('Data gagal ditambahkan');
                    window.location.href = '';
                </script>
            ";
        }

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password_pengguna, $row['password_pengguna'])) {
            session_start();

            $_SESSION['id_pengguna'] = $row['id_pengguna'];
            $_SESSION['nik_pengguna'] = $row['nik_pengguna'];
            $_SESSION['nama_pengguna'] = $row['nama_pengguna'];
            $_SESSION['tempat_lahir_pengguna'] = $row['tempat_lahir_pengguna'];
            $_SESSION['tanggal_lahir_pengguna'] = $row['tanggal_lahir_pengguna'];
            $_SESSION['jenis_kelamin_pengguna'] = $row['jenis_kelamin_pengguna'];
            $_SESSION['alamat_pengguna'] = $row['alamat_pengguna'];
            $_SESSION['email_pengguna'] = $row['email_pengguna'];
            $_SESSION['level_pengguna'] = $row['level_pengguna'];

            if ($row['level_pengguna'] == 'Penyedia Jasa') {
                header("location: index.php");
            } elseif ($row['level_pengguna'] == 'admin') {
                header("location: index.php");
            } elseif ($row['level_pengguna'] == 'Pelanggan') {
                header("location: ../index.php");
            }
        }
    }
    ?>

 <?php
    include 'layouts/links.php';
    ?>

 <div class="auth-main">
     <div class="auth-wrapper v3">
         <div class="auth-form">

             <div class="card my-5">
                 <div class="card-body">
                     <div class="d-flex justify-content-between align-items-end mb-4">
                         <h3 class="mb-0"><b>Login</b></h3>
                         <a href="../daftar-akun.php" class="link-primary">Don't have an account?</a>
                     </div>
                     <form action="" method="post">
                         <div class="form-group mb-3">
                             <label class="form-label">Email Address</label>
                             <input type="email" class="form-control" name="email_pengguna" placeholder="Email Address">
                         </div>
                         <div class="form-group mb-3">
                             <label class="form-label">Password</label>
                             <input type="password" class="form-control" name="password_pengguna"
                                 placeholder="Password">
                         </div>
                         <div class="d-grid mt-4">
                             <button type="submit" class="btn btn-primary" name="login">Login</button>
                         </div>
                         <div class=" mt-3">
                             <a href="../index.php" class="btn btn-info w-100">Dashboard</a>
                         </div>
                     </form>
                 </div>
             </div>
             <div class="auth-footer row">
                 <!-- <div class=""> -->
                 <div class="col my-1">
                     <p class="m-0">Copyright © <a href="#">Ranalda Olivia</a></p>
                 </div>
                 <div class="col-auto my-1">
                     <ul class="list-inline footer-link mb-0">
                         <li class="list-inline-item"><a href="#">Home</a></li>
                         <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                         <li class="list-inline-item"><a href="#">Contact us</a></li>
                     </ul>
                 </div>
                 <!-- </div> -->
             </div>
         </div>
     </div>
 </div>
 <?php
    include 'layouts/scripts.php';
    ?>