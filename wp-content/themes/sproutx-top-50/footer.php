<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SproutX_Top_50
 */

?>

<footer id="contact">
    <div class="green-bg">
      <div class="container">
        <div class="col-md-12">

            <?php dynamic_sidebar( 'footer-1' ); ?>
						<?php dynamic_sidebar( 'footer-2' ); ?>
						<?php dynamic_sidebar( 'footer-3' ); ?>
						
        </div><!-- col 12 -->
      </div><!-- container -->
    </div><!-- green bg -->
    <div class="col-md-12">
      <div class="copyright">

				<?php dynamic_sidebar( 'copyright footer' ); ?>

        <p>&copy; 2017 all rights reserved</p>
      </div><!-- copyright -->
    </div><!-- col 12 -->
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="<?php bloginfo("stylesheet_directory"); ?>/assets/js/scripts.js"></script>
</body>

</html>


<?php wp_footer(); ?>

</body>
</html>
