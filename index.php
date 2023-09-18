<?php
require "./include/menu.php";
?>
<!-- END nav -->

<style type="text/css">
  body {
    font-family: Arial, sans-serif;
  }

  #content4 {
    margin-bottom: 10px;
  }

  .button4 {

    border: none;

    color: blue;
    cursor: pointer;
    background-color: transparent !important;
  }

  #moreButton4 {
    margin-right: 10px;
  }

  #lessButton4 {
    display: none;
  }
</style>

<div class="hero-wrap blackscale" style="background-image: url('images/a.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A Better Future for all Vulnerable Children</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-counter ftco-intro" id="section-counter">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 color-1 align-items-stretch">
          <div class="text">
            <h3 class="mb-4">Donate Money</h3>
            <p style="color: white!important">Your donation can help us reach out to many vulnerable groups including children .</p>
            <p><a href="donate.php#donations" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
          </div>
        </div>
      </div>
      <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 color-2 align-items-stretch">
          <div class="text">
            <h3 class="mb-4">Our Programs</h3>
            <p style="color: white!important">We have exciting programs for the community from Early Childhood Development (ECD), Environment, Education, Child Protection Program to Youth Club.</p>
            <p><a href="programs.php#programs" class="btn btn-white px-3 py-2 mt-2">Our Programs</a></p>
          </div>
        </div>
      </div>
      <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 color-3 align-items-stretch">
          <div class="text">
            <h3 class="mb-4">Events & News</h3>
            <p style="color: white!important">here is our news and events </p>
            <p><a href="events.php#Events&News" class="btn btn-white px-3 py-2 mt-2">news</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







</div>
</div>
</section><br>








<section class="ftco-section bg-light">
  <div class="container-fluid">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-5 heading-section ftco-animate text-center">
        <h2 class="mb-4">Our Projects</h2>
        <p>These are some of the Projects we have done and are still doing.</p>
      </div>
    </div>
    <div class="row">"><!--- start of Item-->
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch"><!-- start of Program post-->
          <a href="programs.php" class="block-20" style="background-image: url('images/8.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Supported by Tilitonse Foundation</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Capacity Development Project</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> Project duration is 6 months, from 1st July to December 2023.</span> <span>
                <i class="icon-map-o"></i> </span></p>
            <?php
            $paragraph4 = "We have received Catalyst fund under Shift the power programme  being implemeted by Tilitonse foundation in partnership with  Comic Relief and UK Aid. Capacity development project seeks to build capacity in areas informed by the self-assessment results so that the organization should be more effective and productive. The areas informed by self-assessment results include, governance and organization structure, constituency and link with communities, stakeholders analysis and involvement, planning and review, financial management, human resource and finally, Monitoring, Evaluation and learning.";
            $words_limit4 = 15;
            $words4 = explode(' ', $paragraph4);
            $display_text4 = implode(' ', array_slice($words4, 0, $words_limit4));
            $remaining_text4 = implode(' ', array_slice($words4, $words_limit4));
            ?>

            <p id="content4"><?php echo $display_text4; ?></p>

            <button id="moreButton4" class="button4">More</button>
            <button id="lessButton4" class="button4" style="display: none;">Less</button>

            <script>
              const content4 = document.getElementById('content4');
              const moreButton4 = document.getElementById('moreButton4');
              const lessButton4 = document.getElementById('lessButton4');

              moreButton4.addEventListener('click', () => {
                content4.innerHTML = "<?php echo $paragraph4; ?>";
                moreButton4.style.display = 'none';
                lessButton4.style.display = 'inline';
              });

              lessButton4.addEventListener('click', () => {
                content4.innerHTML = "<?php echo $display_text4; ?>";
                moreButton4.style.display = 'inline';
                lessButton4.style.display = 'none';
              });
            </script>

            <p><a href="donate.php">Donate to other projects<i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div><!-- end of Program post-->



      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch"><!-- start of Program post-->
          <a href="programs.php" class="block-20" style="background-image: url('images/7.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Supported by SOS Childrens villages Malawi</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Activity Based Sub-granting </a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> Project duration is 5 months, from 28 July to December 2023.</span> <span>
                <i class="icon-map-o"></i> </span></p>
            <?php
            $paragraph4 = "Limbikani is in partnership agreement with SOS Children’s Villages Malawi. The partnership is Activity based sub-granting. Under the agreement, SOS is providing funds to the organization for the implementation of the projects, while Limbikani CBO is responsible for implementation of projects, accounting for all funding received in Accordance with SOS financial and administrative Guidelines and following sound financial practices. Limbikani CBO is also providing matching resources for the project which include, staff and volunteers, wages for the staff and Volunteers and finally, in-kind contribution of equipment, office space office furniture and Security.";
            $words_limit4 = 15;
            $words4 = explode(' ', $paragraph4);
            $display_text4 = implode(' ', array_slice($words4, 0, $words_limit4));
            $remaining_text4 = implode(' ', array_slice($words4, $words_limit4));
            ?>

            <p id="content4"><?php echo $display_text4; ?></p>

            <button id="moreButton4" class="button4">More</button>
            <button id="lessButton4" class="button4" style="display: none;">Less</button>

            <script>
              const content4 = document.getElementById('content4');
              const moreButton4 = document.getElementById('moreButton4');
              const lessButton4 = document.getElementById('lessButton4');
              moreButton4.addEventListener('click', () => {
                content4.innerHTML = "<?php echo $paragraph4; ?>";
                moreButton4.style.display = 'none';
                lessButton4.style.display = 'inline';
              });

              lessButton4.addEventListener('click', () => {
                content4.innerHTML = "<?php echo $display_text4; ?>";
                moreButton4.style.display = 'inline';
                lessButton4.style.display = 'none';
              });
            </script>

            <p><a href="donate.php">Donate to other projects<i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div><!-- end of Program post-->

    </div>


  </div>
</section>




<?php
include "./include/footer.php";
?>