<div class="table-responsive card p-3 border-0 mt-5">
    <table class="table table-sm table-hover table-striped table-bordered" id="dataTableDataPendapatan">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Kode Transaksi</th>
                <th class="text-center">Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($dataPendapatan as $key => $value) {
            ?>
            <tr>
                <td class="text-center"><?= $key + 1 ?></td>
                <td class="text-center"><a href="kelola_transaksi.php"
                        class="text-decoration-none"><?= $value['kode_transaksi'] ?></a></td>
                <td class="text-center">Rp. <?= number_format($value['total_pendapatan']) ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>


<script>
$(document).ready(function() {
    $('#dataTableDataPendapatan').DataTable();
    // alert('test');
});
</script>