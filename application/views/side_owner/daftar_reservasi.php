<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">



        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <span class="mb-4">
                            <div class="ml--5 header-left">
                                <h3>User Reservasi</h3>
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
                        <div class="active-member mt-4">
                            <div class="table-responsive mt-2">
                                <table class="table table-xs mb-0">
                                    <thead class="text-center mt-5">
                                        <?php foreach ($list_reserv as $row) { ?>
                                            <tr>
                                                <th>No. Reservasi</th>
                                                <th>Nama Cangkrukers</th>
                                                <?php if ($row['status_reserv'] == 1) { ?>
                                                    <th>No. Meja</th>
                                                <?php } else { ?>
                                                    <!-- <th>Meja <?= $row['no_meja']; ?></th> -->
                                                <?php } ?>
                                                <th>Biaya Komitmen Reservasi</th>
                                                <th>Jumlah Kursi</th>
                                                <th>Tanggal Reservasi</th>
                                                <th>Status Reservasi</th>
                                                <th>Bukti Pembayaran Komitmen</th>
                                                <?php if ($row['status_reserv'] == 0) { ?>
                                                    <th colspan="2">Aksi</th>
                                                <?php } elseif ($row['status_reserv'] == 1) { ?>

                                                <?php } elseif ($row['status_reserv'] == 2) { ?>

                                                <?php } elseif ($row['status_reserv'] == 3) { ?>

                                            <?php }
                                            } ?>
                                            </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php foreach ($list_reserv as $row) { ?>
                                            <tr>
                                                <td>#R00<?= $row['id_reserv']; ?></td>
                                                <td><?= $row['nama_user']; ?></td>
                                                <?php if ($row['status_reserv'] == 1) { ?>
                                                    <td>Meja <?= $row['no_meja']; ?></td>
                                                <?php } else { ?>
                                                <?php } ?>
                                                <td>Rp 15.000,</td>
                                                <td><?= $row['jumlah_kursi']; ?> Kursi</td>
                                                <td><?= $row['tgl_reserv']; ?></td>
                                                <td> <?php if ($row['status_reserv'] == 0) { ?>
                                                        <i class="fa fa-circle-o text-warning mr-1"></i> <span class="mr-2">Proses
                                                        <?php } elseif ($row['status_reserv'] == 1) { ?>
                                                            <i class="fa fa-circle-o text-success mr-1"></i> <span class="mr-2">Diterima
                                                            <?php } elseif ($row['status_reserv'] == 2) { ?>
                                                                <i class="fa fa-circle-o text-danger mr-1"></i> <span class="mr-2">Ditolak
                                                                <?php } elseif ($row['status_reserv'] == 3) { ?>
                                                                    <i class="ti-close text-danger mr-1"></i> <span class="mr-2">Dibatalkan
                                                                    <?php } ?>
                                                </td>
                                                <!-- <td><button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#detail-pesanan"><i class="ti-clipboard mr-2"></i> Lihat Menu</button></td> -->
                                                <td>
                                                    <?php if ($row['status_reserv'] == 0) { ?>
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail-bukti-pembayaran<?= $row['id_reserv']; ?>"><i class="ti-image mr-2"></i> Detail</button>
                                                    <?php } elseif ($row['status_reserv'] == 1) { ?>
                                                        <button type="button" onclick="refund()" class="btn btn-warning text-white" data-toggle="modal" data-target="#"><i class="ti-info  mr-2"></i>Refund</button>
                                                    <?php } elseif ($row['status_reserv'] == 2) { ?>
                                                        <button type="button" onclick="refund()" class="btn btn-warning text-white" data-toggle="modal" data-target="#"><i class="ti-info  mr-2"></i>Refund</button>
                                                    <?php } elseif ($row['status_reserv'] == 3) { ?>
                                                        <button type="button" onclick="refund()" class="btn btn-warning text-white" data-toggle="modal" data-target="#"><i class="ti-info  mr-2"></i>Refund</button>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if ($row['status_reserv'] == 0) { ?>
                                                        <div class="sweetalert m-t-30">
                                                            <button type="button" class="btn btn-success text-white btn sweet-confirm" data-toggle="modal" data-target="#pilih-no-meja<?= $row['id_reserv']; ?>"><i class="ti-check mr-2"></i>Terima</button>
                                                        </div>
                                                    <?php } elseif ($row['status_reserv'] == 1) { ?>

                                                    <?php } elseif ($row['status_reserv'] == 2) { ?>

                                                    <?php } elseif ($row['status_reserv'] == 3) { ?>

                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if ($row['status_reserv'] == 0) { ?>
                                                        <div class="sweetalert m-t-30">
                                                            <button type="button" class="btn btn-danger text-white btn sweet-confirm" data-toggle="modal" data-target="#catatan-penolakan<?= $row['id_reserv']; ?>"><i class="ti-close mr-2"></i>Tolak</button>
                                                        </div>
                                                    <?php } elseif ($row['status_reserv'] == 1) { ?>

                                                    <?php } elseif ($row['status_reserv'] == 2) { ?>

                                                    <?php } elseif ($row['status_reserv'] == 3) { ?>

                                                    <?php } ?>
                                                </td>
                                            </tr>

                                            <!-- Modal Detail Menu -->
                                            <div class="modal fade" id="pilih-no-meja<?= $row['id_reserv']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Nomor Meja</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="daftar_reservasi/accepted?id_reserv=<?= $row['id_reserv']; ?>&sval=<?= $row['status_reserv']; ?>" method="post">
                                                                <div class="form-group">
                                                                    <label>Pilih Nomor Meja untuk <strong><?= $row['nama_user']; ?></strong></label>
                                                                    <div class="">
                                                                        <select class="form-control rounded" id="val-skill" name="no_meja">
                                                                            <option value="NULL">- Pilih Nomor Meja -</option>
                                                                            <option value="1">Meja 1</option>
                                                                            <option value="2">Meja 2</option>
                                                                            <option value="3">Meja 3</option>
                                                                            <option value="4">Meja 4</option>
                                                                            <option value="5">Meja 5</option>
                                                                            <option value="6">Meja 6</option>
                                                                            <option value="7">Meja 7</option>
                                                                            <option value="8">Meja 8</option>
                                                                            <option value="9">Meja 9</option>
                                                                            <option value="10">Meja 10</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                                                                    <button type="submit" class="btn btn-warning">Kirim</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Modal Detail Menu -->
                                            <div class="modal fade" id="catatan-penolakan<?= $row['id_reserv']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Catatan Penolakan</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= base_url(); ?>daftar_reservasi/refused?id_reserv=<?= $row['id_reserv']; ?>&sval=<?= $row['status_reserv']; ?>" method="post">
                                                                <div class="form-group">
                                                                    <label>Berikan Alasan Penolakan Reservasi untuk <strong><?= $row['nama_user']; ?></strong></label>
                                                                    <textarea class="form-control h-150px" rows="6" id="comment" name="note_tolak"></textarea>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                                                                    <button type="submit" class="btn btn-warning">Kirim</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Modal Bukti Pembelian -->
                                            <div class="modal fade " id="detail-bukti-pembayaran<?= $row['id_reserv']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Detail Bukti Pembayaran</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="asset/img_bukti/<?= $row['bukti_pembayaran']; ?>" type="application/pdf" width="100%" height="500px" />
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
<!-- modal penolakan -->

<!--**********************************
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
    function refund() {
        swal(
            "Refund Payment",
            "Pembayaran telah kami refund kepada <?= $row['nama_user']; ?>",
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

<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

</body>

</html>