<!DOCTYPE html>

<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, minimum-scale = 1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>  
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">    

    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/estilo.css">    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/menu.css">     
    <script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/menu_jquery.js"></script>        

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">     
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style2.css">         
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style3.css">     
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style4.css">         

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/web.css">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />

    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/ie.js?ver=1.15'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/tinynav.min.js?ver=1.15'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery.validate.min.js?ver=1.15'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery.isotope.min.js?ver=1.15'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui-1.10.1.custom.min.js?ver=1.15'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/custom.js?ver=1.15'></script>



    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />     

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/nivo-slider.css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/themes/default/default.css" type="text/css" media="screen" />


    <script language="javascript" type="text/javascript" src="http://us3.listen2myradio.com:2199/system/streaminfo.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!--[if lt IE 9]>
        <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58662239-1', 'auto');
  ga('send', 'pageview');

</script>


<?php wp_head(); ?>

</head>


<body>


<div  id="page-wrap" class="backgroundmsts">

<header>

    <div class="contenido-cabecera"> 


        <!-- ******  INICIA CUADRO BUSCADOR *********** -->


            <div class="slogan">
                <h1>GRUPO DE ORACIÓN MARIA AUXILIADORA</h1>
                <h2>Parroquia San Juan Bosco</h2>
            </div>

        <!-- ******  FINALIZA CUADRO BUSCADOR *********** -->       

        <div class="logo-slogan">
                <div class="logo">
                    <a href="<?php bloginfo('url'); ?>/">
                        <img src="<?php echo IMAGES; ?>/logo.png" alt="">
                    </a>
                </div>
        </div>
        
    </div>


</header>

<div style="clear:both;"></div>

<div class="todocontenido zerogrid">

<nav>
      <?php  showMenu(); // wp_page_menu('register_nav_menus'); ?> 
 </nav>

<div class="cuadro-buscador">
    <div class="buscador"><?php  get_search_form();  //  if (is_page(5)) {   dynamic_sidebar('busqueda-header');   }   ?></div>
    <div class="cuadro-redes">
        <p>Síguenos en:</p>
        <a class="linkopacity" href="https://www.facebook.com/pages/Grupo-de-Oraci%C3%B3n-Maria-Auxiliadora/142242899144356"></a> 
    </div>
</div>


        