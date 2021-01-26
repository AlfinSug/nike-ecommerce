<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <!-- <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div> -->
    <!--*******************
        Preloader end
    ********************-->

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6 mt-5 mb-5">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5 text-center">
                                <img src="downy/images/logo.png" width="80%" height="150" class="rounded text-center" alt="">
                                <a class="text-center" href="index.html">
                                    <h4 class="h4 mr-5 ml-5 mt-3"><strong> Hello Admin,</strong><br>
                                        <!-- <h5>Login to Manage Your Transaction</h5> -->
                                    </h4>
                                </a>

                                <form class="mt-5 mb-5 form-valide" action="<?= base_url() ?>auth_loginowner/login_owner" method="post">

                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label text-left" for="val-phoneus">Email Cafe<span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-12">
                                            <input type="email" class="form-control rounded" id="val-email" name="email_cafe" placeholder="abc@gmail.com">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label class="col-lg-12 col-form-label text-left" for="val-password">Password <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-12">
                                            <input type="password" class="form-control rounded" id="val-password" name="pass_cafe" placeholder="">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-lg w-100 text-white mt-5 btn-dark rounded">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Don't have an account yet? <a href="<?= base_url(); ?>auth_create_user" class="text-info">Create Account</a>
                            </div>
                        </div>
                    </div>
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