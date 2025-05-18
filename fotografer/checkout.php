<?php

include 'layouts/head.php';

?>

<body class="container-fluid">

    <?php

    include 'layouts/svg.php';

    ?>

    <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div>

    <a href="index.php" class="btn btn-sm btn-dark">
        Kembali</a>

    <div class="row mt-3 d-flex justify-content-center">
        <div class="card col-12 border-0 bg-secondary p-3">
            <h3 class="text-center text-dark">Checkout</h3>
            <div class="card-body">
                <form action="daftar-jasa.php" method="POST">
                    <div class="mb-3">
                        <label for="total_bayar" class="form-label text-dark">Total Harga</label>
                        <input type="number" class="form-control" id="total_bayar" aria-describedby="emailHelp"
                            placeholder="Masukan total bayar">

                    </div>
                    <div class="mb-3">
                        <label for="total_bayar" class="form-label text-dark">Bukti pembayaran</label>
                        <input type="file" class="form-control" id="total_bayar" aria-describedby="emailHelp"
                            placeholder="Masukan total bayar">

                    </div>
                    <div class="mt-5 d-flex justify-content-end">
                        <button type="submit" class="btn btn-info">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <?php

    include 'layouts/footer.php';

    ?>

    <div id="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>© <?= date('Y') ?> Fotografer. All rights reserved.</p>
                </div>

            </div>
        </div>
    </div>

    <?php

    include 'layouts/script.php';

    ?>

</body>