  <?php 
    wp_footer();
  ?>  
  <footer class="w-full bg-primary-blue py-8">
    <div class="container py-6 flex flex-col md:flex-row gap-4">
      <div class="w-full md:w-2/5 flex flex-col mb-8 md:mb-0">
        <img class="w-3/4 mb-8 md:mb-16" src="<?php echo esc_url(get_theme_mod('mytheme_image', ''))?>"/>
        <p class="text-xs md:text-sm text-white max-w-[450px]">
          Garantiza la inviolabilidad del derecho de defensa y el acceso a una justicia plural, pronta, oportuna y gratuita, proporcionando la asistencia jurídica y defensa penal técnica estatal a toda persona denunciada, imputada o procesada carente de recursos económicos y a quienes no designen abogada o abogado para su defensa.
        </p>
      </div>
      <div class="w-full md:w-3/5 grid-3-cols-with-gap-footer">
        <div>
          <div class="border-b-2 border-b-sky-600 mb-4">
            <h2 class="p-3 bg-sky-600 w-max text-white">Contacto</h2>
          </div>
          <p class="text-xs md:text-sm text-white border-b-[1px] border-zinc-500 py-2">Teléfono: <?php echo get_theme_mod('mytheme_phone', ''); ?></p>
        </div>

        <div>
          <div class="border-b-2 border-b-sky-600 mb-4">
            <h2 class="p-3 bg-sky-600 w-max text-white">Ubicación</h2>
          </div>
          <p class="text-xs md:text-sm text-white border-b-[1px] border-zinc-500 py-2"> <?php echo get_theme_mod('mytheme_location', ''); ?></p>
        </div>

        <div>  
          <div class="border-b-2 border-b-sky-600 mb-4">
            <h2 class="p-3 bg-sky-600 w-max text-white">sistemas</h2>
          </div>
          <ul>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
              <li class="text-xs md:text-sm text-white border-b-[1px] border-zinc-500 py-2">
                <a href="<?php echo get_theme_mod('mytheme_link_url_' . $i, ''); ?>"><?php echo get_theme_mod('mytheme_link_text_' . $i, ''); ?></a>
              </li>
            <?php endfor; ?>
          </ul>
        </div>

       
        

      </div>     
     
    </div> 
    <div class="pt-8 container flex flex-col md:flex-row-reverse justify-between items-center">
      <?php html_social_media_icons();?>   
      <p class="mt-4 text-center md:mt-0 text-xs md:text-sm text-white max-w-[450px] mb-4">Copyright © 2024 SEPDEP. Todos los derechos reservados</p>

    </div>   
  </footer>
</body>
</html>