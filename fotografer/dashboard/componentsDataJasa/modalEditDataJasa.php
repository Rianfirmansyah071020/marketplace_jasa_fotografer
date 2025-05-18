<!-- Modal -->
<div class="modal fade" id="modalEditDataJasa" tabindex="-1" aria-labelledby="modalEditDataJasaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditDataJasaLabel">Edit Jasa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row d-flex justify-content-start align-items-center">
                        <div class="col-2">
                            <label for="nama_jasa" class="form-label">Nama Jasa</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="nama_jasa" name="nama_jasa"
                                placeholder="Masukan Nama Jasa">
                        </div>
                    </div>
                    <div class="row mt-3 d-flex justify-content-start align-items-center">
                        <div class="col-2">
                            <label for="deskripsi_jasa" class="form-label">Deskripsi Jasa</label>
                        </div>
                        <div class="col-9">
                            <textarea name="deskripsi_jasa" id="deskripsi_jasa" rows="3" class="form-control"
                                placeholder="Masukan Deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3 d-flex justify-content-start align-items-center">
                        <div class="col-2">
                            <label for="harga_jasa" class="form-label">Harga Jasa</label>
                        </div>
                        <div class="col-4">
                            <input type="number" class="form-control" id="harga_jasa" name="harga_jasa"
                                placeholder="Masukan Harga Jasa">
                        </div>
                    </div>
                    <div class="row mt-3 d-flex justify-content-start align-items-center">
                        <div class="col-2">
                            <label for="gambar_jasa" class="form-label">Gambar Jasa</label>
                        </div>
                        <div class="col-5">
                            <input type="file" class="form-control" id="gambar_jasa" name="gambar_jasa"
                                placeholder="Masukan Harga Jasa">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>