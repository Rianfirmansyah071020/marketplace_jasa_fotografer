<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahDataPengguna">
    Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="modalTambahDataPengguna" tabindex="-1" aria-labelledby="modalTambahDataPenggunaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahDataPenggunaLabel">Tambah Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nik" class="form-label text-dark">Nik</label>
                        <input type="text" name="nik_pengguna" class="form-control" id="nik" aria-describedby="textHelp"
                            placeholder="Masukan NIK" required>

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label text-dark">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="textHelp"
                            placeholder="Masukan Nama Lengkap" name="nama_pengguna" required>

                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label text-dark">Tempat lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" aria-describedby="textHelp"
                            placeholder="Masukan tempat lahir Lengkap" required name="tempat_lahir_pengguna">

                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir_pengguna" class="form-label text-dark">Tanggal lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir_pengguna" aria-describedby="emailHelp"
                            placeholder="Masukan tempat lahir Lengkap" required name="tanggal_lahir_pengguna">

                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label text-dark">Jenis Kelamin</label> <br>
                        <input type="radio" name="jenis_kelamin_pengguna" id="" value="Laki-laki"> Laki-laki <br>
                        <input type="radio" name="jenis_kelamin_pengguna" id="" value="Perempuan"> Perempuan <br>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label text-dark">Alamat</label>
                        <textarea name="alamat_pengguna" id="alamat" required class="form-control"
                            placeholder="Masukan Alamat"></textarea>

                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label text-dark">Daftar sebagai</label> <br>
                        <input type="radio" name="level_pengguna" id="" value="Penyedia Jasa"> Penyedia Jasa <br>
                        <input type="radio" name="level_pengguna" id="" value="Pelanggan"> Pelanggan <br>
                        <input type="radio" name="level_pengguna" id="" value="admin"> admin <br>
                    </div>
                    <div class="mb-3">
                        <label for="nomor_hp_pengguna" class="form-label text-dark">Nomor HP</label>
                        <input type="text" name="nomor_hp_pengguna" class="form-control" id="nomor_hp_pengguna"
                            aria-describedby="textHelp" placeholder="Masukan email pengguna" required>

                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label text-dark">Email</label>
                        <input type="email" name="email_pengguna" class="form-control" id="email_pengguna"
                            aria-describedby="textHelp" placeholder="Masukan email pengguna" required>

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-dark">password</label>
                        <input type="text" name="password_pengguna" class="form-control" id="password"
                            aria-describedby="textHelp" placeholder="Masukan password" required>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="tambah_pengguna" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>