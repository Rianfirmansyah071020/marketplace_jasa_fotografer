<div class="table-responsive card p-3 border-0 mt-5">
    <table class="table table-sm table-hover table-striped table-bordered" id="dataTableDataJasa">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Penyedia</th>
                <th class="text-center">Kategori Jasa</th>
                <th class="text-center">Nama Jasa</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataJasa as $key => $value) { ?>
                <tr>
                    <td class="text-center"><?= $key + 1 ?></td>
                    <td class=""><?= $value['nama_pengguna'] ?></td>
                    <td class=""><?= $value['nama_kategori'] ?></td>
                    <td class=""><?= $value['nama_jasa'] ?></td>
                    <td class=""><?= $value['deskripsi_jasa'] ?></td>
                    <td class="">Rp.<?= $value['harga_jasa'] ?></td>
                    <td class=" text-center">
                        <img src="<?= $value['gambar_jasa'] ?>" alt="images" class="img-fluid mb-2" style="width: 70px;">
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                            data-bs-target="#modalEditDataJasa<?= $value['id_jasa'] ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <div class="modal fade" id="modalEditDataJasa<?= $value['id_jasa'] ?>" tabindex="-1"
                            aria-labelledby="modalEditDataJasaLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalEditDataJasaLabel">Edit jasa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id_jasa" value="<?= $value['id_jasa'] ?>">
                                            <div class="row d-flex justify-content-start align-items-center">
                                                <div class="col-2">
                                                    <label for="nama_jasa" class="form-label">Nama jasa</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" class="form-control" id="nama_jasa" name="nama_jasa"
                                                        value="<?= $value['nama_jasa'] ?>" placeholder="Masukan Nama jasa">
                                                </div>
                                            </div>
                                            <div class="row mt-3 d-flex justify-content-start align-items-center">
                                                <div class="col-2">
                                                    <label for="id_kategori" class="form-label">Kategori Jasa</label>
                                                </div>
                                                <div class="col-6">
                                                    <select name="id_kategori" id="" class="form-control">
                                                        <?php
                                                        var_dump($dataKategori);
                                                        foreach ($dataKategori as $key => $kategori) {

                                                        ?>
                                                            <option value="<?= $kategori['id_kategori'] ?>"
                                                                <?php if ($kategori['id_kategori'] == $value['id_kategori']) { ?>
                                                                selected <?php } ?>>
                                                                <?= $kategori['nama_kategori'] ?></option>
                                                        <?php
                                                        }  ?>
                                                    </select>


                                                </div>
                                            </div>
                                            <div class="row mt-3 d-flex justify-content-start align-items-center">
                                                <div class="col-2">
                                                    <label for="deskripsi_jasa" class="form-label">Deskripsi
                                                        jasa</label>
                                                </div>
                                                <div class="col-9">
                                                    <textarea name="deskripsi_jasa" id="deskripsi_jasa" rows="3"
                                                        class="form-control"
                                                        placeholder="Masukan Deskripsi"><?= $value['deskripsi_jasa'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-3 d-flex justify-content-start align-items-center">
                                                <div class="col-2">
                                                    <label for="harga_jasa" class="form-label">Harga jasa</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" class="form-control" id="harga_jasa"
                                                        name="harga_jasa" value="<?= $value['harga_jasa'] ?>"
                                                        placeholder="Masukan Harga jasa">
                                                </div>
                                            </div>
                                            <div class="row mt-3 d-flex justify-content-start align-items-center">
                                                <div class="col-2">
                                                    <label for="gambar_jasa" class="form-label">Gambar jasa</label>
                                                </div>
                                                <div class="col-5">
                                                    <input type="file" class="form-control" id="gambar_jasa"
                                                        name="gambar_jasa" placeholder="Masukan Harga jasa">
                                                    <input type="hidden" class="form-control" id="gambar_jasa"
                                                        name="gambar_jasa_lama" value="<?= $value['gambar_jasa'] ?>"
                                                        placeholder="Masukan jasa">
                                                </div>
                                            </div>
                                            <div class="row mt-3 d-flex justify-content-start align-items-center">
                                                <div class="col-2">
                                                    <label for="gambar_jasa" class="form-label">Gambar Lama
                                                        jasa</label>
                                                </div>
                                                <div class="col-5">
                                                    <img src="<?= $value['gambar_jasa'] ?>" alt="images"
                                                        class="img-fluid mb-2" style="width: 100px;">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="edit_jasa" class="btn btn-primary">Save</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <a href="componentsDataJasa/deleteDataJasa.php?id_jasa=<?= $value['id_jasa'] ?>"
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
        $('#dataTableDataJasa').DataTable();
        // alert('test');
    });
</script>