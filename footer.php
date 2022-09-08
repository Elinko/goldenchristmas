<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Botiga
 */

?>

	<?php do_action( 'botiga_main_wrapper_end' ); ?>			

	<?php do_action( 'botiga_footer_before' ); ?>

	<?php do_action( 'botiga_footer' ); ?>

	<?php do_action( 'botiga_footer_after' ); ?>

</div><!-- #page -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php wp_footer(); ?>

<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script type="text/javascript"   src="<?php bloginfo('stylesheet_directory');?>/assets/slick-lightbox/slick-lightbox.min.js"></script>
<script type="text/javascript" async  src="<?php bloginfo('stylesheet_directory');?>/assets/js/myjs.js"></script>

</body>
</html>
