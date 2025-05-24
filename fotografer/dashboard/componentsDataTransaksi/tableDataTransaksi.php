<div class="table-responsive card p-3 border-0 mt-5">
    <table class="table table-sm table-hover table-striped table-bordered" id="dataTableDataTransaksi">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Kode</th>
                <th class="text-center">Pemesan</th>
                <th class="text-center">Nama Jasa</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Catatan</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Total Bayar</th>
                <th class="text-center">Potongan</th>
                <th class="text-center">Bukti Transaksi</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($dataTransaksi as $key => $value) {
            ?>
                <tr>
                    <td class="text-center"><?= $key + 1; ?></td>
                    <td class="text-center"><?= $value['kode_transaksi']; ?></td>
                    <td class="text-center"><?= $value['nama_pengguna']; ?></td>
                    <td class="text-center"><?= $value['nama_jasa']; ?></td>
                    <td class="text-center"><?= $value['deskripsi_jasa']; ?></td>
                    <td class="text-center"><?= $value['tanggal_transaksi']; ?></td>
                    <td class="text-center"><?= $value['catatan']; ?></td>
                    <td class="text-center">Rp. <?= number_format($value['harga_jasa']); ?></td>
                    <td class="text-center">Rp. <?= number_format($value['total_bayar_transaksi']); ?></td>
                    <td class="text-center">Rp. <?= number_format($value['potongan_transaksi']); ?></td>
                    <td class="text-center">
                        <img src="<?= $value['bukti_bayar_transaksi']; ?>" alt="images" class="img-fluid mb-2"
                            style="width: 100px;">
                    </td>

                <?php }  ?>
        </tbody>
    </table>
</div>


<script>
    $(document).ready(function() {
        $('#dataTableDataTransaksi').DataTable();
        // alert('test');
    });
</script>