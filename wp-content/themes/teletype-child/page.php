<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Teletype
 */

get_header(); ?>

<?php get_template_part( 'template-parts/headline' ); ?>

<div id="primary" class="content-area container">
	<div id="page" class="row">
		<main id="main" class="site-main col-md-8<?php if ( true == get_theme_mod( 'page-sidebar-left' ) && is_active_sidebar( 'sidebar-page' ) ) { ?> col-md-push-4<?php } ?><?php if ( !is_active_sidebar( 'sidebar-page' ) ) { ?> col-md-offset-2<?php } ?>" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

<?php get_sidebar( 'page' ); ?>

	</div><!-- #page -->
</div><!-- #primary -->

<?php
get_footer();
