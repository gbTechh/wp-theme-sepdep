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

  <div class="w-full flex bg-primary-blue relative items-center justify-center">
   <?php 
    $args = array(
      'theme_location' => 'menu-principal',
      'container' => 'nav',
      'container_class' => 'menu-principal w-full hidden md:flex  justify-center items-center',
      'menu_class' => 'menu',
      'depth' => 3, 
      'walker' => new Custom_Nav_Walker(),
    );

    wp_nav_menu($args);
  
  ?>
  <div class="relative md:hidden w-full flex items-center justify-center">

    <button class="btn-menuburguer self-center flex-col flex py-2 md:hidden gap-1 items-center justify-center w-7 aspect-square">
      <span class="w-full rounded-full h-[3px] bg-white"></span>
      <span class="w-full rounded-full h-[3px] bg-white"></span>
      <span class="w-full rounded-full h-[3px] bg-white"></span>
    </button>
  
    <div class="nav-mobile hidden md:hidden absolute top-full left-0 bg-primary-blue pt-0 px-2 pb-2 w-full h-auto">
      <?php 
      $args = array(
        'theme_location' => 'menu-principal',
        'container' => 'nav',
        'container_class' => 'bg-white py-2 menu-principal-mobile w-full flex flex-col justify-center items-center',
        'menu_class' => 'menu',
        'depth' => 3, 
      );
  
      wp_nav_menu($args);
    
    ?>
    </div>
  </div>
   
  </div>
 
  <div class="w-full md:block hidden h-[350px] bg-primary-gold">
    <div class="slider-container h-full">
      <div class="slider w-full h-full">
        <?php html_slider();?>
       
        
      </div>
    </div>

  </div>
</header>
