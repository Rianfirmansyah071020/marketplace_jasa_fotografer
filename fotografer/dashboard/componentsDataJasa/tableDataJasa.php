<div class="table-responsive card p-3 border-0 mt-5">
    <table class="table table-sm table-hover table-striped table-bordered" id="dataTableDataJasa">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Jasa</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td class="">Foto dengan camera kualitas terbaik</td>
                <td class="">Mengambil foto dengan kamera yang memiliki kualitas tinggi</td>
                <td class="">Rp. 150,000</td>
                <td class="">
                    <img src="assets/images/img-navbar-card.png" alt="images" class="img-fluid mb-2"
                        style="width: 100px;">
                </td>
                <td class="text-center">
                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                        data-bs-target="#modalEditDataJasa">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>

                    <a href="" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td class="">Foto dengan camera kualitas terbaik</td>
                <td class="">Mengambil foto dengan kamera yang memiliki kualitas tinggi</td>
                <td class="">Rp. 150,000</td>
                <td class="">
                    <img src="assets/images/img-navbar-card.png" alt="images" class="img-fluid mb-2"
                        style="width: 100px;" data-bs-toggle="modal" data-bs-target="#modalEditDataJasa">
                </td>
                <td class="text-center">
                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                        data-bs-target="#modalEditDataJasa">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>

                    <a href="" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<script>
$(document).ready(function() {
    $('#dataTableDataJasa').DataTable();
    // alert('test');
});
</script>