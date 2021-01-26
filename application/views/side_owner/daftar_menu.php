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
                                <h3>Daftar Menu</h3>
                            </div>
                            <div class="header-right">
                                <div class="input-group icons">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-2" id="basic-addon1">
                                            <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#addModal"><i class="ti-plus mr-2"></i>Tambah Kategori</button>
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
                                            <th>ID Menu</th>
                                            <th>Nama Menu</th>
                                            <th>Gambar</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>M001</td>
                                            <td>Ice Milk</td>
                                            <td><img src="asset/gambar_kopi/milk.png" class="rounded mr-2" width="100" height="100" alt=""></td>
                                            <td>Minuman</td>
                                            <td>Rp 15.000,-</td>
                                            <td>100</td>
                                            <td><button type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#updateModal"><i class="ti-pencil mr-2"></i> Edit</button></td>
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

<!-- Modal Tambah -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">ID Menu</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)" readonly>

                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Nama Menu</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">

                    </div>
                    <div class="input-group form-group mt--5 mb-3">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Gambar Menu</span>
                        </label>
                        <div class="col-lg-12 mt-2 text-center">
                            <img id="image-preview" src="quixlab/images/media/media-3.png" width="100%" height="250px" class="rounded">
                        </div>
                        <div class="custom-file text-center mr-5 ml-5" style="display: block; margin: -12% auto;">
                            <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="img_bukti" onchange="pickImage();">
                            <label class="btn btn-warning text-white col-form-label text-center btn-lg" for="customFileLang"><i class="ti-export"></i></label>
                        </div>
                    </div>
                    <div class="input-group form-group mt-3">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Kategori</span>
                        </label>
                        <select class="form-control custom-select rounded" id="inputGroupSelect04">
                            <option selected>- Pilih Kategori -</option>
                            <option value="1">Snack</option>
                            <option value="2">Minuman</option>
                            <option value="3">Makanan</option>

                        </select>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-warning text-white " data-dismiss="modal" data-toggle="modal" data-toggle="tooltip" data-target="#addKategori" title="Tambah Data Pasir"><i class="ti-plus"></i></button>
                        </div>
                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Harga</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text text-warning"><i class="ti-money"></i></span>
                        </div>
                    </div>

                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Stok</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text text-warning"><i class="ti-package"></i></span>
                        </div>
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


<!-- !-- Modal Tambah --> -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">ID Menu</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)" readonly>

                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Nama Menu</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">

                    </div>
                    <div class="input-group form-group mt--5 mb-3">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Gambar Menu</span>
                        </label>
                        <div class="col-lg-12 mt-2 text-center">
                            <img id="image-preview" src="quixlab/images/media/media-3.png" width="100%" height="250px" class="rounded">
                        </div>
                        <div class="custom-file text-center mr-5 ml-5" style="display: block; margin: -12% auto;">
                            <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="img_bukti" onchange="pickImage();">
                            <label class="btn btn-info col-form-label text-center btn-lg" for="customFileLang"><i class="ti-export"></i></label>
                        </div>
                    </div>
                    <div class="input-group form-group mt-3">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Kategori</span>
                        </label>
                        <select class="form-control custom-select rounded" id="inputGroupSelect04">
                            <option selected>- Pilih Kategori -</option>
                            <option value="1">Snack</option>
                            <option value="2">Minuman</option>
                            <option value="3">Makanan</option>

                        </select>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-warning text-white " data-dismiss="modal" data-toggle="modal" data-toggle="tooltip" data-target="#addKategori" title="Tambah Data Pasir"><i class="ti-plus"></i></button>
                        </div>
                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Harga</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text text-warning"><i class="ti-money"></i></span>
                        </div>
                    </div>

                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Stok</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text text-warning"><i class="ti-package"></i></span>
                        </div>
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


<!-- Modal Detail Kredit -->
<div class="modal fade" id="detail-pesanan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Menu</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">

                    <div class="input-group mt-2">
                        <img src="asset/logo_3.png" class="rounded mr-2" width="100" height="100" alt="">
                        <div class="form-group">
                            <h4 class="ml-2 mt-4 h4">Sekop</h4>
                            <h6 class="ml-2 mt-2 h6">20 Item</h6>

                        </div>
                    </div>
                    <div class="form-group">
                        <h4 class="ml-2 mt-4 h4">Kredit Ke</h4>
                        <h6 class="ml-2 mt-2 h6">2 dari 24</h6>

                    </div>
                    <div class="form-group">
                        <h4 class="ml-2 mt-4 h4">Biaya Kredit</h4>
                        <h6 class="ml-2 mt-2 h6">Rp 1.500.000,-/bulan</h6>

                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    function pickImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("customFileLang").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };
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