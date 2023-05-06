<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Project 2</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact
                        @khldajia_F</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar-->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div id="logo">
                <h1><a href="index.html">E - Commerce<span></span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="../Frontend/index.php">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="form_pesanan.php">Pesanan</a></li>
                    <li><a class="nav-link scrollto" href="../Backend/index.php">Admin</a></li>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> From Pemesanan Produk</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
                <form>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-4 col-form-label">Alamat</label>
                        <div class="col-8">
                            <input id="alamat" name="alamat" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_pembelian" class="col-4 col-form-label">Tanggal Pembelian</label>
                        <div class="col-8">
                            <input id="tgl_pembelian" name="tgl_pembelian" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="produk" id="produk_0" type="checkbox" class="custom-control-input"
                                    value="electronic">
                                <label for="produk_0" class="custom-control-label">AC</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="produk" id="produk_2" type="checkbox" class="custom-control-input"
                                    value="electronic">
                                <label for="produk_2" class="custom-control-label">Microwave</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="produk" id="produk_3" type="checkbox" class="custom-control-input"
                                    value="furniture">
                                <label for="produk_3" class="custom-control-label">Lemari</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="produk" id="produk_4" type="checkbox" class="custom-control-input"
                                    value="furniture">
                                <label for="produk_4" class="custom-control-label">Meja Belajar</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="produk" id="produk_6" type="checkbox" class="custom-control-input"
                                    value="food">
                                <label for="produk_6" class="custom-control-label">Toast</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="produk" id="produk_10" type="checkbox" class="custom-control-input"
                                    value="drink">
                                <label for="produk_10" class="custom-control-label">Matcha</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-4 col-form-">Stok</label>
                        <div class="col-8">
                            <input id="stok" name="stok" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <input id="deskripsi" name="deskripsi" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <a name="submit" type="submit" class="btn btn-primary" href="admin.html" role="button">Simpan</a>
                        </div>
                    </div>
                </form>
                <!-- ======= Footer ======= -->
                <footer id="footer">
                    <div class="container">
                        <div class="copyright">
                            &copy; Copyright <strong>E - Commerce</strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
                            Designed by <a href="https://bootstrapmade.com/">Kholidajia Fajriah</a>
                        </div>
                    </div>
                </footer><!-- End Footer -->

                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                        class="bi bi-arrow-up-short"></i></a>

                <!-- Vendor JS Files -->
                <script src="assets/vendor/aos/aos.js"></script>
                <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
                <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
                <script src="assets/vendor/php-email-form/validate.js"></script>

                <!-- Template Main JS File -->
                <script src="assets/js/main.js"></script>

</body>

</html>