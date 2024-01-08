<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fusion
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300italic,regular,italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fusion' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="homepage">
        <div class="header-container">
          <div class="heading">
            <div class="box-holder">
              <div class="intro">
                <p>We’re <span class="colorf7ac53">Fusion</span>, We Build Things for Human</p>
              </div>
            </div>
            <nav class="nav">
			  <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container' => 'ul','menu_class'=> 'primary-nav'
				)
			);
			?>
            </nav>
          </div>
          <img class="arrow" src="<?php echo get_template_directory_uri() ; ?>/images/arrow.png" alt="" width="13" height="8">
          <div class="navigation-on-home group">
            <img class="fusion" src="<?php echo get_template_directory_uri() ; ?>/images/fusion.png" alt="" width="45" height="45">
            <div class="get-intouch group">
              <img class="layer" src="<?php echo get_template_directory_uri() ; ?>/images/image_30.png" alt="" width="11" height="7">
              <p>Get in touch</p>
            </div>
          </div>
        </div>
      </div>
	</header><!-- #masthead -->
