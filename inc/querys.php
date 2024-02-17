<?php 

function htmlSection1($image = [], $title = '', $description = '', $link = []){ ?>
  <a href="<?php echo $link['url']?>" class="flex flex-col p-2 gap-3 justify-center items-center">
    <img src="<?php echo $image['url'] ?>" alt="<?php $image['alt'] ?>" class="object-cover aspect-square rounded-full w-16 h-1w-16 bg-pink-600">
    <div class="flex flex-col items-center justify-center">
      <h3 class="text-sm md:text-base"><?php echo $title;?></h3>
      <span class="block text-xs md:text-sm"><?php echo $description;?></span>
    </div>

  </a>


<?php
}

function get_section_1() {
  $section1 = get_field('section1');
    if ($section1) { 
      if( have_rows('section1') ):
        while ( have_rows('section1') ) : the_row();
            if( have_rows('group') ):
                while ( have_rows('group') ) : the_row();
                    $title = get_sub_field('title');
                    $description = get_sub_field('descripcion');
                    $image = get_sub_field('imagen');
                    $link = get_sub_field('link');
                    htmlSection1($image, $title,$description, $link);                    
                endwhile;
            endif;
        endwhile;
      else :
        echo '';
      endif;
    
    
  }
}

function display_section_1_video($title, $description, $video){ ?>
  <div class="flex flex-col md:flex-row mt-3 mx-auto gap-2">
    <div class="md:w-1/2 mb-4 md:mb-0">
      <h1 class="mb-4 w-full text-center md:text-left text-xl md:text-3xl font-bold text-secondary-blue"><?php echo $title;?></h1>
      <p class="text-sm md:text-sm"><?php echo $description;?></p>
    </div>
    <div class="aspect-video md:w-1/2">
      <video controls >
        <source src=<?php echo $video['url'];?> type="video/mp4">
      </video>
    </div>
  </div>

<?php
}

function get_section_1_video(){
  $video_section = get_field('video_section');
  if ($video_section) { 
    $title = $video_section['title'];
    $description = $video_section['text_video'];
    $video = $video_section['video'];
    display_section_1_video($title, $description, $video);
  }
}

function htmlSection2($image = [], $title = '', $link = []){ ?>
  <a href="<?php echo $link['url']?>" class="flex p-2 px-3 rounded-md gap-3 justify-between bg-primary-blue items-center">
    <img src="<?php echo $image['url'] ?>" alt="<?php $image['alt'] ?>" class="object-cover aspect-square rounded-full w-8 h-1w-8 text-white">
    <h3 class="text-sm md:text-sm text-white"><?php echo $title;?></h3>
    <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24" width="20" height="20"><path d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,23c-6.065,0-11-4.935-11-11S5.935,1,12,1s11,4.935,11,11-4.935,11-11,11Zm5.522-12.154c.636,.636,.636,1.671,0,2.308l-4.803,4.803-.707-.707,4.75-4.75H6v-1h10.762l-4.75-4.75,.707-.707,4.803,4.803Z"/></svg>
  </a>


<?php
}

function get_section_2(){
  $section2 = get_field('section2');
    if ($section2) { 
      if( have_rows('section2') ):
        while ( have_rows('section2') ) : the_row();
            if( have_rows('group') ):
                while ( have_rows('group') ) : the_row();
                  $image = get_sub_field('imagen');
                  $title = get_sub_field('text');
                  $link = get_sub_field('link');
                  htmlSection2($image, $title, $link);                    
                endwhile;
            endif;
        endwhile;
      else :
        echo '';
      endif;    
  }  
}

function get_fallback_image(){
  $imagen_fallback = get_field('imagen_fallback');
  $text_social_media = get_field('text_social_media');
  ?>

  <div class="w-full h-28 relative">
    <img src="<?php echo $imagen_fallback['url'] ?>" alt="<?php $imagen_fallback['alt'] ?>" class="w-full object-cover h-full absolute">
    <div class="absolute top-0 left-0 bg-slate-400 opacity-70 w-full h-full"></div>
    <div class="w-full flex fle-col md:flex-row justify-between items-center max-w-[600px] mx-auto gap-4 p-4 relative h-full">
      <p class="text-primary-blue font-bold"><?php echo $text_social_media;?></p>
      <div class="w-36">
         <?php html_social_media_icons();?>   
      </div>
    </div>
  </div>

  <?php
}

