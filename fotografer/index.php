<?php

session_start();

include "dashboard/database/database.php";

$queryKategori = "SELECT * FROM kategori";
$resultKategori = mysqli_query($conn, $queryKategori);
$dataKategori = mysqli_fetch_all($resultKategori, MYSQLI_ASSOC);


$queryJasa = "SELECT * FROM jasa INNER JOIN kategori ON jasa.id_kategori = kategori.id_kategori";
$resultJasa = mysqli_query($conn, $queryJasa);
$dataJasa = mysqli_fetch_all($resultJasa, MYSQLI_ASSOC);


?>


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

    <?php

    include 'layouts/cart.php';



    include 'layouts/search.php';


    include 'layouts/header.php';

    ?>

    <section class="py-3"
        style="background-image: url('assets/images/background-pattern.jpg');background-repeat: no-repeat;background-size: cover;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="banner-blocks">

                        <div class="banner-ad large bg-dark block-1">

                            <div class="swiper main-swiper">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="row banner-content p-5">
                                            <div class="content-wrapper col-md-7">
                                                <div class="categories h4 my-3">Abadikan Momen Tanpa Batas</div>
                                                <h3 class="display-4 text-light">Layanan Fotografi Profesional</h3>
                                                <p>Setiap momen berharga layak diabadikan dengan sentuhan seni. Kami
                                                    hadir dengan kamera berkualitas tinggi dan tim fotografer
                                                    berpengalaman untuk menciptakan gambar yang tak hanya terlihat, tapi
                                                    terasa.</p>
                                                <a href="#"
                                                    class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Lihat
                                                    Portofolio</a>
                                            </div>
                                            <div class="img-wrapper col-md-5">
                                                <img src="assets/images/fotografer/camera-4513520_1280-removebg-preview.png"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>


                                    <div class=" swiper-slide">
                                        <div class="row banner-content p-5">
                                            <div class="content-wrapper col-md-7">
                                                <div class="categories h4 my-3">Abadikan Momen Tanpa Batas</div>
                                                <h3 class="display-4 text-light">Layanan Fotografi Profesional</h3>
                                                <p>Setiap momen berharga layak diabadikan dengan sentuhan seni. Kami
                                                    hadir dengan kamera berkualitas tinggi dan tim fotografer
                                                    berpengalaman untuk menciptakan gambar yang tak hanya terlihat, tapi
                                                    terasa.</p>
                                                <a href="#"
                                                    class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Lihat
                                                    Portofolio</a>
                                            </div>
                                            <div class="img-wrapper col-md-5">
                                                <img src="assets/images/fotografer/contaflex-1680421_1280-removebg-preview.png"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="row banner-content p-5">
                                            <div class="content-wrapper col-md-7">
                                                <div class="categories h4 my-3">Abadikan Momen Tanpa Batas</div>
                                                <h3 class="display-4 text-light">Layanan Fotografi Profesional</h3>
                                                <p>Setiap momen berharga layak diabadikan dengan sentuhan seni. Kami
                                                    hadir dengan kamera berkualitas tinggi dan tim fotografer
                                                    berpengalaman untuk menciptakan gambar yang tak hanya terlihat, tapi
                                                    terasa.</p>
                                                <a href="#"
                                                    class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Lihat
                                                    Portofolio</a>
                                            </div>
                                            <div class="img-wrapper col-md-5">
                                                <img src="assets/images/fotografer/instax-5128421_1280-removebg-preview.png"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-pagination"></div>

                            </div>
                        </div>

                        <div class="banner-ad block-2 position-relative text-white"
                            style="background: url('assets/images/fotografer/photographer-640419_1280-removebg-preview.png') no-repeat; background-position: right bottom; background-color: #2c2c2c;">

                            <!-- Overlay gelap transparan -->
                            <div class="position-absolute top-0 start-0 w-100 h-100"
                                style="background: rgba(0,0,0,0.5); z-index: 1;"></div>

                            <div class="row banner-content p-5 position-relative" style="z-index: 2;">
                                <div class="content-wrapper col-md-7">
                                    <div class=" sale mb-3 pb-3 text-primary fw-bold">🎉 Diskon 20% Booking
                                        Sekarang!</div>
                                    <h3 class="banner-title display-5 fw-semibold text-white text-shadow">Jasa Fotografi
                                        Profesional</h3>
                                    <a href="#"
                                        class="d-flex align-items-center nav-link text-white fw-bold text-decoration-underline">
                                        Lihat Layanan
                                        <svg width="24" height="24" class="ms-2">
                                            <use xlink:href="#arrow-right"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>



                        <div class="banner-ad bg-dark block-3"
                            style="background:url('assets/images/fotografer/slr-camera-3418009_1280-removebg-preview.png') no-repeat;background-position: right bottom">
                            <div class="row banner-content p-5">

                                <div class="content-wrapper col-md-7">
                                    <div class="categories sale mb-3 pb-3">15% off</div>
                                    <h3 class="item-title">Baked Products</h3>
                                    <a href="#" class="d-flex align-items-center nav-link">Shop Collection <svg
                                            width="24" height="24">
                                            <use xlink:href="#arrow-right"></use>
                                        </svg></a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- / Banner Blocks -->

                </div>
            </div>
        </div>
    </section>

    <section class="py-5 overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header d-flex flex-wrap justify-content-between mb-5">
                        <h2 class="section-title">Category</h2>

                        <div class="d-flex align-items-center">
                            <a href="#" class="btn-link text-decoration-none">View All Categories →</a>
                            <div class="swiper-buttons">
                                <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
                                <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="category-carousel swiper">
                        <div class="swiper-wrapper">
                            <?php

                            foreach ($dataKategori as $key => $kategori) {
                            ?>
                                <a href="#" class="nav-link category-item swiper-slide">
                                    <img src="dashboard/<?= $kategori['gambar_kategori'] ?>" alt="Category Thumbnail"
                                        style="width: 100px;">
                                    <h3 class="category-title"><?= $kategori['nama_kategori'] ?></h3>
                                </a>
                            <?php
                            }

                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <div class="bootstrap-tabs product-tabs">
                        <div class="tabs-header d-flex justify-content-between border-bottom my-5">
                            <h3>Layanan fotografer terfavorit</h3>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a href="#" class="nav-link text-uppercase fs-6 active" id="nav-all-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-all">All</a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                aria-labelledby="nav-all-tab">

                                <div
                                    class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                                    <?php

                                    foreach ($dataJasa as $key => $jasa) { ?>

                                        <div class="col">
                                            <div class="product-item">
                                                <!-- <span class="badge bg-success position-absolute m-3">-30%</span> -->
                                                <a href="#" class="btn-wishlist"><svg width="24" height="24">
                                                        <use xlink:href="#heart"></use>
                                                    </svg></a>
                                                <figure>
                                                    <a href="#" title="Product Title">
                                                        <img src="dashboard/<?= $jasa['gambar_jasa'] ?>" class="tab-image">
                                                    </a>
                                                </figure>
                                                <h3><?= $jasa['nama_jasa'] ?></h3>
                                                <p style="font-size: small;"><?= $jasa['deskripsi_jasa'] ?></p>
                                                <span class="price">Rp. <?= number_format($jasa['harga_jasa']) ?></span>
                                                <div class="row d-flex align-items-center mt-4 justify-content-between">
                                                    <?php

                                                    if ($_SESSION['id_pengguna']) { ?>
                                                        <a href="checkout.php?id_jasa=<?= $jasa['id_jasa'] ?>"
                                                            class=" btn btn-sm btn-primary">Checkout <iconify-icon
                                                                icon="uil:shopping-cart">
                                                        </a>
                                                    <?php   } else { ?>
                                                        <a href="dashboard/login.php" class=" btn btn-sm btn-primary">Silahkan
                                                            login
                                                            dahulu</a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php  } ?>

                                </div>
                                <!-- / product-grid -->

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

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

</html>