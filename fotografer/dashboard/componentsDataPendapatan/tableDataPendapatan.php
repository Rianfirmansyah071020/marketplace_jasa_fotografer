<div class="table-responsive card p-3 border-0 mt-5">
    <table class="table table-sm table-hover table-striped table-bordered" id="dataTableDataPendapatan">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Pemesan</th>
                <th class="text-center">Nama Jasa</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Total Bayar</th>
                <th class="text-center">Bukti Transaksi</th>
                <th class="text-center">Persentase Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td class="text-center">Nagita</td>
                <td class="">Foto dengan camera kualitas terbaik</td>
                <td class="">Mengambil foto dengan kamera yang memiliki kualitas tinggi</td>
                <td class="">Rp. 150,000</td>
                <td class="">Rp. 150,000</td>
                <td class="">
                    <img src="assets/images/img-navbar-card.png" alt="images" class="img-fluid mb-2"
                        style="width: 100px;">
                </td>
                <td class="">10% (Rp. 15,000)</td>
            </tr>
        </tbody>
    </table>
</div>


<script>
$(document).ready(function() {
    $('#dataTableDataPendapatan').DataTable();
    // alert('test');
});
</script>