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
	<div class="mainFooter__separatorImg separatorImg"></div>

	<div class="mainFooter__widget widget">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 widget__col 	d-none d-md-block">
					<div class="mainFooter-logo logo">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="logo__link">
							<img class="logo__link-img" src="<?php echo get_template_directory_uri(); ?>/images/tur-head-logo.png" alt="Main logo" class="logo__img">
						</a><!-- /.logo__link -->
					</div><!-- /.mainFooter-logo -->
					<?php
					wp_nav_menu(array(
						'menu'              => "footer-menu",
						'container'         => "nav",
						'container_class'   => "mainFooter-nav",
						'menu_class'        => "mainFooter-nav__ul clearfix",
						'theme_location'    => "footer-menu",
					));
					?>
				</div><!-- /.col -->
				<div class="col-lg-3 col-md-6 widget__col">
					<div class="rowFb mb-3 text-center">
						<div id="fb-root"></div>
						<script async defer crossorigin="anonymous" src="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

						<div class="fb-page" data-href="https://www.facebook.com/www.prokarpaty.info/" data-width="255" data-height="246" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
							<blockquote cite="https://www.facebook.com/www.prokarpaty.info/" class="fb-xfbml-parse-ignore">
								<a href="https://www.facebook.com/www.prokarpaty.info/">Про Карпаты. Туры и экскурсии по Закарпатью и в Европу</a>
							</blockquote>
						</div>
					</div><!-- /.row -->
					<div class="rowCont">
						<?php if (is_active_sidebar('footer_second_col')) : ?>
							<div class=" widgetContainer" role="complementary">
								<?php dynamic_sidebar('footer_second_col'); ?>
							</div><!-- #primary-sidebar -->
						<?php endif; ?>
					</div><!-- /.row -->

				</div><!-- /.col -->
				<div class="col-lg-3 col-md-6 widget__col">
					<div class="foterContact">
						<div class="foterContact__city">
							<?php _e('г.Львов:', 'prokarpaty'); ?>
						</div><!-- /.foterContact__city -->
						<div class="foterContact__st">
							<?php _e('Проспект Свободы, <br> 5 (ТЦ Плазма, 2 этаж)', 'prokarpaty'); ?>
						</div><!-- /.foterContact__st -->
						<div class="foterContact__phone">
							<a href="tel:+380672105980" class="foterContact__phone-a">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tur-footer-tel.png" alt="" class="foterContact__phone-a-img">
								<span class="operatorKod">
									+38 (067)
								</span><!-- /.operatorKod -->
								<span class="accentNumber">
									210 59 80
								</span><!-- /.accentNumber -->
							</a><!-- /.foterContact__phone-a -->
							<a href="tel:+380634036012" class="foterContact__phone-a">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tur-footer-tel.png" alt="" class="foterContact__phone-a-img">
								<span class="operatorKod">
									+38 (063)
								</span><!-- /.operatorKod -->
								<span class="accentNumber">
									403 60 12
								</span><!-- /.accentNumber -->
							</a><!-- /.foterContact__phone-a -->
						</div><!-- /.foterContact__phone -->
						<div class="foterContact__email">
							<a href="mailto:prokarpatylviv@gmail.com" class="foterContact__email-a">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tur-footer-email.png" alt="" class="foterContact__email-a-img">
								<span class="foterContact__email-a-text">
									prokarpatylviv@gmail.com
								</span><!-- /.foterContact__email-a-text -->
							</a><!-- /.foterContact__email-a -->
						</div><!-- /.foterContact__email -->
					</div><!-- /.foterContact -->
				</div><!-- /.col -->
				<div class="col-lg-3 col-md-6 widget__col">
					<div class="foterContact">
						<div class="foterContact__city">
							<?php _e('г. Ужгород:', 'prokarpaty'); ?>
						</div><!-- /.foterContact__city -->
						<div class="foterContact__st">
							<?php _e('улица Корзо, 3', 'prokarpaty'); ?>
						</div><!-- /.foterContact__st -->
						<div class="foterContact__phone">
							<a href="tel:+380997767729" class="foterContact__phone-a">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tur-footer-tel.png" alt="" class="foterContact__phone-a-img">
								<span class="operatorKod">
									+38 (099)
								</span><!-- /.operatorKod -->
								<span class="accentNumber">
									776 77 29
								</span><!-- /.accentNumber -->
							</a><!-- /.foterContact__phone-a -->
							<a href="tel:+380970345393" class="foterContact__phone-a">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tur-footer-tel.png" alt="" class="foterContact__phone-a-img">
								<span class="operatorKod">
									+38 (097)
								</span><!-- /.operatorKod -->
								<span class="accentNumber">
									034 53 93
								</span><!-- /.accentNumber -->
							</a><!-- /.foterContact__phone-a -->
							<a href="tel:+380631803113" class="foterContact__phone-a">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tur-footer-tel.png" alt="" class="foterContact__phone-a-img">
								<span class="operatorKod">
									+38 (063)
								</span><!-- /.operatorKod -->
								<span class="accentNumber">
									180 31 13
								</span><!-- /.accentNumber -->
							</a><!-- /.foterContact__phone-a -->
						</div><!-- /.foterContact__phone -->
						<div class="foterContact__email">
							<a href="mailto:prokarpaty@gmail.com" class="foterContact__email-a">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tur-footer-email.png" alt="" class="foterContact__email-a-img">
								<span class="foterContact__email-a-text">
									prokarpaty@gmail.com
								</span><!-- /.foterContact__email-a-text -->
							</a><!-- /.foterContact__email-a -->
						</div><!-- /.foterContact__email -->
					</div><!-- /.foterContact -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.mainFooter__widget -->
	<div class="mainFooter__copyRight copyRight">
		<div class="container">
			<div class="row">
				<div class="copyRight__text">
					© 2008-<?php echo date('Y');
							echo __(' Все права защищены', 'prokarpaty'); ?>
				</div><!-- /.copyRight__text -->
			</div><!-- /.row center -->
		</div><!-- /.container -->
	</div><!-- /.mainFooter__copyRight -->

	<!-- Modal Form -->
	<div class="modal fade bs-example-modal-sm2 modal-z-index" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myLargeModalLabel"><?php echo __('Заказать обратный звонок', 'EutoTour'); ?></h4>
					<div class="modal-body">
						<?php if (is_active_sidebar('modal_cf')) : ?>
							<?php dynamic_sidebar('modal_cf'); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="callBack">
		<a href="#" class="callBack__link" data-toggle="modal" data-target=".bs-example-modal-sm2">
			<i class="fas fa-phone"></i>
		</a>
	</div>
	<!-- //Modal Form -->
	<!-- Mobile nav footer -->
	<div class="contacts-media">
		<a href="tel:+380997767729" class="contacts-item contacts-tel mdi mdi-phone">
			<i class="glyphicon glyphicon-earphone"></i><!-- /.glyphicon glyphicon-earphone -->
		</a>
		<a href="mailto:prokarpaty@gmail.com" class="contacts-mail mdi mdi-email-outline contacts-item">
			<i class="glyphicon glyphicon-envelope"></i><!-- /.glyphicon glyphicon-earphone -->
		</a>
	</div>

</footer><!-- /.mainFooter -->

<?php wp_footer(); ?>

</body>

</html>