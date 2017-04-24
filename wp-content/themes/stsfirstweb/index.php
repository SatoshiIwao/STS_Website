<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<?php
if ( function_exists( 'the_custom_logo' ) ) {
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
        $logo = esc_url( $image[0] );
} else {
        $logo = esc_url( get_theme_mod( 'logo' ) );
}
?>

<body>
  <!-- #page -->
  <div id="page" class="site">
    <!-- Header  -->
    <header id="masthead" class="site-header" role="banner">
      <!-- Navigation -->
      <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- container-fluid  -->
	<div class="container-fluid">
          
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	  </button>

	  <div class='navibar-header'>

	    <a class='navbar-brand' href="<?php echo get_option('home'); ?>">

              <?php if ( ! empty( $logo ) ) { ?>
                <img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" class="alignleft" />
              <?php } ?>


	      <?php bloginfo('name'); ?></a>
<!--	    <span class="description">
	      <?php //bloginfo('description'); ?>
	    </span>--><!-- #description -->
	  </div><!-- #navibar-header -->	  

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php wp_nav_menu(array(
                "container"=>"false" 
               ,"menu_class" => "nav navbar-nav navbar-right"
            )); ?>
          </div> 
	</div> <!-- #container-fluid -->
      </nav><!-- end Navigation -->
 
    </header>
    <!-- end Header -->
    <!-- Main content -->
    <div id="content" class="site-content">
      <!-- image-slider-container -->   
      <div id="image-slider-container">
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
           <!-- Indicators -->
           <ol class="carousel-indicators">
             <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
             <li data-target="#carousel-example-generic" data-slide-to="1"></li>
             <li data-target="#carousel-example-generic" data-slide-to="2"></li>
           </ol><!-- Indicators -->
           <!-- Wrapper for slides -->
           <div class="carousel-inner">
             <!-- Item -->
             <div class="item active">
               <img src="<?php echo wp_upload_dir()[ 'baseurl' ];?>/2017/04/sample1.jpg" alt="...">
               <div class="carousel-caption">
      	         <h3>Caption Text</h3>
               </div><!-- Item -->
             </div>
              <!-- Item -->
             <div class="item">
               <img src="<?php echo wp_upload_dir()[ 'baseurl' ];?>/2017/04/sample2.jpg" alt="...">
               <div class="carousel-caption">
      	         <h3>Caption Text</h3>
               </div>
             </div> <!-- Item -->

              <!-- Item -->
             <div class="item">
               <img src="<?php echo wp_upload_dir()[ 'baseurl' ];?>/2017/04/sample3.jpg" alt="...">
               <div class="carousel-caption">
      	         <h3>Caption Text</h3>
               </div>
             </div> <!-- Item -->

           </div> <!-- Wrapper for slides --> 

           <!-- Controls -->
           <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
             <i class="fa fa-chevron-left" aria-hidden="true"></i>
           </a>
           <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
             <i class="fa fa-chevron-right" aria-hidden="true"></i>
           </a><!-- Controls -->
        </div> <!-- Carousel -->
      </div><!-- image-slider-container -->

     <!-- primary -->
      <div id="primary" class="content-area container"> 
        <!-- page -->
        <div id="page" class="row">
          <!-- main -->
          <main id="main" class="site-main col-md-8" role="main">
             <p>main content here!</p>
          </main><!-- #main -->
          <aside id="secondary" class="widget-area col-md-4" role="complementary">
             <p>here is sidebar</p>
          </aside><!-- #secondary -->
        </div><!-- #page -->
      </div><!-- #primary -->
    </div><!-- #content -->
    <!-- end Main content -->

    <!-- Footer -->
    <footer id="footer">
      <div class="container">
      <p>here is footer</p>
      </div><!-- .container -->
    </footer>
  </div><!-- #page -->
  <?php wp_footer(); ?>
  <script type="text/javascript">
  </script>

</body>
</html>

