<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appux
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php bloginfo( 'name' )?></title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="loading">
        <div class="circle"></div>
    </div>
    <!--/-->
    
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container-fluid">
            <!--logo-->
            <div class="logo">
                <a href="<?php get_home_url();?>">
                    <?php echo get_custom_logo();?>
                </a>
            </div>
            <!--/-->
    
            <!--navbar-collapse-->
            <!-- <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html"> Home </a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="about.html"> About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"> Contact </a>
                    </li>
                </ul>
            </div> -->
            <!--/-->
			<?php
			 wp_nav_menu( array(
				 'theme_location'       =>'main_menu',
				'container'             => 'div',
				'container_id'           =>'main_nav',
				'container_class'       =>'collapse navbar-collapse',
				'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'menu_class'         =>'navbar-nav ml-auto mr-auto',

			 ) );
			?>
    
            <!--navbar-right-->
            <div class="navbar-right ml-auto mt-50">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                </div>
                <div class="social-icones">
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
    
                <div class="search-icon">
				<i class="fas fa-search"></i>
                </div>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'assignment' ); ?></a>
