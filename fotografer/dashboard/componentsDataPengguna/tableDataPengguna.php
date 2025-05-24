<div class="table-responsive card p-3 border-0 mt-5">
    <table class="table table-sm table-hover table-striped table-bordered" id="dataTableDataPengguna">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nik</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Tempat Lahir</th>
                <th class="text-center">Tanggal Lahir</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Email</th>
                <th class="text-center">Nomor Hp</th>
                <th class="text-center">Level</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datapengguna as $key => $value) { ?>
                <tr>
                    <td class="text-center"><?= $key + 1 ?></td>
                    <td class=""><?= $value['nik_pengguna'] ?></td>
                    <td class=""><?= $value['nama_pengguna'] ?></td>
                    <td class=""><?= $value['tempat_lahir_pengguna'] ?></td>
                    <td class=""><?= $value['tanggal_lahir_pengguna'] ?></td>
                    <td class=""><?= $value['jenis_kelamin_pengguna'] ?></td>
                    <td class=""><?= $value['alamat_pengguna'] ?></td>
                    <td class=""><?= $value['email_pengguna'] ?></td>
                    <td class=""><?= $value['nomor_hp_pengguna'] ?></td>
                    <td class=""><?= $value['level_pengguna'] ?></td>

                    <td class="text-start">
                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                            data-bs-target="#modalEditDataPengguna<?= $value['id_pengguna'] ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <div class="modal fade" id="modalEditDataPengguna<?= $value['id_pengguna'] ?>" tabindex="-1"
                            aria-labelledby="modalEditDataPenggunaLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalEditDataPenggunaLabel">Edit Pengguna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id_pengguna" value="<?= $value['id_pengguna'] ?>">
                                            <div class="mb-3">
                                                <label for="nik" class="form-label text-dark">Nik</label>
                                                <input type="text" name="nik_pengguna" class="form-control" id="nik"
                                                    aria-describedby="textHelp" value="<?= $value['nik_pengguna'] ?>"
                                                    placeholder="Masukan NIK" required>

                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label text-dark">Nama</label>
                                                <input type="text" class="form-control" id="nama"
                                                    aria-describedby="textHelp" placeholder="Masukan Nama Lengkap"
                                                    name="nama_pengguna" value="<?= $value['nama_pengguna'] ?>" required>

                                            </div>
                                            <div class="mb-3">
                                                <label for="tempat_lahir" class="form-label text-dark">Tempat lahir</label>
                                                <input type="text" class="form-control" id="tempat_lahir"
                                                    aria-describedby="textHelp" placeholder="Masukan tempat lahir Lengkap"
                                                    required name="tempat_lahir_pengguna"
                                                    value="<?= $value['tempat_lahir_pengguna'] ?>">

                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggal_lahir_pengguna" class="form-label text-dark">Tanggal
                                                    lahir</label>
                                                <input type="date" class="form-control" id="tanggal_lahir_pengguna"
                                                    aria-describedby="emailHelp" placeholder="Masukan tempat lahir Lengkap"
                                                    required name="tanggal_lahir_pengguna"
                                                    value="<?= $value['tanggal_lahir_pengguna'] ?>">

                                            </div>
                                            <div class="mb-3">
                                                <label for="jenis_kelamin" class="form-label text-dark">Jenis
                                                    Kelamin</label> <br>
                                                <input type="radio" name="jenis_kelamin_pengguna" id="" value="Laki-laki"
                                                    <?php if ($value['jenis_kelamin_pengguna'] == 'Laki-laki') { ?> checked
                                                    <?php } ?>>
                                                Laki-laki <br>
                                                <input type="radio" name="jenis_kelamin_pengguna" id="" value="Perempuan"
                                                    <?php if ($value['jenis_kelamin_pengguna'] == 'Perempuan') { ?> checked
                                                    <?php } ?>>
                                                Perempuan <br>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label text-dark">Alamat</label>
                                                <textarea name="alamat_pengguna" id="alamat" required class="form-control"
                                                    placeholder="Masukan Alamat"><?= $value['alamat_pengguna'] ?></textarea>

                                            </div>
                                            <div class="mb-3">
                                                <label for="level" class="form-label text-dark">Daftar sebagai</label> <br>
                                                <input type="radio" name="level_pengguna" id="" value="Penyedia Jasa"
                                                    <?php if ($value['level_pengguna'] == 'Penyedia Jasa') { ?> checked
                                                    <?php } ?>>
                                                Penyedia Jasa <br>
                                                <input type="radio" name="level_pengguna" id="" value="Pelanggan"
                                                    <?php if ($value['level_pengguna'] == 'Pelanggan') { ?> checked
                                                    <?php } ?>> Pelanggan <br>
                                                <input type="radio" name="level_pengguna" id="" value="admin"
                                                    <?php if ($value['level_pengguna'] == 'admin') { ?> checked <?php } ?>>
                                                admin <br>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nomor_hp_pengguna" class="form-label text-dark">Nomor HP</label>
                                                <input type="text" name="nomor_hp_pengguna" class="form-control"
                                                    id="nomor_hp_pengguna" aria-describedby="textHelp"
                                                    placeholder="Masukan nomor pengguna" required
                                                    value="<?= $value['nomor_hp_pengguna'] ?>">

                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label text-dark">Email</label>
                                                <input type="email" name="email_pengguna" class="form-control"
                                                    id="email_pengguna" aria-describedby="textHelp"
                                                    placeholder="Masukan email pengguna"
                                                    value="<?= $value['email_pengguna'] ?>" required>

                                            </div>
                                            <div class=" mb-3">
                                                <label for="password" class="form-label text-dark">password baru</label>
                                                <input type="hidden" name="password_pengguna_lama" class="form-control"
                                                    id="password" aria-describedby="textHelp"
                                                    value="<?= $value['password_pengguna'] ?>"
                                                    placeholder="Masukan password">
                                                <input type="text" name="password_pengguna" class="form-control"
                                                    id="password" aria-describedby="textHelp"
                                                    placeholder="Masukan password">

                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="edit_pengguna" class="btn btn-primary">Save</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <a href="componentsDataPengguna/deleteDataPengguna.php?id_pengguna=<?= $value['id_pengguna'] ?>"
                            class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i
                                class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            <?php  } ?>
        </tbody>
    </table>
</div>


<script>
    $(document).ready(function() {
        $('#dataTableDataPengguna').DataTable();
        // alert('test');
    });
</script>