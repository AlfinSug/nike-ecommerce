<div class="container-fluid">
    <div class="row mt-5 ml-2 mr-2">
        <div class="col-lg-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center mb-4">
                        <?php if ($this->session->userdata('img_user') != null) { ?>
                            <img class="mr-3 rounded-circle" src="asset/img_user/<?= $this->session->userdata('img_user'); ?>" width="80" height="80" alt="">
                        <?php } else { ?>
                            <img class="mr-3 rounded-circle" src="asset/img_user/img-user.png" width="80" height="80" alt="">
                        <?php } ?>
                        <div class="media-body">
                            <h3 class="mb-0"><?= $this->session->userdata('nama_user'); ?></h3>
                            <p class="text-muted mb-0"><?= $this->session->userdata('email_user'); ?></p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <?php foreach ($acc_reserv_user as $acc) { ?>
                                <div class="card card-profile text-center">
                                    <span class="mb-1 text-info"><i class="ti-face-smile"></i></span>
                                    <h3 class="mb-0"><?= $acc['acc_reserv']; ?></h3>
                                    <p class="text-muted px-4">Reservasi Diterima</p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col">
                            <?php foreach ($refuse_reserv_user as $ref) { ?>
                                <div class="card card-profile text-center">
                                    <span class="mb-1 text-warning"><i class="ti-face-sad"></i></span>
                                    <h3 class="mb-0"><?= $ref['ref_reserv']; ?></h3>
                                    <p class="text-muted">Reservasi Di Tolak</p>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <?php foreach ($cancel_reserv_user as $cancel) { ?>
                                <div class="card card-profile text-center">
                                    <span class="mb-1 text-danger"><i class="ti-close"></i></span>
                                    <h3 class="mb-0"><?= $cancel['cancel_reserv']; ?></h3>
                                    <p class="text-muted px-4">Reservasi Di Batalkan</p>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                    <h4 class="text-center">Bio</h4>
                    <p class="text-muted text-center"><?= $this->session->userdata('bio'); ?></p>
                    <ul class="card-profile__info text-center">
                        <li class="mb-1"><strong class="text-dark ">Whatsapp Number</strong>
                            <div><?= $this->session->userdata('notelp_user'); ?></div>
                        </li>
                        <li><strong class="text-dark">Alamat</strong>
                            <div><?= $this->session->userdata('alamat_user'); ?></div>
                        </li>

                    </ul>
                    <!-- <button class="btn btn-warning text-white btn-lg mt-5" data-target="#updatePassword" data-toggle="modal" style="display: block; margin: auto;">Ubah Password</button> -->
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-4">Edit Profil</h3>
                    <form action="<?= base_url(); ?>profil_user/edit_profil" class="form-profile text-center" method="post" enctype="multipart/form-data">
                        <input type="text" class="form-control rounded" placeholder="" name="id_user" value="<?= $this->session->userdata('id_user'); ?>" hidden>
                        <!-- <div class="input-group form-group mt--4 text-center">
                            <div class="col-lg-12 mt-5 text-center" style="display: block; margin: -2% auto 2% auto;">
                                <img id="ava-preview" src="assets/images/icon-user.png" width="18%" height="200" class="rounded-circle">
                            </div>
                            <div class="custom-file col-lg-12 text-center" style="display: block; margin: -2% auto 2% auto;">
                                <input type="file" class="custom-file-input" id="customFileAva" lang="en" name="img_user" onchange="pickAva();">
                                <label class="btn btn-info col-lg-2 text-center btn-lg" for="customFileAva"><i class="ti-camera"></i></label>
                            </div>
                        </div> -->
                        <div class="input-group form-group">
                            <label class="col-lg-12 col-form-label text-left" for="val-skill">Nama Lengkap</span>
                            </label>
                            <input type="text" class="form-control rounded" placeholder="" name="nama_user" aria-label="Amount (to the nearest dollar)" value="<?= $this->session->userdata('nama_user'); ?>">
                            <div class="input-group-append">
                                <span class="input-group-text text-warning"><i class="ti-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="input-group form-group">
                            <label class="col-lg-12 col-form-label text-left" for="val-skill">Email</span>
                            </label>
                            <input type="text" class="form-control rounded" placeholder="" name="email_user" aria-label="Amount (to the nearest dollar)" value="<?= $this->session->userdata('email_user'); ?>">
                            <div class="input-group-append">
                                <span class="input-group-text text-warning"><i class="ti-email"></i></span>
                            </div>
                        </div>
                        <div class="input-group form-group">
                            <label class="col-lg-12 col-form-label text-left" for="val-skill">Whatsapp Number</span>
                            </label>
                            <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)" name="notelp_user" value="<?= $this->session->userdata('notelp_user'); ?>">
                            <div class="input-group-append">
                                <span class="input-group-text text-warning"><i class="ti-mobile"></i></span>
                            </div>
                        </div>
                        <div class="input-group form-group">
                            <label class="col-lg-12 col-form-label text-left" for="val-skill">Alamat</span>
                            </label>
                            <textarea class="form-control" id="textarea" cols="30" rows="4" placeholder="Address Cafe" name="alamat_user"><?= $this->session->userdata('alamat_user'); ?></textarea>
                        </div>
                        <div class="input-group form-group">
                            <label class="col-lg-12 col-form-label text-left" for="val-skill">Bio</span>
                            </label>
                            <textarea class="form-control" id="textarea" cols="30" rows="4" name="bio" placeholder="Post a new message"><?= $this->session->userdata('bio'); ?></textarea>
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn btn-warning text-white btn-lg mt-2" style="display: block; margin: auto;">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- #/ container -->




<!-- Modal Update Password-->
<div class="modal fade" id="updatePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Password Lama</span>
                        </label>
                        <input type="password" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">

                    </div>

                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Password Baru</span>
                        </label>
                        <input type="password" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">

                    </div>

                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Konfirmasi Password Baru</span>
                        </label>
                        <input type="password" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-warning text-white">Ubah</button>
            </div>
        </div>
    </div>
</div>

<script>
    function pickAva() {
        document.getElementById("ava-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("customFileAva").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("ava-preview").src = oFREvent.target.result;
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