<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jacoblu
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();  ?>/img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();  ?>/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();  ?>/img/favicons/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri();  ?>/img/favicons/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri();  ?>/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
		<div class="header-container">	
			<div class="inner">
			
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo-white"><img src="<?php echo get_template_directory_uri();  ?>/img/logo-white.png" alt="Jaco blu" /></a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Jaco blu" /></a>
				
				 <?php wp_nav_menu( array(
                     'theme_location' => 'primary',
                     'menu_id' => 'primary-menu',
                     'container'       => 'nav',
	                'container_class' => 'header-menu',
	                'container_id'    => '',
	                'menu_class'      => 'header-menu-ul',
                      ) 
                  ); 
                  ?>
				
				 <button id="btn-menu" class="header-btn-menu">
		            <i class="icon-menu"></i>
		        </button>
			</div>
		</div>
		
	</header>