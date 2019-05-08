<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prokarpaty
 */

?>

<!-- -------------------------------- Footer ---------------------------------------------->

<footer class="mainFooter">
        <div class="mainFooter__separatorImg separatorImg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/tur-content-hr2.png" alt="">
        </div><!-- /.mainFooter__separatorImg -->
        <div class="mainFooter__widget widget">
            <div class="container">
                <div class="row">
				<div class="col-lg-3 col-md-6 widget__col">
                        <div class="mainFooter-logo logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo__link">
								<img class="logo__link-img" src="<?php echo get_template_directory_uri(); ?>/images/tur-head-logo.png" alt="Main logo" class="logo__img">
							</a><!-- /.logo__link -->
						</div><!-- /.mainFooter-logo -->
						<?php 
							wp_nav_menu( array(
								'menu'              => "footer-menu",
								'container'         => "nav",
								'container_class'   => "mainFooter-nav",
								'menu_class'        => "mainFooter-nav__ul clearfix",
								'theme_location'    => "footer-menu", 
							) );
						?>
                        
                    </div><!-- /.col -->
                    <div class="col-lg-3 col-md-6 widget__col">
						<div class="row mb-3">
							<div id="fb-root"></div>
							<script async defer crossorigin="anonymous" src="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

							<div class="fb-page" data-href="https://www.facebook.com/www.prokarpaty.info/" data-width="255" data-height="246" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
								<blockquote cite="https://www.facebook.com/www.prokarpaty.info/" class="fb-xfbml-parse-ignore">
									<a href="https://www.facebook.com/www.prokarpaty.info/">Про Карпаты. Туры и экскурсии по Закарпатью и в Европу</a>
								</blockquote>
							</div>
						</div><!-- /.row -->
						<div class="row">
							<?php if ( is_active_sidebar( 'footer_second_col' ) ) : ?>
								<div  class=" widgetContainer" role="complementary">
									<?php dynamic_sidebar( 'footer_second_col' ); ?>
								</div><!-- #primary-sidebar -->
							<?php endif; ?>
						</div><!-- /.row -->
					
                    </div><!-- /.col -->
                    <div class="col-lg-3 col-md-6 widget__col">
					   <?php get_search_form( true ); ?>
                    </div><!-- /.col -->
                    <div class="col-lg-3 col-md-6 widget__col">
                        dfd 4
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.mainFooter__widget -->
        <div class="mainFooter__copyRight copyRight">
            <div class="container">
                <div class="row">
                    <div class="copyRight__text">
						© 2008-<?php echo date('Y'); echo __(' Все права защищены', 'prokarpaty'); ?>
                    </div><!-- /.copyRight__text -->
                </div><!-- /.row center -->
            </div><!-- /.container -->
        </div><!-- /.mainFooter__copyRight -->
        
    </footer><!-- /.mainFooter -->

	<?php wp_footer(); ?>
   
</body>
</html>