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
<nav class="navbar navbar-light bg-faded">
  <h1 class="navbar-brand mb-0">Navbar</h1>
</nav>
<nav class="navbar fixed-top navbar-inverse bg-primary">
  <a class="navbar-brand" href="#">Fixed top</a>
</nav>


  <div id="page" class="site">
    <!-- Header  -->
    <header id="masthead" class="site-header" role="banner">
      <!-- Navigation -->
      <nav id="main-menu" class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
	  <div class='navibar-header'>
	    <h1>
	    <a href="<?php echo get_option('home'); ?>">
	      <?php bloginfo('name'); ?></a>
	    </h1>
	    <span class="description">
	      <?php bloginfo('description'); ?>
	    </span><!-- #description -->
	  </div><!-- #navibar-header -->
	  <div>
	  </div>
	</div> <!-- #container -->
      </nav><!-- end Navigation -->
 
    </header>
    <!-- end Header -->
    <!-- Main content -->
    <div id="content" class="site-content">
      <div id="primary" class="content-area container">
	  <main id="main" class="site-main" role="main">
          <h1>test</h1>
          <h1>test</h1>	          
          <h1>test</h1>
	  <h1>test</h1>
          <h1>test</h1>
	  <h1>test</h1>
	  <h1>test</h1>
	  <h1>test</h1>
          <h1>test</h1>	          
          <h1>test</h1>
	  <h1>test</h1>
          <h1>test</h1>
	  <h1>test</h1>
	  <h1>test</h1>
          <h1>test</h1>
          <h1>test</h1>	          
          <h1>test</h1>
	  <h1>test</h1>
          <h1>test</h1>
	  <h1>test</h1>
	  <h1>test</h1>
	  <h1>test</h1>
          <h1>test</h1>	          
          <h1>test</h1>
	  <h1>test</h1>
          <h1>test</h1>
	  <h1>test</h1>
	  <h1>test</h1>



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

