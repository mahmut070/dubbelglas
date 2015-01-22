<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400' rel='stylesheet' type='text/css'>

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >

<div class="header-full-bg">
    <div class="u-gridContainer header">
        <div class="u-gridRow header-top"> 
            
            <div class="u-gridCol6">
                <b class="website-titel">Dubbelglas</b>
                <p class="website-titel-caption">Den Haag</p>
            </div>   

            <div class="u-gridCol2 header-badge-area">
                <img class="header-badge" src="<?php echo get_stylesheet_directory_uri();?>/img/sinds.png">
            </div>    

            <div class="u-gridCol4 header-tekst">
                <b class="website-titel">Glaswacht</b>
                <p class="website-titel-caption">Den Haag</p>
            </div>  
        </div>
    </div>


      <div class="Bot-Nav">
    	<div class="u-gridContainer">
    		<div class="Nav-toggle u-cf">
    			<a class="Navigation-menuToggle" id="js-navCollapse">
    				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
    					<use xlink:href="#icon-menu2"></use>
    				</svg>
    			</a>
    		</div>

    		<div class="Mob-contact-ico">
    			<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0703632860">
    				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
    					<use xlink:href="#icon-phone"></use>
    				</svg>
    			</a>
    		
                    <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@glaswacht.com">
    				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
    					<use xlink:href="#icon-envelope"></use>
    				</svg>
    			</a>
    		</div><!-- header-contact -->

            <?php include 'includes/navigation.php'; ?>

    	</div>
      </div>
</div>