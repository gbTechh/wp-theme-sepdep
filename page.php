<?php get_header();?>


<?php   
    while (have_posts()) : the_post(); ?>
  <section class=" ">
    <div class="flex flex-wrap justify-center items-center py-4 container">
      <?php get_section_1(); ?>
    </div>
    
    <div class="container">
      <?php get_section_1_video();?>
    </div>
    
    <div class=" w-full bg-slate-200 mt-16">
      <div class="container flex flex-wrap justify-center gap-2 lg:justify-between items-center py-8">
        <?php get_section_2(); ?>
      </div>
    </div>

    <?php
       if ( is_front_page() ) {
         get_fallback_image();
       }    
    ?>


    <div class="grid-4-cols w-full h-auto">
      <?php get_section_blocks();?>
    </div>

    <div class="container">
      <?php get_section_parrafos();?>
    </div>

    <div class=" w-full h-auto bg-slate-200 p-8">
      <div class="container grid-4-cols-with-gap">
        <?php get_section_cards();?>
      </div>
    </div>


    <?php 
      if ( is_front_page() ) {
    ?>
    <div class="grid-3-cols-with-gap max-w-[900px] mx-auto w-full p-6 py-16">
      <?php get_post_blog();?>
    </div>
    <?php }?>
  </section>
    
  <?php endwhile;
?>


<?php get_footer();?>