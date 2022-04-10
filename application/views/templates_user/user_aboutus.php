<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!--untuk Web Responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo  $judul; ?></title>

    <!--digunakan pemanggilan data Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!--Source Code dibawah ini digunakan Untuk pemanggilan Framework Bulma-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <!--ini css untuk style khusus pada pengembangan web AAPro-->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style_home.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/galeri.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/login.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/about.css") ?>">

    <!--SourceCode Section Banner Hero-->
    <!--pada style digunakan untuk menentukan background yang di gunakan
    dan url digunakan untuk memanggil tempat dimana foto disimpan-->
    <section class="hero is-fullheight" style="background-image: url(assets/img/wedding_1.jpg);">
        <div class="hero-head">

            <!-- Source Code Navbar -->
            <nav class="navbar is-transparent has-navbar-fixed-top">
                <div class="container mt-4">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="Welcome">
                            <!--Href digunakan untuk direct link ke Landing page-->
                            <img src="assets/img/logo_1.png" width="200px;" height="200px;">
                            <!--Digunakan Untuk Logo-->
                        </a>
                        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <div id="navMenu" class="navbar-menu navbar">
                        <div class="navbar-end">
                            <!--Href digunakan untuk direct link ke Halaman yang dituju-->
                            <a href="Welcome" class="navbar-item has-text-danger">Home</a>
                            <a href="Galeri" class="navbar-item has-text-danger">Galeri</a>
                            <a href="AboutUs" class="navbar-item has-text-danger">About Us</a>
                            <a href="Booking" class="navbar-item has-text-danger">Booking</a>
                            <a href="<?php echo base_url('auth/login') ?>" class="navbar-item">
                                <button class="button is-info has-text-weight-bold is-size-4 is-outlined" style="width: 100px; height: 40px; border-radius: 10px;">
                                    Login
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!--SourceCode Button Banner Hero-->
        <!--Navbar1 pada H1 diatur menggunakan Css Style_Home-->
        <div class="container has-text-centered mt-6">
            <h1 class="navbar1 has-text-centered has-text-danger">AAPro Photo Studio</h1>
            <h1 class="navbar2 has-text-danger bold">"Bukan Promo Photo Sepuasnya, Bayar Seikhlasnya"</h1>
            <!-- <a href="Booking" class="button is-danger has-text-weight-bold is-size-3 is-outlined mt-6" style="width: 280px; height: 60px; border-radius: 15px;">Booking Now!
            </a> -->
        </div>
        <!--Script Navbar -->
        <script src="assets/js/navbar.js"></script>
    </section>
</head>