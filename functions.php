<?php

require get_template_directory() . '/inc/querys.php';

function my_theme_setup() {
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'my_theme_setup');

function sepdep_theme_styles(){
  wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
  wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');

  wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('scriptsJS', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'sepdep_theme_styles');


function sepdep_menu(){
  register_nav_menus(array(
    'menu-principal' => __('Menu Principal', 'sepdep')
  ));
}

add_action('init', 'sepdep_menu');

function mytheme_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'mytheme_image' , array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mytheme_image', array(
        'label'      => __( 'Logo footer', 'mytheme' ),
        'section'    => 'title_tagline', // Identidad del sitio
        'settings'   => 'mytheme_image',
    )));


    // Añade un campo para el teléfono
    $wp_customize->add_setting( 'mytheme_phone' , array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mytheme_phone', array(
        'label'      => __( 'Teléfono', 'mytheme' ),
        'section'    => 'title_tagline', // Identidad del sitio
        'settings'   => 'mytheme_phone',
    )));

      

    // Añade un campo para la ubicación
    $wp_customize->add_setting( 'mytheme_location' , array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mytheme_location', array(
        'label'      => __( 'Ubicación', 'mytheme' ),
        'section'    => 'title_tagline', // Identidad del sitio
        'settings'   => 'mytheme_location',
    )));

    // Añade campos para los enlaces
    for ($i = 1; $i <= 5; $i++) {
      $wp_customize->add_setting( 'mytheme_link_text_' . $i , array(
          'default'   => '',
          'transport' => 'refresh',
      ));
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mytheme_link_text_' . $i, array(
          'label'      => __( 'Texto del enlace ' . $i, 'mytheme' ),
          'section'    => 'title_tagline', // Identidad del sitio
          'settings'   => 'mytheme_link_text_' . $i,
      )));

      $wp_customize->add_setting( 'mytheme_link_url_' . $i , array(
          'default'   => '',
          'transport' => 'refresh',
      ));
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mytheme_link_url_' . $i, array(
          'label'      => __( 'URL del enlace ' . $i, 'mytheme' ),
          'section'    => 'title_tagline', // Identidad del sitio
          'settings'   => 'mytheme_link_url_' . $i,
      )));
    }

    $social = array('facebook', 'twitter', 'instagram');
    // Añade campos para los enlaces de redes sociales
    for ($i = 0; $i < count($social); $i++) {
        $wp_customize->add_setting( 'mytheme_social_link_' . $i , array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mytheme_social_link_' . $i, array(
            'label'      => __( 'Enlace de red social ' . $social[$i], 'mytheme' ),
            'section'    => 'title_tagline', // Identidad del sitio
            'settings'   => 'mytheme_social_link_' . $i,
        )));
    }
}
add_action( 'customize_register', 'mytheme_customize_register' );


?>
