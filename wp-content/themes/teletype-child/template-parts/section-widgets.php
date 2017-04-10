<?php
/**
 * Template part for displaying home widgets area.
 * @package Teletype
 */
?>

<?php if ( is_active_sidebar( 'home-widgets' ) ) { ?>
<section id="home-widgets" class="text-left">

		<div class="section-title center">
               			<h2><?php echo esc_html( get_theme_mod( 'section-widgets-title', 'Section Title' ) ); ?></h2>
               			<p><?php echo esc_html( get_theme_mod( 'section-widgets-subtitle', 'Section Sub Title' ) ); ?></p>
		</div>
		<div class="row">
			<?php dynamic_sidebar( 'home-widgets' ); ?>
		</div><!-- .row -->

</section>
<?php } ?>