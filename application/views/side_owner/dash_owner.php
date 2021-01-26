<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">

        <h3>Selamat Datang, <strong><?= $this->session->userdata('nama_cafe'); ?></strong> </h3>

        <div class="row mt-5">
            <div class="col-12">
                <div class="card gradient-3">
                    <div class="stat-widget-one">
                        <div class="stat-content">
                            <?php foreach ($total_reserv as $total) { ?>
                                <div class="stat-text">Total Reservasi</div>
                                <div class="stat-digit text-white"><?= $total['total_reserv']; ?> Reservasi</div>

                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar gradient-6" style="width: <?= $total['total_reserv']; ?>%;" role="progressbar"><span class="sr-only"><?= $total['total_reserv']; ?>% Complete</span>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Data Reservasi Hari Ini</h3>
                        <div class="active-member mt-4">
                            <div class="table-responsive mt-2">
                                <table class="table table-xs mb-0">
                                    <thead class="text-center mt-5">
                                        <tr>
                                            <th>Nama Cangkrukers</th>
                                            <th>Total Biaya Komitmen</th>
                                            <th>Jumlah Kursi</th>
                                            <th>Tanggal Reservasi</th>
                                            <th>Status Reservasi</th>
                                            <th>Bukti Pembayaran Komitmen</th>

                                        </tr>

                                    </thead>
                                    <tbody class="text-center">
                                        <?php foreach ($list_reserv as $td) { ?>
                                            <tr>
                                                <td><?= $td['nama_user']; ?></td>
                                                <td>Rp 15.000,-</td>
                                                <td><?= $td['jumlah_kursi']; ?> Kursi
                                                <td><?= $td['tgl_reserv']; ?></td>
                                                <td>
                                                    <?php if ($td['status_reserv'] == 0) { ?>
                                                        <i class="fa fa-circle-o text-warning mr-1"></i> <span class="mr-2">Proses
                                                        <?php } elseif ($td['status_reserv'] == 1) { ?>
                                                            <i class="fa fa-circle-o text-success mr-1"></i> <span class="mr-2">Diterima
                                                            <?php } elseif ($td['status_reserv'] == 2) { ?>
                                                                <i class="fa fa-circle-o text-danger mr-1"></i> <span class="mr-2">Ditolak
                                                                <?php } elseif ($td['status_reserv'] == 3) { ?>
                                                                    <i class="ti-close text-danger mr-1"></i> <span class="mr-2 text-danger">Dibatalkan
                                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if ($td['status_reserv'] == 0) { ?>
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail-bukti-pembayaran<?= $td['id_reserv']; ?>"><i class="ti-image mr-2"></i> Detail</button>
                                                    <?php } elseif ($td['status_reserv'] == 1) { ?>
                                                        <button type="button" onclick="refunded()" class="btn btn-warning text-white" data-toggle="modal" data-target="#"><i class="ti-info  mr-2"></i>Refund</button>
                                                    <?php } elseif ($td['status_reserv'] == 2) { ?>
                                                        <button type="button" onclick="refunded()" class="btn btn-warning text-white" data-toggle="modal" data-target="#"><i class="ti-info  mr-2"></i>Refund</button>
                                                    <?php } elseif ($td['status_reserv'] == 3) { ?>
                                                        <button type="button" onclick="refunded()" class="btn btn-warning text-white" data-toggle="modal" data-target="#"><i class="ti-info  mr-2"></i>Refund</button>
                                                    <?php } ?>
                                                </td>
                                            </tr>

                                            <!-- Modal Bukti Pembayaran -->
                                            <div class="modal fade " id="detail-bukti-pembayaran<?= $td['id_reserv']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Detail Bukti Pembayaran</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="asset/img_bukti/<?= $td['bukti_pembayaran']; ?>" type="application/pdf" width="100%" height="500px" />
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
    <!-- #/ container -->
</div>
<!--**********************************
            Content body end
		***********************************-->


<!--********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright &copy; Find Cafe's by <a href="https://themeforest.net/user/quixlab" style="color: #0984e3;">Karyo</a> <span style="color: #00b894;">Dev</span></p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->
</div>
<!--**********************************
        Main wrapper end
    ***********************************-->
<script>
    function refunded() {
        swal(
            "Refund Payment",
            "Pembayaran telah kami refund kepada <?= $td['nama_user']; ?>",
            "success"
        );
    }
</script>

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

<script src="quixlab/plugins/sweetalert/js/sweetalert.min.js"></script>
<script src="quixlab/plugins/sweetalert/js/sweetalert.init.js"></script>

<script src="quixlab/js/dashboard/dashboard-1.js"></script>

</body>

</html>