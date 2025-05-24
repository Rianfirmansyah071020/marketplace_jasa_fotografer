 <nav class="pc-sidebar">
     <div class="navbar-wrapper">
         <div class="navbar-content">
             <ul class="pc-navbar">
                 <li class="pc-item">
                     <a href="index.php" class="pc-link">
                         <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                         <span class="pc-mtext">Dashboard</span>
                     </a>
                 </li>

                 <li class="pc-item pc-caption">
                     <label>Manage Data</label>
                     <i class="ti ti-dashboard"></i>
                 </li>
                 <?php

                    if ($_SESSION['level_pengguna'] == 'admin') : ?>
                 <li class="pc-item">
                     <a href="kelola_pengguna.php" class="pc-link">
                         <span class="pc-micon"><i class="fa-solid fa-folder"></i></span>
                         <span class="pc-mtext">Kelola Pengguna</span>
                     </a>
                 </li>

                 <?php endif; ?>
                 <?php

                    if ($_SESSION['level_pengguna'] == 'admin') : ?>
                 <li class="pc-item">
                     <a href="kelola_kategori.php" class="pc-link">
                         <span class="pc-micon"><i class="fa-solid fa-folder"></i></span>
                         <span class="pc-mtext">Kelola Kategori</span>
                     </a>
                 </li>

                 <?php endif; ?>
                 <li class="pc-item">
                     <a href="kelola_jasa.php" class="pc-link">
                         <span class="pc-micon"><i class="fa-solid fa-folder"></i></span>
                         <span class="pc-mtext">Kelola jasa</span>
                     </a>
                 </li>
                 <li class="pc-item">
                     <a href="kelola_transaksi.php" class="pc-link">
                         <span class="pc-micon"><i class="fa-solid fa-folder"></i></span>
                         <span class="pc-mtext">Kelola transaksi</span>
                     </a>
                 </li>
                 <?php

                    if ($_SESSION['level_pengguna'] == 'admin') { ?>
                 <li class="pc-item">
                     <a href="kelola_pendapatan.php" class="pc-link">
                         <span class="pc-micon"><i class="fa-solid fa-folder"></i></span>
                         <span class="pc-mtext">Kelola pendapatan</span>
                     </a>
                 </li>
                 <?php }

                    ?>
                 <li class="pc-item">
                     <a href="logout.php" class="pc-link" onclick="return confirm('Apakah anda yakin ingin logout?')">
                         <span class="pc-micon"><i class="fa-solid fa-right-from-bracket"></i></span>
                         <span class="pc-mtext">Logout</span>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>