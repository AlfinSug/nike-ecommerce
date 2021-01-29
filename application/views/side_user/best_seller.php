<div class="row mt-3 mb-5">
    <?php
    foreach ($best_seller as $row) { ?>
        <div class="mt-2 mb-2 col-md-6 col-lg-3">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="card-title mt-2"><?= $row['nama_produk']; ?></h5>
                    <h6 class="card-subtitle mb-2 mt-2 text-muted"><i class="fa fa-circle-o text-success mr-1"></i> <span class="mr-2"><?= $row['tipe_produk']; ?></h6>
                </div>
                <img class="img-fluid" src="<?= $row['img_produk']; ?>" alt="">
                <div class="card-body">
                    <h4 class="card-text"><i class="ti-ruler-alt mr-2"></i>UK <?= $row['size']; ?></h4>
                    <a href="#">
                        <h4 class="card-text"><i class="ti-money mr-2"></i>Rp <?= $row['harga']; ?>,-</h4>
                    </a>
                </div>
                <div class="card-footer text-center">
                    <a href="#">
                        <button type="button" class="btn btn-lg btn-dark text-white ml-2 mt-2 mb-2" data-toggle="modal" data-target="#buyNow<?= $row['kode_produk']; ?>">Buy Now</button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal Tambah -->
        <div class="modal fade" id="buyNow<?= $row['kode_produk']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url(); ?>get_product/order_now" method="post" enctype="multipart/form-data">
                            <input type="text" class="form-control rounded" placeholder="" name="id_trx" hidden>
                            <input type="text" class="form-control rounded" placeholder="" name="kode_produk" value="<?= $row['kode_produk']; ?>" hidden>
                            <input type="text" class="form-control rounded" placeholder="" name="id_cust" value="<?= $this->session->userdata['id_cust']; ?>" hidden>
                            <div class="row align-items-top">
                                <div class="col-md-4 col-lg-3">
                                    <div class="nav flex-column nav-pills">
                                        <a href="#v-pills-checkout" data-toggle="pill" class="nav-link active show"><i class="ti-receipt mr-2"></i> Data Order</a>
                                        <!-- <a href="#v-pills-payment" data-toggle="pill" class="nav-link "><i class="ti-credit-card mr-2"></i> Pembayaran</a> -->
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <div class="tab-content">

                                        <div id="v-pills-checkout" class="tab-pane fade active show">
                                            <!-- informasi -->
                                            <div class="input-group form-group">
                                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Product Detail</span></label>
                                                <img src="<?= $row['img_produk']; ?>" width="150" height="150" class="rounded float-left" alt="...">
                                                <div>
                                                    <h4 class="modal-title ml-3 mt-5" id="exampleModalLabel"><?= $row['nama_produk']; ?></h4>
                                                    <h5 class="modal-title ml-3 mt-3" id="exampleModalLabel">Rp <?= $row['harga']; ?>,-</h5>

                                                </div>
                                            </div>
                                            <div class="input-group form-group">
                                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Order Name</span></label>
                                                <input type="text" class="form-control rounded" placeholder="" name="nama_cust" value="<?= $this->session->userdata['nama_cust']; ?>" readonly>
                                            </div>
                                            <div class="row">
                                                <div class="input-group form-group col-lg-6">
                                                    <label class="col-lg-12 col-form-label text-left" for="val-skill">Quantity</span></label>
                                                    <input type="number" class="form-control rounded" placeholder="" name="jml_beli" aria-label="">

                                                </div>
                                                <div class="input-group form-group col-lg-6">
                                                    <label class="col-lg-12 col-form-label text-left" for="val-skill">Size</span></label>
                                                    <select class="form-control custom-select" id="inputGroupSelect01" name="sizes">
                                                        <option selected>Choose Size</option>
                                                        <option value="35">35</option>
                                                        <option value="36">36</option>
                                                        <option value="37">37</option>
                                                        <option value="38">38</option>
                                                        <option value="39">39</option>
                                                        <option value="40">40</option>
                                                        <option value="41">41</option>
                                                        <option value="42">42</option>
                                                        <option value="43">43</option>
                                                        <option value="44">44</option>
                                                        <option value="45">45</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="input-group form-group">
                                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Total Payment</span></label>
                                                <div class="btn-group mb-2">
                                                    <input type="number" class="form-control rounded" placeholder="" name="total_bayar" value="<?= $row['harga']; ?>" readonly>
                                                    <button class="btn btn-secondary text-white ml-5" type="button" data-toggle="modal" data-dismiss="modal" data-toggle="tooltip" data-target="#payGuide" title="Bank Virtual Account"><i class="ti-info-alt"></i></button>
                                                </div>
                                                <p class="ml-2 mt-2 text-muted">*) Make a Payment via Virtual Account</p>
                                            </div>
                                            <div class="input-group form-group mt--5 mb-5">
                                                <label class="col-lg-12 col-form-label text-left" for="val-skill">Upload Payment Proof</span>
                                                </label>
                                                <div class="col-lg-12 mt-2 text-center">
                                                    <img id="image-preview" src="quixlab/images/media/media-3.png" width="100%" height="500px" class="rounded">
                                                </div>
                                                <div class="custom-file text-center mr-5 ml-5" style="display: block; margin: -10% auto;">
                                                    <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="bukti_pembayaran" onchange="pickImage();">
                                                    <label class="btn btn-dark text-white col-form-label text-center btn-lg" for="customFileLang"><i class="ti-export"></i></label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer mt-3">
                                <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-dark text-white">Buy Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Pay Guide -->
        <div class="modal fade" id="payGuide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bank Virtual Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#bca"><img width="" height="40" src="asset/logo_bank/bca.png" alt=""></span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bri"><img width="" height="40" src="asset/logo_bank/bri.png" alt=""></span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bni"><span><img width="" height="40" src="asset/logo_bank/bni.png" alt=""></span></a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane fade show active" id="bca" role="tabpanel">
                                <div class="col-md-12 col-lg-12">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title">Bank Central Asia</h5>
                                            <div class="row mt-5" style="margin-left:30%;">
                                                <h1 class="card-text text-center" id="nomor" spellcheck="false">559889340500</h1>
                                                <button class="ml-3 btn btn-sm bg-white" id="copas" type="button">

                                                    <img class="text-center" height="30" src="asset/logo_bank/copy.png" alt="">
                                                </button>
                                            </div>

                                        </div>
                                        <div class="card-footer text-muted">*) Klik icon diatas untuk menyalin nomor bank virtual account</div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="bri" role="tabpanel">
                                <div class="col-md-12 col-lg-12">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title">Bank Rakyat Indonesia</h5>
                                            <div class="row mt-5" style="margin-left:30%;">
                                                <h1 class="card-text text-center" id="nomor" spellcheck="false">778974578987</h1>
                                                <button class="ml-3 btn btn-sm bg-white" id="copas" type="button">

                                                    <img class="text-center" height="30" src="asset/logo_bank/copy.png" alt="">
                                                </button>
                                            </div>

                                        </div>
                                        <div class="card-footer text-muted">*) Klik icon diatas untuk menyalin nomor bank virtual account</div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="bni" role="tabpanel">
                                <div class="col-md-12 col-lg-12">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title">Bank Negara Indonesia</h5>
                                            <div class="row mt-5" style="margin-left:30%;">
                                                <h1 class="card-text text-center" id="nomor" spellcheck="false">8775854400008</h1>
                                                <button class="ml-3 btn btn-sm bg-white" id="copas" type="button">

                                                    <img class="text-center" height="30" src="asset/logo_bank/copy.png" alt="">
                                                </button>
                                            </div>

                                        </div>
                                        <div class="card-footer text-muted">*) Klik icon diatas untuk menyalin nomor bank virtual account</div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-dark" data-dismiss="modal" data-toggle="modal" data-target="#buyNow<?= $row['kode_produk']; ?>">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php }
    ?>
    <!-- End Col -->

</div>