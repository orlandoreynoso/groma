
<?php 

/*
Template Name: Home-MariaAuxiliadora
 */

 get_header();


?>


<!-- BAnner maria auxiliadora   -->
<!-- ********************************************** -->

<div style="clear:both;"></div>
<div class="banner">
  <div class="container">
    <div id="slides">
      <?php  
        if ( function_exists( 'soliloquy' ) ) { soliloquy( '33' ); } 
        if ( function_exists( 'soliloquy' ) ) { soliloquy( 'portada', 'slug' ); }
      ?>
    </div>
  </div>
</div>


<!-- ********************************************** -->

<div style="clear:both;"></div>

<section class="content" id="content">
    <div class="wrap-content zerogrid">

<!-- ************************************************* -->

<section  class="proximos-eventos">
    <div class="titulos-generales"><h2>PRÓXIMOS EVENTOS</h2></div>
    <!-- Slideshow 3 -->
    <?php // section_ID(126); ?>
    <?php echo do_shortcode("[metaslider id=36]");  ?>              
</section>

<!-- ********************************************** -->

<section  class="interes">
    <div class="titulos-generales"><h2>SECCIONES DE INTERES</h2></div>
    <?php dynamic_sidebar('seccion-interes'); ?>    
</section>

<!-- ****************** Contenido General **************************   -->

<div style="clear:both;"></div>

<section id="content">
  <div class="zerogrid">
    <article class="col-2-3">
    <div class="titulo-iglesias"><h2>NOTICIAS</h2></div>
      <div class="notas">
        <div id="compartir">    
        <p>Compartir  &raquo; </p>          
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style ">
        <a class="addthis_button_preferred_1"></a>
        <a class="addthis_button_preferred_2"></a>
        <a class="addthis_button_preferred_3"></a>
        <a class="addthis_button_preferred_4"></a>
        <a class="addthis_button_compact"></a>
        <a class="addthis_counter addthis_bubble_style"></a>
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4def925768ffe7cc"></script>
        <!-- AddThis Button END -->
        </div>
        <div class="todo-contenido">


          <?php // dynamic_sidebar('picture-profile'); ?>

          <?php  rewind_posts(); ?>
          <?php
          // Start the loop.
          while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            /*if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif; */

          // End the loop.
          endwhile;
          ?>
          <!-- Go to www.addthis.com/dashboard to customize your tools -->
          <div class="addthis_sharing_toolbox"></div>               
         <?php  the_content(); ?> 
        <div style="clear: both"></div>


        </div>  
      </div>
    </article>

    <aside class="col-1-5">
      <div class="titulos-generales"><h2>MINISTERIOS</h2></div>      
      <div class="contenido-ministerios">
        <?php // section_ID(11); ?>
        <?php dynamic_sidebar('seccion-ministerios'); ?>            
      </div>  

      <div class="titulo-iglesias"><a href="<?php bloginfo('url'); ?>/imagenes/"><h2>Galería de imágenes</h2></a></div>
      <div class="lateral"><?php // section_ID(25); ?></div>     

      <div class="titulo-iglesias"><a href="<?php bloginfo('url'); ?>/videos/"><h2>Galería de videos</h2></a></div>
      <div class="lateral"><?php  //section_ID(27); ?></div>     

  <article class="facebook"><?php dynamic_sidebar('facebook'); ?></article>  
  <article class="friends"><?php dynamic_sidebar('friends'); ?>  </article>  

    </aside>    
  </div>

</section>

<!-- **************************************************   -->


<!-- **************************************************   -->
</div> <!-- finaliza el div wrap-content zerogrid -->
</section>


<?php  get_footer(); ?>
