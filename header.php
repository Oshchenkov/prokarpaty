<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prokarpaty
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="headerMain">
		<div class="topInfo">
			<div class="container ">
			<!-- <?php $post = get_post('503'); ?>   getting the_field from contact page -->
				<div class="row topInfo__row">
					<div class="col-lg-auto topInfo__col-logo logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo__link">
							<img class="logo__link-img" src="<?php echo get_template_directory_uri(); ?>/images/tur-head-logo.png" alt="Main logo" class="logo__img">
						</a><!-- /.logo__link -->
					</div><!-- /.col topInfo__col-logo logo-col -->
					<div class="col topInfo__col-contactInfo">
						<div class="row topInfo__row-uzgorod d-flex justify-content-between">
							<div class="col-lg-auto  topInfo__socialCol  px-2 d-none d-lg-block">
								<a href="https://www.facebook.com/www.prokarpaty.info" class="socialLink" target="_blank">
									<i class="fab fa-facebook"></i>
								</a><!-- /.socialLink -->
								<a href="https://www.instagram.com/pro_karpaty/?hl=uk" class="socialLink" target="_blank">
									<i class="fab fa-instagram"></i>
								</a><!-- /.socialLink -->
							</div><!-- /.col topInfo__fb -->
							<div class="col-lg-auto topInfo__cityCol px-0">
								<?php echo __('г. Ужгород:', 'prokarpaty'); ?>
							</div><!-- /.col-3 topInfo__city -->
							<div class="col-lg-auto topInfo__mailCol px-0">
								<a class="topInfo__mail" href="mailto:<?php the_field('contact_header_email'); ?>" target="_blank"><i class="far fa-envelope align-middle"></i><?php the_field('contact_header_email'); ?></a>
							</div><!-- /.col-3 -->
							<div class="col-lg-auto topInfo__telCol px-0">
								<a class="topInfo__tel" href="tel:+380997767729"><i class="fas fa-phone"></i><?php the_field('contact_header_tel1'); ?> </a>                                      
							</div><!-- /.col-3 -->
							<div class="col-lg-auto topInfo__telCol px-0">
								<a class="topInfo__tel" href="tel:+380970345393"><i class="fas fa-phone"></i><?php the_field('contact_header_tel2'); ?></a>                                        
							</div><!-- /.col-3 -->
						</div><!-- /.row -->

						<div class="row topInfo__row-lviv d-flex justify-content-between">
							<div class="col-lg-auto  topInfo__socialCol px-2  d-none d-lg-block">
								<a href="https://www.facebook.com/prokarpaty.lviv/" class="socialLink" target="_blank">
									<i class="fab fa-facebook"></i>
								</a><!-- /.socialLink -->
								<a href="https://www.instagram.com/pro_karpaty_lviv/?hl=uk" class="socialLink" target="_blank">
									<i class="fab fa-instagram"></i>
								</a><!-- /.socialLink -->
							</div><!-- /.col topInfo__fb -->
							<div class="col-lg-auto topInfo__cityCol px-0">
								<?php echo __('г. Львов:', 'prokarpaty'); ?>
							</div><!-- /.col-3 topInfo__city -->
							<div class="col-lg-auto topInfo__mailCol px-0">
								<a class="topInfo__mail" href="mailto:prokarpatylviv@gmail.com" target="_blank"><i class="far fa-envelope align-middle"></i>prokarpatylviv@gmail.com</a>
							</div><!-- /.col-3 -->
							<div class="col-lg-auto topInfo__telCol px-0">
								<a class="topInfo__tel" href="tel:+380672105980"><i class="fas fa-phone"></i><?php the_field('contact_tel_lviv1'); ?></a>                                      
							</div><!-- /.col-3 -->
							<div class="col-lg-auto topInfo__telCol px-0">
								<a class="topInfo__tel" href="tel:+380634036012"><i class="fas fa-phone"></i><?php the_field('contact_tel_lviv2'); ?></a>                                        
							</div><!-- /.col-3 -->
						</div><!-- /.row -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.topInfo -->
		<div class="mainMenu-pc d-none d-lg-block">
			<div class="container px-0">
				<div class="row">
					<div class="col-lg-auto topInfo__col-logo"></div><!-- /.col-lg-auto topInfo__col-logo -->
					<nav class="col mainMenu-pc__col px-0">
						<?php 
							wp_nav_menu( array(
								'menu'              => "main-menu",
								'container'         => "nav",
								'container_class'   => "mainMenu-pc__container",
								'menu_class'        => "mainMenu-pc__ul clearfix",
								'theme_location'    => "top-menu-pc", 
							) );
						?>
					</div><!-- /.col mainMenu-pc__col -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.mainMenu-pc -->
		<div class="mainMenu-mobile d-lg-none">
			<div class="container">
				<div class="row">
					<div class="col mainMenu__col ">
						<div class="navbar navbar-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
						</div><!-- /.navbar -->
						<?php 
							wp_nav_menu( array(
								'menu'              => "main-menu",
								'container'         => "nav",
								'container_class'   => "mainMenu__container navbar navbar-expand-lg navbar-light",
								'menu_class'        => "mainMenu__ul collapse navbar-collapse clearfix",
								'menu_id'           => "navbarNavDropdown",
								'theme_location'    => "top-menu-mob", 
							) );
						?>
						
						</nav><!-- /.mainMenu__container -->
					</div><!-- /.col mainMenu__col -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.mainMenu-mobile -->
	</header><!-- /.headerMain -->
<!-- -------------------------------- /header ---------------------------------------------->