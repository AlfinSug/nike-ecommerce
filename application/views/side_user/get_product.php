<div class="row mt-3 mr-3 ml-3 mb-5">
    <div class="col-12 m-b-30">
        <div class="row col-lg-12">
            <div class="col-lg-10">
                <h4 class="d-inline">Selamat Datang, <?= $this->session->userdata('nama_cust'); ?></h4>
                <p class="text-muted">Pilih product favoritmu sekarang!</p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills mb-3">
                        <li class="nav-item row">
                            <a href="#navpills-1" class=" nav-link active" data-toggle="tab" aria-expanded="false">All Products
                                <?php foreach ($total_all as $total) { ?>
                                    <span class="ml-3 badge badge-dark"><?= $total['total_all']; ?></span>
                                <?php } ?>
                            </a>
                        </li>
                        <li class="nav-item ml-3">
                            <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Best Seller
                                <?php foreach ($total_best as $total) { ?>
                                    <span class="ml-3 badge badge-dark"><?= $total['total_best']; ?></span>
                                <?php } ?>
                            </a>
                        </li>
                        <li class="nav-item ml-3">
                            <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="false">Men's Shoes

                            </a>
                        </li>
                        <li class="nav-item ml-3">
                            <a href="#navpills-4" class="nav-link" data-toggle="tab" aria-expanded="false">Woman's Shoes</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a href="#navpills-5" class="nav-link" data-toggle="tab" aria-expanded="false">Kids Shoes</a>
                        </li>

                    </ul>
                    <div class="tab-content br-n pn">
                        <div id="navpills-1" class="tab-pane active">
                            <div class="row align-items-center">
                                <div class="col-sm-6 col-md-8 col-xl-10">
                                    <?php include('all_product.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div id="navpills-2" class="tab-pane">
                            <div class="row align-items-center">
                                <div class="col-sm-6 col-md-8 col-xl-10">
                                    <?php include('best_seller.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div id="navpills-3" class="tab-pane">
                            <div class="row align-items-center">
                                <div class="col-sm-6 col-md-8 col-xl-10">
                                    <?php include('men_shoes.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div id="navpills-4" class="tab-pane">
                            <div class="row align-items-center">

                                <div class="col-sm-6 col-md-8 col-xl-10">
                                    <?php include('womens_shoes.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div id="navpills-5" class="tab-pane">
                            <div class="row align-items-center">

                                <div class="col-sm-6 col-md-8 col-xl-10">
                                    <?php include('kid_shoes.php'); ?>
                                </div>
                            </div>
                        </div>

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
        <p>Copyright &copy; Find Cafe's by <a href="https://themeforest.net/user/quixlab" style="color: #0984e3;">Karyo</a> <span style="color: #00b894;">Dev</span></p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->
</div>


<!-- #/ container -->
<div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Filtering</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>filter_product/filter" method="post" enctype="multipart/form-data">
                    <!-- <input type="text" class="form-control rounded" placeholder="" name="id_trx" hidden> -->
                    <!-- <input type="text" class="form-control rounded" placeholder="" name="kode_produk" value="<?= $row['kode_produk']; ?>" hidden> -->
                    <!-- <input type="text" class="form-control rounded" placeholder="" name="id_cust" value="<?= $this->session->userdata['id_cust']; ?>" hidden> -->
                    <!-- <div class="row align-items-top"> -->
                    <!-- <div class="col-md-8 col-lg-9"> -->
                    <div class="tab-content">
                        <div id="v-pills-checkout" class="tab-pane fade active show">
                            <!-- <div class="input-group form-group">
                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Product Name</span></label>
                                <input type="text" class="form-control rounded" placeholder="" name="nama_produk">
                            </div> -->
                            <div class="row">
                                <div class="input-group form-group col-lg-6">
                                    <label class="col-lg-12 col-form-label text-left" for="val-skill">Price</span></label>
                                    <input type="number" class="form-control rounded" placeholder="" name="harga" aria-label="">
                                </div>
                                <div class="input-group form-group col-lg-6">
                                    <label class="col-lg-12 col-form-label text-left" for="val-skill">Product Type</span></label>
                                    <select class="form-control custom-select" id="inputGroupSelect01" name="tipe_produk">
                                        <option selected>Choose Product Type</option>
                                        <option value="Running Shoe">Running Shoes</option>
                                        <option value="Basketball Shoe">Basketball Shoes</option>
                                        <option value="Mens Shoe">Men's Shoes</option>
                                        <option value="Womens Shoe">Women's Shoes</option>
                                        <option value="Younger Kids Shoe">Younger Kids Shoes</option>
                                    </select>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark text-white">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





<script type="text/javascript">
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

<script src="assets/js/func_copy.js"></script>

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

<script src="quixlab/plugins/jquery-steps/build/jquery.steps.min.js"></script>
<script src="quixlab/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="quixlab/js/plugins-init/jquery-steps-init.js"></script>

</body>

</html>