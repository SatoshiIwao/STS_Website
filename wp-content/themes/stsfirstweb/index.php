<!DOCTYPE html>
<html lang="en-US">
<head>
<?php wp_head(); ?>
</head>
<body>
<div id="header">
 <i class="fa fa-android fa-5x"></i>
 <i class="fa fa-hand-o-right fa-5x fa-spin" aria-hidden="true"></i>
 <div id="headerimg">
   <h1>
    <a href="<?php echo get_option('home'); ?>">
       <?php bloginfo('name'); ?></a>
   </h1>
     <div class="description">
       <?php bloginfo('description'); ?>
     </div>
  </div>
</div>
</body>
</html>

