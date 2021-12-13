<footer class="bg-dark text-inverse align-item-block">
  <div class="container py-13 py-md-15">
    <div class="row gy-6 gy-lg-0">
      <div class="col-md-4 col-lg-3">
        <div class="widget">
          <img class="mb-4" src="_immagini/Pizzeria/LOGO.png" style="width: 140px;" alt="" />
          <p class="mb-4">Seguici sui nostri social<br class="d-none d-lg-block" /></p>
          <nav class="nav social">
            <?php foreach(SOCIAL as $social_item):?>
            <a href="<?php echo $social_item['href']?>"><i class="uil uil-<?php echo $social_item['name']?>"></i></a>
            <?php endforeach?>
          </nav>
          <!-- /.social -->
        </div>
        <!-- /.widget -->
      </div>
      <!-- /column -->

      <div class="col-md-12 col-lg-5">
        <div class="widget">
          <h4 class="widget-title text-white mb-3">Scrivici alla nostra email</h4>
          <p class="mb-5">Per consigli e prenotazioni</p>
          <div class="newsletter-wrapper">
            <!-- Begin Mailchimp Signup Form -->
            <div id="mc_embed_signup2">
              <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll2">
                  <div class="mc-field-group input-group form-floating">
                    <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                    <label for="mce-EMAIL2">Email Address</label>
                    <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary">
                  </div>
                  <div id="mce-responses2" class="clear">
                    <div class="response" id="mce-error-response2" style="display:none"></div>
                    <div class="response" id="mce-success-response2" style="display:none"></div>
                  </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                  <div class="clear"></div>
                </div>
              </form>
            </div>
            <!--End mc_embed_signup-->
          </div>
          <!-- /.newsletter-wrapper -->
        </div>
        <!-- /.widget -->
      </div>
      <!-- /column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
</body>

</html>