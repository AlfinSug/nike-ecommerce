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
                                <h3>Kategori Menu</h3>
                            </div>
                            <div class="header-right">
                                <div class="input-group icons">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-2" id="basic-addon1">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addKategori"><i class="ti-plus mr-2"></i>Tambah Kategori</button>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </span>
                        <div class="active-member mt-4">
                            <div class="table-responsive mt-2">
                                <table class="table table-xs mb-0">
                                    <thead class="text-center mt-5">
                                        <tr>
                                            <th>ID Kategori</th>
                                            <th>Nama Kategori</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>K001</td>
                                            <td>Snack</td>
                                            <td><button type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#updateKategori"><i class="ti-pencil mr-2"></i> Edit</button></td>
                                            <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#detail-bukti-pembayaran"><i class="ti-eraser mr-2"></i> Delete</button></td>
                                        </tr>
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
<!-- modal kategori -->
<div class="modal fade" id="addKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">ID Kategori</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)" readonly>

                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Nama Kategori</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-warning">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal kategori -->
<div class="modal fade" id="updateKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">ID Kategori</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)" readonly>

                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Nama Kategori</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-warning">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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

</body>

</html>