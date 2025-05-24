<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahDataKategori">
    Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="modalTambahDataKategori" tabindex="-1" aria-labelledby="modalTambahDataKategoriLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahDataKategoriLabel">Tambah Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row d-flex justify-content-start align-items-center">
                        <div class="col-2">
                            <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                                placeholder="Masukan Nama Kategori">
                        </div>
                    </div>
                    <div class="row mt-3 d-flex justify-content-start align-items-center">
                        <div class="col-2">
                            <label for="deskripsi_kategori" class="form-label">Deskripsi Kategori</label>
                        </div>
                        <div class="col-9">
                            <textarea name="deskripsi_kategori" id="deskripsi_kategori" rows="3" class="form-control"
                                placeholder="Masukan Deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3 d-flex justify-content-start align-items-center">
                        <div class="col-2">
                            <label for="gambar_kategori" class="form-label">Gambar Kategori</label>
                        </div>
                        <div class="col-5">
                            <input type="file" class="form-control" id="gambar_kategori" name="gambar_kategori"
                                placeholder="Masukan Harga Kategori">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="tambah_kategori" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>