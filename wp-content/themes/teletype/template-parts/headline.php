<?php
/**
 * Template part for displaying headline section.
 *
 * @package Teletype
 */
?>

<?php
	// Jetpack tweak
	if ( function_exists( 'sharing_display' ) ) remove_filter( 'the_excerpt', 'sharing_display', 19 );

	// Set header Image
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'teletype-header' );

	if( !is_singular() ) {
		$bgimage = get_header_image();
	}
	if( is_singular() && $thumbnail ) {
		$bgimage = $thumbnail[0];
	}
	if( is_singular() && !$thumbnail ) {
		$bgimage = get_header_image();
	}
?>

<?php
	if( is_singular( 'post' ) && !is_active_sidebar( 'sidebar-post' ) || !is_front_page() && is_singular( 'page' ) && !is_active_sidebar( 'sidebar-page' ) ) : ?>

	<!-- Headline Section -->
	<section id="headline" class="text-center" <?php if( !empty( $bgimage ) ) { ?>style="background: url(<?php echo esc_url( $bgimage ); ?>);"<?php } ?>>
         		<div class="head-content">
            			<?php the_title( '<h1>', '</h1>' ); ?>
            				<hr>
            			<?php if ( has_excerpt() ) : ?>
				<?php the_excerpt(); ?>
			<?php endif; ?>
         		</div>
      	</section>
<?php
	endif; ?>


<?php
	if( is_singular( 'post' ) && is_active_sidebar( 'sidebar-post' ) || !is_front_page() && is_singular( 'page' ) && is_active_sidebar( 'sidebar-page' ) ) : ?>

	<!-- Headline Section -->
	<section id="headline" <?php if( !empty( $bgimage ) ) { ?>style="background: url(<?php echo esc_url( $bgimage ); ?>);"<?php } ?>>

		<div class="container caption-wrapper">
			<?php if ( has_excerpt() ) : ?>
				<?php the_excerpt(); ?>
			<?php endif; ?>
			<div class="single-caption">
				<?php the_title( '<h1>', '</h1>' ); ?>
			</div>
         		</div>
      	</section>
<?php
	endif; ?>

<?php
	if( is_front_page() || is_home() && is_front_page() ) : ?>

	<!-- Headline Section -->
	<section id="headline" class="text-center" <?php if( !empty( $bgimage ) ) { ?>style="background: url(<?php echo esc_url( $bgimage ); ?>);"<?php } ?>>
         		<div class="head-content">
			<?php echo do_shortcode( wp_kses_post( get_theme_mod( 'headline-text' ) ) ); ?>
         		</div>
      	</section>
<?php
	endif; ?>

<?php
	if( !is_front_page() && is_home() ) : ?>

	<!-- Headline Section -->
	<section id="headline" class="text-center" <?php if( !empty( $bgimage ) ) { ?>style="background: url(<?php echo esc_url( $bgimage ); ?>);"<?php } ?>>
         		<div class="head-content">
			<?php echo do_shortcode( wp_kses_post( get_theme_mod( 'blog-headline-content' ) ) ); ?>
         		</div>
      	</section>
<?php
	endif; ?>

<?php
	if( is_404() ) : ?>

	<section id="headline" class="text-center" <?php if( !empty( $bgimage ) ) { ?>style="background: url(<?php echo esc_url( $bgimage ); ?>);"<?php } ?>>
         		<div class="head-content">
            			<h1><?php esc_html_e( 'Error 404', 'teletype' ); ?></h1>
            				<hr>
            			<p class="lead"><?php esc_html_e( 'Oops! That page cant be found.', 'teletype' ); ?></p>
         		</div>
      	</section>
<?php
	endif; ?>