function htmlSectionBlocks($image, $text, $link, $cont) { 
  $bg = 'bg-primary-gold';
  if($cont%2 == 0){
    $bg = 'bg-primary-blue';
  }  
  
?>
  <div class="w-full h-full relative flex flex-col justify-between">
    <img src="<?php echo $image['url'] ?>" alt="<?php $image['alt'] ?>" class="w-full object-cover h-full absolute">
    <div class="<?php echo 'absolute top-0 left-0 ' . $bg . ' opacity-80 w-full h-full' ?>" ></div>
    <h3 class="w-full relative text-md text-white p-6 font-bold"><?php echo $text?></h3>
    <a href="<?php echo $link['url']?>" class="border-[1px] border-white rounded-full w-max relative text-xs text-white p-2 mb-2 self-end mr-2 underline text-right">
      <?php echo $link['title']?>
    </a>
  </div>

<?php
}

function get_section_blocks(){
  $cont = 0;
  $blocks = get_field('blocks');
    if ($blocks) { 
      if( have_rows('blocks') ):
        while ( have_rows('blocks') ) : the_row();
            if( have_rows('group') ):
                while ( have_rows('group') ) : the_row();
                    $cont++;
                    $texts = get_sub_field('text');
                    $image = get_sub_field('imagen');
                    $link = get_sub_field('link');
                    htmlSectionBlocks($image, $texts, $link, $cont);                    
                endwhile;
            endif;
        endwhile;
      else :
        echo '';
      endif;
    
    
  }
}

function display_section_parrafos($title, $parrafo1, $parrafo2){?>
  <div class="w-full flex flex-col py-16 ">
    <h3 class="mb-8 text-primary-blue text-md font-bold"><?php echo $title;?></h3>
    <div class="flex gap-2 flex-col md:flex-row ">
      <p class=" text-sm"><?php echo $parrafo1;?></p>
      <p class=" text-sm"><?php echo $parrafo2;?></p>
    </div>
  </div>
<?php
}


function get_section_parrafos(){
  $parrafos_section = get_field('parrafos');
  if ($parrafos_section) { 
    $title = $parrafos_section['title'];
    $parrafo1 = $parrafos_section['parrafo1'];
    $parrafo2 = $parrafos_section['parrafo2'];
    display_section_parrafos($title, $parrafo1, $parrafo2);
  }
}

function htmlSectionCards($image, $text, $link) {?>
  <div class="flex flex-col gap-2">
    <div class="w-full h-full relative flex flex-col justify-between rounded-md overflow-hidden">
      <img src="<?php echo $image['url'] ?>" alt="<?php $image['alt'] ?>" class="w-full object-cover h-full">
      <a href="<?php echo $link['url']?>" class="text-sm underline absolute w-full bottom-0 left-0 bg-primary-blue text-white bg-opacity-85 p-1 px-3">
        <?php echo $link['title']?>
      </a>
    </div>
    <div>
      <h3 class="w-full relative text-sm text-center text-primary-blue p-1 "><?php echo $text?></h3>
    </div>
  </div>
 

<?php
}

function get_section_cards(){
  $cards = get_field('cards');
    if ($cards) { 
      if( have_rows('cards') ):
        while ( have_rows('cards') ) : the_row();
            if( have_rows('group') ):
                while ( have_rows('group') ) : the_row();
                    $texts = get_sub_field('text');
                    $image = get_sub_field('imagen');
                    $link = get_sub_field('link');
                    htmlSectionCards($image, $texts, $link);                    
                endwhile;
            endif;
        endwhile;
      else :
        echo '';
      endif;
    
    
  }
}

function get_post_blog($cant = 3){

  $args = array(
      'post_type' => 'post',
      'posts_per_page' => $cant, 
  );

  $the_query = new WP_Query( $args );


  if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post();
        html_display_blog(get_the_title(),get_the_permalink(),get_the_content());        
      endwhile;
    
      wp_reset_postdata();
  else :    
      echo '';
  endif;
}

function html_display_blog($title, $link, $content){?>

  <div class="flex flex-col">
    <h3  class="mb-2 w-full relative text-base text-left font-bold text-primary-blue p-1 capitalize"><?php echo $title;?></h3>
    <p class="text-sm max-h-[250px] text-ellipsis overflow-hidden"><?php echo $content?></p>
    <div class="w-full flex items-center justify-end mt-4">
      <a href="<?php echo $link?>" class="w-auto border-[1px] border-primary-blue rounded-full px-4 py-1 text-xs">Leer todo</a>
    </div>
  </div>


<?php
}

