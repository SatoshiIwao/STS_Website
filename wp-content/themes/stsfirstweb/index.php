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

