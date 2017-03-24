<?php

/* Template Name: Home Page */

  get_header();

  $hero_body      = get_field('hero_body');

  global $post;
  $content = $post->post_content;

?>

<div class="pusher">
  <section style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" class="hero-image">
    <header class="container">
      <?php dynamic_sidebar( 'header-logo' ); ?>

      <?php
        wp_nav_menu( array(
          'theme_location' => 'header-menu',
          'container'      => 'nav',
          'container_class' => 'col-md-8 col-sm-12 text-right'

        ) );
      ?>
    </header>
    <div class="container">
      <div class="hero-text text-center">
        <div class="border-box-white">
          <h1><?php the_title(); ?></h1>
        </div><!-- border box white -->
        <?php echo $content; ?>
        <?php echo $hero_body; ?>
      </div><!-- hero text -->
    </div><!-- container -->
    <div class="powered-by">
      <span>Powered By:</span>
      <a target="_blank" href="http://www.findex.com.au"><img src="images/findexLogo.png" alt="Findex logo"></a>
      <a target="_blank" href="http://www.findex.com.au"><img src="images/nationalFramers.png" alt="National farmers logo"></a>
    </div><!-- powered by -->
  </section><!-- hero image -->
</div>
<div class="scroll-button">

</div><!-- scroll btn -->

<main>
  <section class="grey-bg section-padd" id="about">
    <div class="container text-center">
      <div class="col-md-12">
        <h2><span class="green">ABOUT</span> <span class="blue">SPROUTX</span></h2>
        <p>SproutX is the centre of Australia's $1.2 trillion agriculture opportunity. Through the SproutX Pre-Accelerator, Accelerator and Co-working space programs, innovation within the sector is enabled through the empowerment of entrepreneurs. Join us as we revolutionise Australian agriculture and take agtech to the next level.</p>
      </div><!-- col 12 -->
    </div><!-- container -->
  </section><!-- about -->

  <section class="top-50 section-padd container text-center">
    <div class="row">
      <h4>TOP50</h4>
    </div><!-- row -->
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="indiv-entry">
            <img src="images/agdna.jpg" alt="AGDNA">
            <h3>AgDna</h3>
            <div class="content">
              <p>Lorem Ipsum olare, Lorem Ipsum olare, lorem ip</p>
            </div><!-- content -->
            <p class="rank">1</p>
          </div><!-- indiv entry -->
        </div><!-- col 3 -->
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="indiv-entry">
            <img src="images/sundrop.jpg" alt="AGDNA">
            <h3>SUNDROP</h3>
            <div class="content">
              <p>Lorem Ipsum olare, Lorem Ipsum olare</p>
            </div><!-- content -->
            <p class="rank">2</p>
          </div><!-- indiv entry -->
        </div><!-- col 3 -->
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="indiv-entry">
            <img src="images/theyield.jpg" alt="AGDNA">
            <h3>THEYIELD</h3>
            <div class="content">
              <p>Lorem Ipsum olare, Lorem Ipsum olare</p>
            </div><!-- content -->
            <p class="rank">3</p>
          </div><!-- indiv entry -->
        </div><!-- col 3 -->
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="indiv-entry">
            <img src="images/droneag.jpg" alt="AGDNA">
            <h3>DRONEAG</h3>
            <div class="content">
              <p>Lorem Ipsum olare, Lorem Ipsum olare</p>
            </div><!-- content -->
            <p class="rank">4</p>
          </div><!-- indiv entry -->
        </div><!-- col 3 -->
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="indiv-entry">
            <img src="images/agriwebb.jpg" alt="AGDNA">
            <h3>AgriWebb</h3>
            <div class="content">
              <p>Lorem Ipsum olare, Lorem Ipsum olare, lorem ip</p>
            </div><!-- content -->
            <p class="rank">5</p>
          </div><!-- indiv entry -->
        </div><!-- col 3 -->
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="indiv-entry">
            <img src="images/agalytics.jpg" alt="AGDNA">
            <h3>AgAlytics</h3>
            <div class="content">
              <p>Lorem Ipsum olare, Lorem Ipsum olare</p>
            </div><!-- content -->
            <p class="rank">6</p>
          </div><!-- indiv entry -->
        </div><!-- col 3 -->
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="indiv-entry">
            <img src="images/observant.jpg" alt="AGDNA">
            <h3>Observant</h3>
            <div class="content">
              <p>Lorem Ipsum olare, Lorem Ipsum olare</p>
            </div><!-- content -->
            <p class="rank">7</p>
          </div><!-- indiv entry -->
        </div><!-- col 3 -->
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="indiv-entry">
            <img src="images/aglive.jpg" alt="AGDNA">
            <h3>Aglive</h3>
            <div class="content">
              <p>Lorem Ipsum olare, Lorem Ipsum olare</p>
            </div><!-- content -->
            <p class="rank">8</p>
          </div><!-- indiv entry -->
        </div><!-- col 3 -->
      </div><!-- col 12 -->
    </div><!-- row -->
    <div class="row">
      <div class="col-md-12 text-center load-more">
        <a href="#">LOAD MORE</a>
      </div><!-- col 12 -->
    </div><!-- row -->
  </section><!-- top 50 -->
</main>

<?php

  get_footer();

 ?>
