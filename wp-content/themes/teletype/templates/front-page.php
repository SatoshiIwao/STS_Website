<?php
/**
 * Template Name: Front Page
 *
 * This is the template that display custom front page.
 *
 * @package Teletype
 */

get_header(); ?>

<?php get_template_part( 'template-parts/headline' ); ?>

<div id="primary" class="content-area container">
	<main id="main" class="site-main" role="main">
<?php
	// Get homepage blocks
	$sections = get_theme_mod( 'homesorter' );

	// Turn blocks into array
	if ( $sections ) :
					
		$sections = explode( ',', $sections );

		foreach ( $sections as $section ) :

			if ( 'content:1' == $section ) :
				get_template_part( 'template-parts/section', 'home-content' );

			elseif ( 'widgets:1' == $section ) :
				get_template_part( 'template-parts/section', 'widgets' );

			elseif ( 'gallery:1' == $section ) :
				get_template_part( 'template-parts/section', 'gallery' );

			elseif ( 'blog:1' == $section ) :
				get_template_part( 'template-parts/section', 'blog' );

			endif;

		endforeach; ?>

	<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();