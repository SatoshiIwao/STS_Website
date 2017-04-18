<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body>
  <div id="page" class="site">
    <!-- Header  -->
    <header id="masthead" class="site-header" role="banner">
      <!-- Navigation -->
      <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">

	<div class="container-fluid">
          
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	  </button>

	  <div class='navibar-header'>

	    <a class='navbar-brand' href="<?php echo get_option('home'); ?>">
	      <?php bloginfo('name'); ?></a>
<!--	    <span class="description">
	      <?php //bloginfo('description'); ?>
	    </span>--><!-- #description -->
	  </div><!-- #navibar-header -->	  

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php wp_nav_menu(array("container"=>"false" ,"menu_class" => "nav navbar-nav navbar-right")); ?>
          </div> 
	</div> <!-- #container-fluid -->
      </nav><!-- end Navigation -->
 
    </header>
    <!-- end Header -->
    <!-- Main content -->
    <div id="content" class="site-content">
      <div id="primary" class="content-area container">
	  <main id="main" class="site-main" role="main">

            <!-- Blog Section -->
            <section id="blog" class="text-left">

              <?php if ( have_posts() ) : ?>

                <div id="blog-masonry" class="row">

		  <?php while ( have_posts() ) : the_post(); //get_template_part( 'template-parts/content', get_post_format() );?>

		    <div class="col-md-4 col-sm-6 post-box">
		       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			 <?php the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>

			 <?php get_template_part( 'template-parts/post', 'meta-cat' ); ?>

			 <div class="entry-summary">
			   <?php the_excerpt(); ?>
			 </div><!-- .entry-excerpt -->

			 <div class="footer-meta">
			   <a href="<?php the_permalink(); ?>" class="read-more">
			     <?php esc_html_e( 'Read more', 'teletype' ); ?>
			   </a>
			 </div>

		       </article>
		    </div>

		  <?php endwhile; ?>

                </div><!-- .blog-masonry -->
                <?php //teletype_pagination();
              else :
                get_template_part( 'template-parts/content', 'none' );
              endif; // have_posts() ?>

            </section><!-- #blog -->

          </main><!-- #main -->
       </div><!-- #primary -->
    </div><!-- #content -->
    <!-- end Main content -->

    <!-- Footer -->
    <footer id="footer">
      <div class="container">
      </div><!-- .container -->
    </footer>
  </div><!-- #page -->
  <?php wp_footer(); ?>
</body>
</html>

