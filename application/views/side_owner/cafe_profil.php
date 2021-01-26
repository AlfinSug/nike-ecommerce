    <div class="container-fluid">
        <div class="row mt-5 ml-2 mr-2">
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <?php if ($this->session->userdata('banner_cafe') != null) { ?>
                            <img class="mr-3 rounded" src="<?= $this->session->userdata('banner_cafe'); ?>" width="100%" height="350" alt="">
                        <?php } else { ?>
                            <img class="mr-3 rounded" src="assets/images/img-owner.png" width="100%" height="350" alt="">

                        <?php } ?>
                        <div class="media align-items-center mb-4">
                            <div class="media-body text-center mt-3">
                                <h3 class="mb-0"><?= $this->session->userdata('nama_cafe'); ?></h3>
                                <p class="text-muted mb-0"><?= $this->session->userdata('email_cafe'); ?></p>
                                <?php if ($this->session->userdata('akses_cafe') === 'offline') { ?>
                                    <button class="btn btn-danger text-white btn-sm mt-3" style="display: block; margin: auto;">Offline</button>
                                <?php } elseif ($this->session->userdata('akses_cafe') === 'online') { ?>
                                    <button class="btn btn-success text-white btn-sm mt-3" style="display: block; margin: auto;">Online</button>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <?php foreach ($acc_reserv as $acc) { ?>
                                    <div class="card card-profile text-center">
                                        <span class="mb-1 text-info"><i class="ti-face-smile"></i></span>
                                        <h3 class="mb-0"><?= $acc['acc_reserv']; ?></h3>
                                        <p class="text-muted px-4">Penerima Reservasi</p>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col">
                                <?php foreach ($refuse_reserv as $ref) { ?>
                                    <div class="card card-profile text-center">
                                        <span class="mb-1 text-warning"><i class="ti-face-sad"></i></span>
                                        <h3 class="mb-0"><?= $ref['ref_reserv']; ?></h3>
                                        <p class="text-muted">Penolakan Reservasi</p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <?php foreach ($cancel_reserv as $cancel) { ?>
                                    <div class="card card-profile text-center">
                                        <span class="mb-1 text-danger"><i class="ti-close"></i></span>
                                        <h3 class="mb-0"><?= $cancel['cancel_reserv']; ?></h3>
                                        <p class="text-muted px-4">Reservasi Di Batalkan</p>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                        <ul class="card-profile__info text-center">
                            <li class="mb-1"><strong class="text-dark ">Jam Buka</strong>
                                <div><?= $this->session->userdata('jam_buka'); ?></div>
                            </li>
                            <li class="mb-1"><strong class="text-dark ">Phone Number</strong>
                                <a href="">
                                    <div><?= $this->session->userdata('notelp_cafe'); ?></div>
                                </a>
                            </li>
                            <li class="mb-1"><strong class="text-dark ">Instagram</strong>
                                <a href="https://www.instagram.com/<?= $this->session->userdata['sosmed']; ?>/">
                                    <div><?= $this->session->userdata('sosmed'); ?></div>
                                </a>
                            </li>
                            <li><strong class="text-dark">Alamat</strong>
                                <a href="<?= $this->session->userdata('url_maps'); ?>">
                                    <div><?= $this->session->userdata('alamat_cafe'); ?></div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4">Edit Profil Cafe</h3>
                        <form action="<?= base_url(); ?>cafe_profil/edit_profils" class="form-profile" method="post" enctype="multipart/form-data">
                            <input type="text" class="form-control rounded" placeholder="" name="id_cafe" value="<?= $this->session->userdata('id_cafe'); ?>" hidden>
                            <div class="form-group mt-5">
                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Akses Cafe <span class="text-danger">*</span>
                                </label>
                                <div class="">
                                    <select class="form-control rounded" id="val-skill" name="akses_cafe">
                                        <?php if ($this->session->userdata('akses_cafe') == 'offline') { ?>
                                            <option value="offline">Tutup Cafe</option>
                                            <option value="online">Buka Cafe</option>
                                        <?php } elseif ($this->session->userdata('akses_cafe') == 'online') { ?>
                                            <option value="online">Buka Cafe</option>
                                            <option value="offline">Tutup Cafe</option>

                                        <?php } else { ?>
                                            <option value="NULL">- Pilih Akses Cafe</option>
                                            <option value="online">Buka Cafe</option>
                                            <option value="offline">Tutup Cafe</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group form-group">
                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Nama Cafe</span>
                                </label>
                                <input type="text" class="form-control rounded" placeholder="" name="nama_cafe" value="<?= $this->session->userdata('nama_cafe'); ?>" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text text-primary"><i class="ti-tag"></i></span>
                                </div>
                            </div>
                            <div class="input-group form-group">
                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Email</span>
                                </label>
                                <input type="text" class="form-control rounded" placeholder="" name="email_cafe" value="<?= $this->session->userdata('email_cafe'); ?>" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text text-primary"><i class="ti-email"></i></span>
                                </div>
                            </div>
                            <div class="input-group form-group">
                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Phone Number</span>
                                </label>
                                <input type="text" class="form-control rounded" placeholder="" name="notelp_cafe" value="<?= $this->session->userdata('notelp_cafe'); ?>" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text text-primary"><i class="ti-mobile"></i></span>
                                </div>
                            </div>
                            <div class="input-group form-group">
                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Jam Buka</span>
                                </label>
                                <input type="text" class="form-control rounded" placeholder="" name="jam_buka" value="<?= $this->session->userdata('jam_buka'); ?>" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text text-primary"><i class="ti-time"></i></span>
                                </div>
                            </div>
                            <div class="input-group form-group">
                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Akun Instagram</span>
                                </label>
                                <input type="text" class="form-control rounded" name="sosmed" placeholder="" value="<?= $this->session->userdata('sosmed'); ?>" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text text-primary"><i class="ti-instagram"></i></span>
                                </div>
                            </div>
                            <div class="input-group form-group">
                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Alamat</span>
                                </label>
                                <textarea class="form-control" name="textarea" name="alamat_cafe" id="textarea" cols="30" rows="4" placeholder="Address Cafe"><?= $this->session->userdata('alamat_cafe'); ?></textarea>
                            </div>
                            <div class="input-group form-group">
                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Url Maps</span>
                                </label>
                                <textarea class="form-control" name="textarea" name="url_maps" id="textarea" cols="30" rows="4" placeholder="Post a new message"><?= $this->session->userdata('url_maps'); ?></textarea>
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