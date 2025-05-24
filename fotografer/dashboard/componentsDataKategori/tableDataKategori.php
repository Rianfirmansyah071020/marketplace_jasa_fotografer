<div class="table-responsive card p-3 border-0 mt-5">
    <table class="table table-sm table-hover table-striped table-bordered" id="dataTableDataKategori">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Kategori</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataKategori as $key => $value) { ?>
                <tr>
                    <td class="text-center"><?= $key + 1 ?></td>
                    <td class=""><?= $value['nama_kategori'] ?></td>
                    <td class=""><?= $value['deskripsi_kategori'] ?></td>
                    <td class=" text-center">
                        <img src="<?= $value['gambar_kategori'] ?>" alt="images" class="img-fluid mb-2"
                            style="width: 70px;">
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                            data-bs-target="#modalEditDataKategori<?= $value['id_kategori'] ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <div class="modal fade" id="modalEditDataKategori<?= $value['id_kategori'] ?>" tabindex="-1"
                            aria-labelledby="modalEditDataKategoriLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalEditDataKategoriLabel">Edit Kategori</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id_kategori" value="<?= $value['id_kategori'] ?>">
                                            <div class="row d-flex justify-content-start align-items-center">
                                                <div class="col-2">
                                                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" class="form-control" id="nama_kategori"
                                                        name="nama_kategori" value="<?= $value['nama_kategori'] ?>"
                                                        placeholder="Masukan Nama Kategori">
                                                </div>
                                            </div>
                                            <div class="row mt-3 d-flex justify-content-start align-items-center">
                                                <div class="col-2">
                                                    <label for="deskripsi_kategori" class="form-label">Deskripsi
                                                        Kategori</label>
                                                </div>
                                                <div class="col-9">
                                                    <textarea name="deskripsi_kategori" id="deskripsi_kategori" rows="3"
                                                        class="form-control"
                                                        placeholder="Masukan Deskripsi"><?= $value['deskripsi_kategori'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-3 d-flex justify-content-start align-items-center">
                                                <div class="col-2">
                                                    <label for="gambar_kategori" class="form-label">Gambar Kategori</label>
                                                </div>
                                                <div class="col-5">
                                                    <input type="file" class="form-control" id="gambar_kategori"
                                                        name="gambar_kategori" placeholder="Masukan Harga Kategori">
                                                    <input type="hidden" class="form-control" id="gambar_kategori"
                                                        name="gambar_kategori_lama" value="<?= $value['gambar_kategori'] ?>"
                                                        placeholder="Masukan Kategori">
                                                </div>
                                            </div>
                                            <div class="row mt-3 d-flex justify-content-start align-items-center">
                                                <div class="col-2">
                                                    <label for="gambar_kategori" class="form-label">Gambar Lama
                                                        Kategori</label>
                                                </div>
                                                <div class="col-5">
                                                    <img src="<?= $value['gambar_kategori'] ?>" alt="images"
                                                        class="img-fluid mb-2" style="width: 100px;">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="edit_kategori" class="btn btn-primary">Save</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <a href="componentsDataKategori/deleteDataKategori.php?id_kategori=<?= $value['id_kategori'] ?>"
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
        $('#dataTableDataKategori').DataTable();
        // alert('test');
    });
</script>