function html_social_media_icons(){ ?>

  <ul class="flex flex-row gap-4">
    <?php 
    $social = array('facebook', 'twitter', 'instagram');
    for ($i = 0; $i < count($social); $i++) : ?>
      <li>
        <a href="<?php echo get_theme_mod('mytheme_social_link_' . $i, ''); ?>">
          <?php
            if($social[$i] == 'facebook'){?>
              <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
              <path d="M10 14.375H13.5714L15 9.375H10V6.875C10 5.5875 10 4.375 12.8571 4.375H15V0.175C14.5343 0.12125 12.7757 0 10.9186 0C7.04 0 4.28571 2.07125 4.28571 5.875V9.375H0V14.375H4.28571V25H10V14.375Z" fill="#fff"/>
              </svg>
            
            <?php
            }else if($social[$i] == 'twitter'){?>

            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 25" fill="none">
            <path d="M14.2825 10.5857L23.2165 0H21.099L13.3437 9.19107L7.14653 0H0L9.3699 13.9L0 25H2.11749L10.3087 15.2929L16.8535 25H24L14.2825 10.5857ZM11.3833 14.0214L10.4339 12.6375L2.87979 1.625H6.1319L12.2267 10.5125L13.1761 11.8964L21.1008 23.45H17.8487L11.3833 14.0214Z" fill="white"/>
            </svg>

            <?php }else if($social[$i] == 'instagram'){ ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
              <path d="M7.25 0H17.75C21.75 0 25 3.25 25 7.25V17.75C25 19.6728 24.2362 21.5169 22.8765 22.8765C21.5169 24.2362 19.6728 25 17.75 25H7.25C3.25 25 0 21.75 0 17.75V7.25C0 5.32718 0.763837 3.48311 2.12348 2.12348C3.48311 0.763837 5.32718 0 7.25 0ZM7 2.5C5.80653 2.5 4.66193 2.97411 3.81802 3.81802C2.97411 4.66193 2.5 5.80653 2.5 7V18C2.5 20.4875 4.5125 22.5 7 22.5H18C19.1935 22.5 20.3381 22.0259 21.182 21.182C22.0259 20.3381 22.5 19.1935 22.5 18V7C22.5 4.5125 20.4875 2.5 18 2.5H7ZM19.0625 4.375C19.4769 4.375 19.8743 4.53962 20.1674 4.83265C20.4604 5.12567 20.625 5.5231 20.625 5.9375C20.625 6.3519 20.4604 6.74933 20.1674 7.04235C19.8743 7.33538 19.4769 7.5 19.0625 7.5C18.6481 7.5 18.2507 7.33538 17.9576 7.04235C17.6646 6.74933 17.5 6.3519 17.5 5.9375C17.5 5.5231 17.6646 5.12567 17.9576 4.83265C18.2507 4.53962 18.6481 4.375 19.0625 4.375ZM12.5 6.25C14.1576 6.25 15.7473 6.90848 16.9194 8.08058C18.0915 9.25269 18.75 10.8424 18.75 12.5C18.75 14.1576 18.0915 15.7473 16.9194 16.9194C15.7473 18.0915 14.1576 18.75 12.5 18.75C10.8424 18.75 9.25269 18.0915 8.08058 16.9194C6.90848 15.7473 6.25 14.1576 6.25 12.5C6.25 10.8424 6.90848 9.25269 8.08058 8.08058C9.25269 6.90848 10.8424 6.25 12.5 6.25ZM12.5 8.75C11.5054 8.75 10.5516 9.14509 9.84835 9.84835C9.14509 10.5516 8.75 11.5054 8.75 12.5C8.75 13.4946 9.14509 14.4484 9.84835 15.1517C10.5516 15.8549 11.5054 16.25 12.5 16.25C13.4946 16.25 14.4484 15.8549 15.1517 15.1517C15.8549 14.4484 16.25 13.4946 16.25 12.5C16.25 11.5054 15.8549 10.5516 15.1517 9.84835C14.4484 9.14509 13.4946 8.75 12.5 8.75Z" fill="white"/>
              </svg>
            <?php }
          ?>
        </a>
      </li>
    <?php endfor; ?>
  </ul>   
<?php
}


function html_slider(){
  while (have_posts()) : the_post();
  
   if( have_rows('slider', 'option') ) {
     
        while( have_rows('slider', 'option') ) : the_row();
            $image = get_sub_field('image');
            display_img_slider($image);
        endwhile;
     
    }
  endwhile;
 
}

function display_img_slider($img) { ?>
  <div class="slide w-full h-full">
    <img src="<?php echo $img['url'] ?>" alt="<?php $img['alt'] ?>" class="w-full object-cover h-full">
            
  </div>
  <?php 
}