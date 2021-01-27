<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $title ?> - Nike E-Commerce</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="downy/images/logo.png">
    <!-- Pignose Calender -->
    <link href="quixlab/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- themify icons -->
    <link rel="stylesheet" href="quixlab/icons/themify-icons/themify-icons.css">
    <!-- Chartist -->
    <link rel="stylesheet" href="quixlab/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="quixlab/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="quixlab/css/style.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="quixlab/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="quixlab/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="quixlab/plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="quixlab/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="quixlab/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="quixlab/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="quixlab/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
    <link rel="stylesheet" href="quixlab/icons/font-awesome/css/font-awesome.min.css">
    <link href="quixlab/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">

</head>

<body onload="initClock()">

    <!--*******************
        Preloader start
    ********************-->
    <!-- <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div> -->
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header bg-dark ">
            <div class="brand-logo bg-dark">
                <a href="<?= base_url(); ?>dashboard" class="mt--3">
                    <b class="logo-abbr bg-info"><img src="downy/images/logo.png" alt=""> </b>
                    <span class="brand-title mb-5 bg-info">
                        <img src="downy/images/logo.png" class="mt--2" alt="" width="50" height="40">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <img src="downy/images/logo.png" class="mt--2" alt="" width="22%" height="50">
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <!-- <span class="badge badge-pill gradient-2">1</span> -->
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">Pemberitahuan</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <!-- <span class="badge badge-pill gradient-2">1</span> -->
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <?php foreach ($list_trans as $notif) {
                                            if ($notif['status_trans'] == 1) { ?>
                                                <li>
                                                    <a href="javascript:void()" data-toggle="modal" data-target="#detail-reservasi<?= $notif['id_trx']; ?>">
                                                        <span class="mr-3 avatar-icon bg-success"><i class="ti-face-smile"></i></span>
                                                        <div class="notification-content">
                                                            <h6 class="notification-heading">Pesanan Diterima</h6>
                                                            <span class="notification-text">Silahkan buka untuk melihat detail pesanan</span>
                                                        </div>
                                                    </a>
                                                </li>


                                            <?php } elseif ($notif['status_trans'] == 2) { ?>
                                                <li>
                                                    <a href="javascript:void()" data-toggle="modal" data-target="#detail-reservasi-tolak<?= $notif['id_trx']; ?>">
                                                        <span class="mr-3 avatar-icon bg-danger"><i class="ti-face-sad"></i></span>
                                                        <div class="notification-content">
                                                            <h6 class="notification-heading">Pesanan Ditolak</h6>
                                                            <span class="notification-text">Silahkan buka untuk melihat detail reservasi dan catatn dari owner</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php } elseif ($notif['status_trans'] == 0) { ?>
                                                <li>
                                                    <a href="javascript:void()" data-toggle="modal" data-target="#">
                                                        <span class="mr-3 avatar-icon bg-warning"><i class="ti-timer"></i></span>
                                                        <div class="notification-content">
                                                            <h6 class="notification-heading">Pesanan Diproses</h6>
                                                            <span class="notification-text">Pesanan anda masih dalam proses, mohon tunggu konfirmasi dari admin</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php } elseif ($notif['status_trans'] == 3) { ?>
                                                <li>
                                                    <a href="javascript:void()" data-toggle="modal" data-target="#">
                                                        <span class="mr-3 avatar-icon bg-danger"><i class="ti-alert"></i></span>
                                                        <div class="notification-content">
                                                            <h6 class="notification-heading">Pembatalan Pesanan</h6>
                                                            <span class="notification-text">Anda telah melakukan pembatalan Pesanan</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php } elseif ($notif['status_trans'] != 2 && $notif['status_trans'] != 1 && $notif['status_trans'] != 0 && $notif['status_trans'] != 3) { ?>
                                                <li>
                                                    <a href="javascript:void()" data-toggle="modal" data-target="#detail-reservasi-tolak">
                                                        <span class="mr-3 avatar-icon bg-info"><i class="ti-help-alt"></i></span>
                                                        <div class="notification-content">
                                                            <h6 class="notification-heading">Tidak ada pemeberitahuan</h6>
                                                            <span class="notification-text">Segera lakukan pembelian :)</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php } ?>


                                        <?php } ?>
                                    </ul>

                                </div>
                            </div>
                        </li>

                        <li class="icons dropdown">
                            <!--digital clock start-->
                            <div class="datetime btn btn-gray10 text-dark">
                                <div class="date">
                                    <span id="dayname">Day</span>,
                                    <span id="daynum">00</span>
                                    <span id="month">Month</span>
                                    <span id="year">Year</span>
                                </div>
                                <div class="time">
                                    <span id="hour">00</span>:
                                    <span id="minutes">00</span>:
                                    <span id="seconds">00</span>
                                    <span id="period">AM</span>
                                </div>
                            </div>
                            <!--digital clock end-->

                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <?php if ($this->session->userdata('img_user') != null) { ?>
                                    <img src="asset/img_user/<?= $this->session->userdata('img_user'); ?>" height="50" width="100%" alt="">
                                <?php } else { ?>
                                    <img src="assets/images/nike-user.jpg" height="50" width="100%" alt="">
                                <?php } ?>
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-user"></i> <span><?= $this->session->userdata('nama_cust'); ?></span></a>
                                        </li>

                                        <li><a href="<?= base_url(); ?>auth_loginuser/logout_user"><i class="ti-share-alt"></i> <span>Keluar</span></a></li>
                                    </ul>
                                </div>
                            </div>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Main</li>
                    <li>
                        <a href="<?= base_url(); ?>get_product" class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="ti-package"></i><span class="nav-text">Shop</span>
                        </a>

                    </li>

                    <li class="nav-label">Master</li>
                    <li>
                        <a href="<?= base_url(); ?>history" class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="ti-shopping-cart-full"></i> <span class="nav-text">Transaction History</span>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        <td>-</td>
        <?php foreach ($list_trans as $notif) {

            if ($notif['status_trans'] == 0) { ?>
                <!-- Modal Detail Menu -->
                <div class="modal fade" id="detail-reservasi-new<?= $notif['id_trx']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">New Order Detail</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="form-group">
                                            <h4 class=" h4">No. Order</h4>
                                            <span class="ml-3 row">
                                                <h6 class="mt-2 h6">#ORD00<?= $notif['id_trx']; ?></h6>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group ">
                                        <div class="form-group">
                                            <h4 class=" h4">Order Name</h4>
                                            <span class="ml-3 row">
                                                <h6 class="mt-2 h6"><?= $notif['nama_cust']; ?></h6>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <h4 class=" h4">Product Detail</h4>
                                        <div class="row">
                                            <img src="<?= $notif['img_produk']; ?>" class="ml-3" width="150" height="150" class="rounded float-left" alt="...">
                                            <div>
                                                <h4 class="modal-title ml-3 mt-5" id="exampleModalLabel"><?= $notif['nama_produk']; ?></h4>
                                                <h5 class="modal-title ml-3 mt-3" id="exampleModalLabel">x<?= $notif['jml_beli']; ?> <strong class="ml-5"> Rp <?= $notif['harga']; ?>,-</strong></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group ">
                                        <div class="form-group">
                                            <h4 class=" h4">Total Payment</h4>
                                            <span class="ml-3 row">
                                                <h6 class="mt-2 h6">Rp <?= $notif['harga'] * $notif['jml_beli']; ?>,-</h6>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <h4 class=" h4">Proof of Payment</h4>
                                        <span class="ml-3 row text-center mt-3">
                                            <img src="<?= $notif['bukti_pembayaran']; ?>" class="ml-3" width="100%" height="350" class="rounded" alt="...">
                                        </span>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-group">
                                            <h4 class=" h4">Status Order</h4>
                                            <button type="button" class="mt-3 ml-3 btn btn-warning text-white">
                                                Process
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } elseif ($notif['status_trans'] == 1) { ?>
                <!-- Modal Detail Menu -->
                <div class="modal fade" id="detail-reservasi-new<?= $notif['id_trx']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Order Detail Received</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="form-group">
                                            <h4 class=" h4">No. Order</h4>
                                            <span class="ml-3 row">
                                                <h6 class="mt-2 h6">#ORD00<?= $notif['id_trx']; ?></h6>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-group">
                                            <h4 class=" h4">No. Shipment</h4>
                                            <span class="ml-3 row">
                                                <h6 class="mt-2 h6">#SHP00<?= $notif['id_trx']; ?></h6>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group ">
                                        <div class="form-group">
                                            <h4 class=" h4">Order Name</h4>
                                            <span class="ml-3 row">
                                                <h6 class="mt-2 h6"><?= $notif['nama_cust']; ?></h6>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <h4 class=" h4">Product Detail</h4>
                                        <div class="row">
                                            <img src="<?= $notif['img_produk']; ?>" class="ml-3" width="150" height="150" class="rounded float-left" alt="...">
                                            <div>
                                                <h4 class="modal-title ml-3 mt-5" id="exampleModalLabel"><?= $notif['nama_produk']; ?></h4>
                                                <h5 class="modal-title ml-3 mt-3" id="exampleModalLabel">x<?= $notif['jml_beli']; ?> <strong class="ml-5"> Rp <?= $notif['harga']; ?>,-</strong></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group ">
                                        <div class="form-group">
                                            <h4 class=" h4">Total Payment</h4>
                                            <span class="ml-3 row">
                                                <h6 class="mt-2 h6">Rp <?= $notif['harga'] * $notif['jml_beli']; ?>,-</h6>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-group">
                                            <h4 class=" h4">Status Order</h4>
                                            <button type="button" class="mt-3 ml-3 btn btn-success text-white">
                                                Accepted
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } elseif ($notif['status_trans'] == 2) { ?>

                <!-- Modal Detail Menu -->
                <div class="modal fade" id="detail-reservasi-tolak<?= $notif['id_trx']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Order Detail Refused</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="form-group">
                                            <h4 class=" h4">No. Order</h4>
                                            <span class="ml-3 row">
                                                <h6 class="mt-2 h6">#ORD00<?= $notif['id_trx']; ?></h6>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group ">
                                        <div class="form-group">
                                            <h4 class=" h4">Order Name</h4>
                                            <span class="ml-3 row">
                                                <h6 class="mt-2 h6"><?= $notif['nama_cust']; ?></h6>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <h4 class=" h4">Product Detail</h4>
                                        <div class="row">
                                            <img src="<?= $notif['img_produk']; ?>" class="ml-3" width="150" height="150" class="rounded float-left" alt="...">
                                            <div>
                                                <h4 class="modal-title ml-3 mt-5" id="exampleModalLabel"><?= $notif['nama_produk']; ?></h4>
                                                <h5 class="modal-title ml-3 mt-3" id="exampleModalLabel">x<?= $notif['jml_beli']; ?> <strong class="ml-5"> Rp <?= $notif['harga']; ?>,-</strong></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group ">
                                        <div class="form-group">
                                            <h4 class=" h4">Total Payment</h4>
                                            <span class="ml-3 row">
                                                <h6 class="mt-2 h6">Rp <?= $notif['harga'] * $notif['jml_beli']; ?>,-</h6>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-group">
                                            <h4 class=" h4">Status Order</h4>
                                            <button type="button" class="mt-3 ml-3 btn btn-danger text-white">
                                                Refused
                                            </button>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-group">
                                            <h4 class=" h4">Rejection Note</h4>
                                            <span class="ml-3 row">
                                                <h6 class="mt-2 h6"><?= $notif['note_tolak']; ?></h6>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
        <?php } else {
            }
        } ?>
        <!-- Argon Scripts -->
        <script type="text/javascript">
            function updateClock() {
                var now = new Date();
                var dname = now.getDay(),
                    mo = now.getMonth(),
                    dnum = now.getDate(),
                    yr = now.getFullYear(),
                    hou = now.getHours(),
                    min = now.getMinutes(),
                    sec = now.getSeconds(),
                    pe = "AM";

                if (hou >= 12) {
                    pe = "PM";
                }
                if (hou == 0) {
                    hou = 12;
                }
                if (hou > 12) {
                    hou = hou - 12;
                }

                Number.prototype.pad = function(digits) {
                    for (var n = this.toString(); n.length < digits; n = 0 + n);
                    return n;
                }

                var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                var week = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
                var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
                var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
                for (var i = 0; i < ids.length; i++)
                    document.getElementById(ids[i]).firstChild.nodeValue = values[i];
            }

            function initClock() {
                updateClock();
                window.setInterval("updateClock()", 1);
            }
        </script>