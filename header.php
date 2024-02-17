<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
  <title>Document</title>
</head>
<body>

<header class="w-full ">
  <?php 
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id , 'full');

  ?>
  <div class="container pt-1 pb-2">
    <img src="<?php echo esc_url($logo[0])?>"   class="h-full "/>
  </div>

  <?php 
    $args = array(
      'theme_location' => 'menu-principal',
      'container' => 'nav',
      'container_class' => 'menu-principal wp-full bg-primary-blue flex justify-center items-center'
    );

    wp_nav_menu($args);
  
  ?>
  <div class="w-full md:block hidden h-[350px] bg-primary-gold">
    <div class="slider-container h-full">
      <div class="slider w-full h-full">
        <?php html_slider();?>
       
        
      </div>
    </div>

  </div>
</header>
