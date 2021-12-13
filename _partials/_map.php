<section class="wrapper bg-light" id="map">
    <div class="container py-14 py-md-16">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card">
                    <div class="row gx-0">
                        <div class="col-lg-6 align-self-stretch">
                            <div class="map map-full rounded-top rounded-lg-start">
                                <iframe src="<?php echo _ot('map') ?>" width="500" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <!-- /.map -->
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <div class="p-10 p-md-11 p-lg-14">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                    </div>
                                    <div class="align-self-start justify-content-start">
                                        <h5 class="mb-1"><?php echo __('address_title') ?></h5>
                                        <address><?php echo _ot('address1') ?></address>
                                    </div>
                                </div>
                                <!--/div -->
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><?php echo __('phone_title') ?></h5>
                                        <p><?php echo _ot('phone1') ?><br class="d-none d-md-block" /><?php echo _ot('phone2') ?></p>
                                    </div>
                                </div>
                                <!--/div -->
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><?php echo __('email_title') ?></h5>
                                        <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body"><?php echo _ot('email1') ?></a></p>
                                        <p class="mb-0"><a href="mailto:help@sandbox.com" class="link-body"><?php echo _ot('email2') ?></a></p>
                                    </div>
                                </div>
                                <!--/div -->
                                <!--/div -->
                                <div class="d-flex flex-row">
                                    <div class="p-10">
                                        <div>
                                            <h5 class="mb-1"><?php echo __('time_title') ?></h5>
                                            <p><?php echo _ot('opening_time') ?></p>
                                        </div>
                                    </div>

                                </div>
                                <!--/div -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
</section>
<!-- /section -->