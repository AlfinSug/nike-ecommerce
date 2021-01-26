<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <span class="mb-4">
                        <div class="ml--5 header-left">
                            <h3>History Transaction</h3>
                        </div>
                        <div class="header-right">
                            <div class="input-group icons">
                                <input type="search" class="form-control" placeholder="Search" aria-label="Search Dashboard">
                                <div class="drop-down animated flipInX d-md-none">
                                    <form action="#">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </span>
                    <div class="active-member mt-5">
                        <div class="table-responsive mt-2 table-striped  zero-configuration">
                            <table class="table table-xs mb-0">
                                <thead class="text-center mt-5">
                                    <tr>
                                        <th>Nama Cangkrukers</th>
                                        <th>Nama Cafe</th>
                                        <th>Total Biaya Reservasi</th>
                                        <th>Jumlah Kursi</th>
                                        <th>Tanggal Reservasi</th>
                                        <th>Status Reservasi</th>
                                        <!-- <th>Menu Pesanan</th> -->
                                        <th>Detail Bukti Pembayaran</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php foreach ($list_reserv as $list) { ?>
                                        <tr>
                                            <td><?= $list['nama_user']; ?></td>
                                            <td><?= $list['nama_cafe']; ?></td>
                                            <td>Rp 15.000,</td>
                                            <td><?= $list['jumlah_kursi']; ?> Kursi</td>
                                            <td><?= $list['tgl_reserv']; ?></td>
                                            <td> <?php if ($list['status_reserv'] == 0) { ?>
                                                    <i class="fa fa-circle-o text-warning mr-1"></i> <span class="mr-2">Proses
                                                    <?php } elseif ($list['status_reserv'] == 1) { ?>
                                                        <i class="fa fa-circle-o text-success mr-1"></i> <span class="mr-2">Diterima
                                                        <?php } elseif ($list['status_reserv'] == 2) { ?>
                                                            <i class="fa fa-circle-o text-danger mr-1"></i> <span class="mr-2">Ditolak
                                                            <?php } elseif ($list['status_reserv'] == 3) { ?>
                                                                <i class="ti-close text-danger mr-1"></i> <span class="mr-2 text-danger">Dibatalkan
                                                                <?php } ?>
                                            </td>
                                            <!-- <td><button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#detail-pesanan"><i class="ti-clipboard mr-2"></i> Lihat Menu</button></td> -->
                                            <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail-bukti-pembayaran<?= $list['id_reserv']; ?>"><i class="ti-image mr-2"></i> Detail</button></td>
                                            <td><a href="tel:<?= $list['notelp_cafe']; ?>"><button type="button" class="btn btn-success text-white"><i class="ti-mobile mr-2"></i> Hubungi Owner</button></a></td>
                                            <td>
                                                <?php if ($list['status_reserv'] == 0) { ?>
                                                    <div class="sweetalert m-t-30">
                                                        <a href="user_reserv/canceled?id_reserv=<?= $list['id_reserv']; ?>&sval=<?= $list['status_reserv']; ?>" class="btn btn-danger btn sweet-confirm"><i class="ti-close mr-2"></i>Batal</a>
                                                    </div>
                                                <?php } elseif ($list['status_reserv'] == 1) { ?>
                                                    <!-- <div class="sweetalert m-t-30"> -->
                                                    <!-- <a href="" class="btn btn-outline-success btn sweet-confirm"><i class="ti-close mr-2"></i>Diterima</a> -->
                                                    <!-- </div> -->
                                                <?php } elseif ($list['status_reserv'] == 2) { ?>
                                                    <!-- <div class="sweetalert m-t-30"> -->
                                                    <!-- <a href="" class="btn btn-outline-danger btn sweet-confirm"><i class="ti-close mr-2"></i>Ditolak</a> -->
                                                    <!-- </div> -->
                                                <?php } elseif ($list['status_reserv'] == 3) { ?>
                                                    <div class="sweetalert m-t-30">
                                                        <a href="" class="btn btn-danger btn sweet-confirm"><i class="ti-close mr-2" read></i>Dibatalkan</a>
                                                    </div>
                                                <?php } ?>

                                            </td>
                                        </tr>
                                        <!-- Modal Bukti Pembelian -->
                                        <div class="modal fade " id="detail-bukti-pembayaran<?= $list['id_reserv']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Detail Bukti Pembayaran</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="asset/img_bukti/<?= $list['bukti_pembayaran']; ?>" type="application/pdf" width="100%" height="500px" />
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright &copy; PT Banjaran Global Biz by <a href="https://themeforest.net/user/quixlab" style="color: #0984e3;">Karyo</a> <span style="color: #00b894;">Dev</span></p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->
</div>


<!--**********************************
        Scripts
    ***********************************-->
<script src="quixlab/plugins/common/common.min.js"></script>
<script src="quixlab/js/custom.min.js"></script>
<script src="quixlab/js/settings.js"></script>
<script src="quixlab/js/gleek.js"></script>
<script src="quixlab/js/styleSwitcher.js"></script>

<!-- Chartjs -->
<script src="quixlab/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Circle progress -->
<script src="quixlab/plugins/circle-progress/circle-progress.min.js"></script>
<!-- Datamap -->
<script src="quixlab/plugins/d3v3/index.js"></script>
<script src="quixlab/plugins/topojson/topojson.min.js"></script>
<script src="quixlab/plugins/datamaps/datamaps.world.min.js"></script>
<!-- Morrisjs -->
<script src="quixlab/plugins/raphael/raphael.min.js"></script>
<script src="quixlab/plugins/morris/morris.min.js"></script>
<!-- Pignose Calender -->
<script src="quixlab/plugins/moment/moment.min.js"></script>
<script src="quixlab/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
<!-- ChartistJS -->
<script src="quixlab/plugins/chartist/js/chartist.min.js"></script>
<script src="quixlab/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



<script src="quixlab/js/dashboard/dashboard-1.js"></script>

<script src="quixlab/plugins/moment/moment.js"></script>
<script src="quixlab/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="quixlab/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="quixlab/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="quixlab/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="quixlab/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="quixlab/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="quixlab/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="quixlab/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="quixlab/js/plugins-init/form-pickers-init.js"></script>
<script src="quixlab/plugins/sweetalert/js/sweetalert.min.js"></script>
<script src="quixlab/plugins/sweetalert/js/sweetalert.init.js"></script>

</body>

</html>