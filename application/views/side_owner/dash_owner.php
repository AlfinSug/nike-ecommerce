<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">

        <h3>Selamat Datang, Admin <strong><?= $this->session->userdata('nama_kasir'); ?></strong> </h3>

        <div class="row mt-5">
            <div class="col-12">
                <div class="card bg-dark">
                    <div class="stat-widget-one">
                        <div class="stat-content">
                            <?php foreach ($total_reserv as $total) { ?>
                                <div class="stat-text">Total Sales</div>
                                <div class="stat-digit text-white"><?= $total['total_reserv']; ?> Sales</div>

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
                        <h3>Data Sales</h3>
                        <div class="active-member mt-4">
                            <div class="table-responsive mt-2">
                                <table class="table table-xs mb-0">
                                    <thead class="text-center mt-5">
                                        <tr>
                                            <th>ID Order</th>
                                            <th>Picture</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Size</th>
                                            <th>Status Order</th>
                                            <th>Total Payment</th>
                                            <!-- <th>Menu Pesanan</th> -->
                                            <th>Detail Payment</th>
                                            <th colspan="2">Action</th>
                                        </tr>

                                    </thead>
                                    <tbody class="text-center">
                                        <?php foreach ($list_reserv as $list) { ?>
                                            <tr>
                                                <td>#ORD00<?= $list['id_trx']; ?></td>
                                                <td><img src="<?= $list['img_produk']; ?>" width="200%" height="100" class="rounded img-fluid" alt="..."></td>
                                                <td><?= $list['nama_produk']; ?></td>
                                                <td><?= $list['jml_beli']; ?></td>
                                                <td><?= $list['sizes']; ?></td>
                                                <td> <?php if ($list['status_trans'] == 0) { ?>
                                                        <i class="fa fa-circle-o text-warning mr-1"></i> <span class="mr-2">Proccess
                                                        <?php } elseif ($list['status_trans'] == 1) { ?>
                                                            <i class="fa fa-circle-o text-success mr-1"></i> <span class="mr-2">Accepted
                                                            <?php } elseif ($list['status_trans'] == 2) { ?>
                                                                <i class="fa fa-circle-o text-danger mr-1"></i> <span class="mr-2">Refused
                                                                <?php } elseif ($list['status_trans'] == 3) { ?>
                                                                    <i class="ti-close text-danger mr-1"></i> <span class="mr-2 text-danger">Canceled
                                                                    <?php } ?>
                                                </td>
                                                <td>Rp <?= $list['total_bayar'] * $list['jml_beli']; ?>,-</td>
                                                <!-- <td><button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#detail-pesanan"><i class="ti-clipboard mr-2"></i> Lihat Menu</button></td> -->
                                                <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail-bukti-pembayaran<?= $list['id_trx']; ?>"><i class="ti-image mr-2"></i> Detail</button></td>

                                                <td>
                                                    <?php if ($list['status_trans'] == 0) { ?>
                                                        <div class="sweetalert m-t-30">
                                                            <a href="dash_owner/accepted?id_trx=<?= $list['id_trx']; ?>&sval=<?= $list['status_trans']; ?>" class="btn btn-success btn sweet-confirm text-white"><i class="ti-check mr-2"></i>Accept</a>
                                                        </div>
                                                    <?php } elseif ($list['status_trans'] == 1) { ?>
                                                <td>-</td>
                                            <?php } elseif ($list['status_trans'] == 2) { ?>
                                                <td>-</td>

                                            <?php } elseif ($list['status_trans'] == 3) { ?>
                                                <td>-</td>

                                            <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($list['status_trans'] == 0) { ?>
                                                    <div class="sweetalert m-t-30">
                                                        <button type="button" class="btn btn-danger text-white btn sweet-confirm" data-toggle="modal" data-target="#catatan-penolakan<?= $list['id_trx']; ?>"><i class="ti-close mr-2"></i>Refuse</button>
                                                    </div>
                                                <?php } elseif ($list['status_trans'] == 1) { ?>
                                            <td>-</td>

                                        <?php } elseif ($list['status_trans'] == 2) { ?>
                                            <td>-</td>

                                        <?php } elseif ($list['status_trans'] == 3) { ?>
                                            <td>-</td>

                                        <?php } ?>
                                        </td>

                                            </tr>
                                            <!-- Modal Bukti Pembelian -->
                                            <div class="modal fade " id="detail-bukti-pembayaran<?= $list['id_trx']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Detail Payment</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- asset/img_bukti/ -->
                                                            <img src="<?= $list['bukti_pembayaran']; ?>" type="application/pdf" width="100%" height="500px" />
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
        <p>Copyright &copy; Nike-ECommerce by <a href="https://themeforest.net/user/quixlab" style="color: #0984e3;">Karyo</a> <span style="color: #00b894;">Dev</span></p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->
</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<div class="modal fade" id="catatan-penolakan<?= $list['id_trx']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rejection Notes</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>dash_owner/refused?id_trans=<?= $list['id_trx']; ?>&sval=<?= $list['status_trans']; ?>" method="post">
                    <div class="form-group">
                        <label>Provide a Reason for Refusing a Reservation for <strong><?= $list['nama_cust']; ?></strong></label>
                        <textarea class="form-control h-150px" rows="6" id="comment" name="note_tolak"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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