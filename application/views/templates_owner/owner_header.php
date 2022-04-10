<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Admin</title>
    <!--ini adalah Judul-->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Bulma is included -->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bulma-radio-checkbox"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bulma-radio-checkbox.min"); ?>">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Material Design Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

</head>

<body>
    <div id="app">
        <nav id="navbar-main" class="navbar is-fixed-top">
            <div class="navbar-brand">
                <a class="navbar-item is-hidden-desktop jb-aside-mobile-toggle">
                    <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
                </a>
            </div>
            <div class="navbar-brand is-right">
                <a class="navbar-item is-hidden-desktop jb-navbar-menu-toggle" data-target="navbar-menu">
                    <span class="icon"><i class="mdi mdi-dots-vertical"></i></span>
                </a>
            </div>
            <div class="navbar-menu fadeIn animated faster" id="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar is-hoverable">
                        <?php if ($this->session->userdata('username')) { ?>
                            <a class="navbar-link is-arrowless">
                                <div class="is-user-avatar">
                                    <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe">
                                </div>
                                <div class="is-user-name">
                                    <span><?php echo $this->session->userdata('username') ?></span>
                                </div>
                                <span class="icon">
                                    <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="navbar-dropdown">
                                <a href="<?= base_url('akun'); ?>" class="navbar-item">
                                    <span class="icon">
                                        <i class="mdi mdi-account"></i>
                                    </span>
                                    <span>My Profile</span>
                                </a>
                                <hr class="navbar-divider">
                                <a href="<?php echo base_url('auth/logout') ?>" class="navbar-item">
                                    <span class="icon">
                                        <i class="mdi mdi-logout"></i>
                                    </span>
                                    <span>Log Out</span>
                                </a>
                            </div>

                        <?php } else { ?>
                            <li><?php echo anchor('auth/login', 'login') ?></li>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </nav>

        <aside class="aside is-placed-left is-expanded ">
            <div class="aside-tools">
                <div class="aside-tools-label has-text-centered">
                    <span>
                        <b>Dashboard Owner</b>
                    </span>
                </div>
            </div>
            <div class="menu is-menu-main">
                <p class="menu-label has-text-warning">AAPro Photo Studio</p>
                <ul class="menu-list">
                    <li>
                        <a href="<?= base_url('DashboardOwner'); ?>" class="is-active router-link-active has-icon">
                            <span class="icon">
                                <i class="mdi mdi-desktop-mac"></i>
                            </span>
                            <span class="menu-item-label">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <!-- <p class="menu-label">Examples</p> -->
                <ul class="menu-list">
                    <li>
                        <a class="has-icon has-dropdown-icon">
                            <span class="icon">
                                <i class="mdi mdi-view-list"></i>
                            </span>
                            <span class="menu-item-label">Data</span>
                            <div class="dropdown-icon">
                                <span class="icon">
                                    <i class="mdi mdi-plus"></i>
                                </span>
                            </div>
                        </a>
                        <ul>
                            <li>
                                <a href="<?= base_url('JadwalBooking'); ?>">
                                    <span>Data Booking</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('DataPelanggan'); ?>">
                                    <span>Data Pembayaran</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('Akun'); ?>">
                                    <span>Akun </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu-list">
                    <li>
                        <a class="has-icon has-dropdown-icon">
                            <span class="icon">
                                <i class="mdi mdi-view-list"></i>
                            </span>
                            <span class="menu-item-label">Laporan</span>
                            <div class="dropdown-icon">
                                <span class="icon">
                                    <i class="mdi mdi-plus"></i>
                                </span>
                            </div>
                        </a>
                        <ul>
                            <li>
                                <a href="<?= base_url('Keuangan'); ?>">
                                    <span>Keuangan</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('GajiPegawai'); ?>">
                                    <span>Gaji Pegawai</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </aside>

        <section class="section is-title-bar">
        </section>