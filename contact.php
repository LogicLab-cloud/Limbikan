<?php
include "include/menu.php";
?>
<!-- END nav -->

<div class="hero-wrap" style="background-image: url('images/2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
      </div>
    </div>
  </div>
</div>


<hr>

<section class="ftco-sBection contact-section">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h4">Contact Information</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3">
        <p><span>Headquarters:</span> <?php
                                      echo "$HQ";
                                      ?></p>
      </div>
      <div class="col-md-3">
        <p><span>Phone:</span> <a href="tel://  <?php
                                                echo "$phoneNumber08" ?> "><?php
                                                                            echo "$phoneNumber08";
                                                                            ?></a></p>
      </div>
      <div class="col-md-3">
        <p><span>phone:</span> <a href="tel://  <?php
                                                echo "$phoneNumber09" ?> "><?php
                                                                            echo "$phoneNumber09";
                                                                            ?></a></< /p>
      </div>
      <div class="col-md-3">
        <p><span>Email:</span> <a href="mailto:<?php
                                                echo "$email" ?> "><?php
                                                                    echo "$email";
                                                                    ?></a></< /p>
      </div>
    </div>
    <hr>

    <div class="row block-9">
      <div class="col-md-6 pr-md-5">
        <h4 class="mb-4"><?php
                          echo "$address1";
                          ?></h4>

      </div><!--
      <div class="col-md-6 pr-md-5">
        <h4 class="mb-4">Post Office/ Private Pag</h4>
        <p>C/O Mzuzu City Council, P.O Box 1, Mzuzu</p>
      </div>-->
    </div><br><br>
    <hr>

    <div class="row block-9">
      <div class="col-md-6 pr-md-5">
        <h4 class="mb-4">Do you have any questions?</h4>
        <form action="#" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject">
          </div>
      </div>

      <div class="col-md-6"><br><br>
        <div class="form-group">
          <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
        </div>
      </div>
    </div>
  </div>
  </form>
</section>
<hr>

<?php
include "include/footer.php";
?>