<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row">
            <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
                <h2 class="fs-15 text-uppercase text-muted mb-3">Our Pricing</h2>
                <h3 class="display-4 mb-15 mb-md-6 px-lg-10">We offer great prices, premium products and quality service for your business.</h3>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="pricing-wrapper position-relative">
            <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
            <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
            <div class="row gy-6 mt-3 mt-md-5">
                <?php foreach (ABBONAMENTI as $abb_item) : ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing card text-center">
                            <div class="card-body">
                                <img src="./assets/img/icons/shopping-basket.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title"><?php echo $abb_item['tipo'] ?></h4>
                                <div class="prices text-dark">
                                    <div class="price"><span class="price-currency">$</span><span class="price-value"><?php echo $abb_item['prezzo'] ?></span> <span class="price-duration">month</span></div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9 text-start">
                                <?php echo $abb_item['descrizione'] ?>                                </ul>
                                <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                <?php endforeach ?>
            </div>
            <!--/.row -->
        </div>
        <!--/.pricing-wrapper -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->