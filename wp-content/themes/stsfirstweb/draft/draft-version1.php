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
      <i class="fa fa-android fa-5x"></i>
      <i class="fa fa-hand-o-right fa-5x fa-spin" aria-hidden="true"></i>
      <button type="button" class="btn btn-info">Default</button>
      <div id="headerimg">
	<h1>
	      <a href="<?php echo get_option('home'); ?>">
	      <?php bloginfo('name'); ?></a>
	  </h1>
	  <div class="description">
	      <?php bloginfo('description'); ?>
	  </div>
      </div>
    </header>
    <!-- end Header -->
    <!-- Main content -->
    <div id="content" class="site-content">
      <div id="primary" class="content-area container">
	  <main id="main" class="site-main" role="main">

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

