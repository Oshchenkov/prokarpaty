<?php
/*
*  Template Name: Шаблон страницы "Контакты-ужгород"
*
* @package prokarpaty
*
*/

get_header();

while (have_posts()) :
    the_post();
    $postID = get_the_ID();
endwhile;
$post = get_post($postID);

$postID = get_the_ID();
?>

<main <?php echo 'id="page-id-' .  $postID  . '"' ?> class="mainContainer contactPage">

    <div class="container-fluid catHero d-none d-lg-block">
        <?php
        if (ICL_LANGUAGE_CODE == 'ru') {
            $post = get_post(115);             // the_field from post (ACF)
        } elseif (ICL_LANGUAGE_CODE == 'uk') {
            $post = get_post(5702);
        } else {
            $post = get_post(115);
        }
        ?>
        <img src="<?php the_field('slider_image_contact'); ?>" alt="catHero__img" class="catHero__img">
        <!-- <img src="https://prokarpaty-tour.info/wp-content/uploads/ekskursiiї.jpg" alt="catHero__img" class="catHero__img"> -->
        <div class=" catHero__container">
            <div class="container">
                <div class="catHero__title">
                    <?php the_field('contacts_head_slider_row1'); ?>
                </div><!-- /.catHero__title -->
                <div class="catHero__desc">
                    <?php the_field('contacts_head_slider_row2'); ?>
                </div><!-- /.catHero__desc -->
            </div><!-- /.container -->
        </div><!-- /. -->
    </div><!-- /.container-fluid catHero -->
    <div class="container-fluid">
        <div class="container">
            <div class="breadcrumbWPML-nav">
                <?php do_action('icl_navigation_breadcrumb', ['separator']); ?>
            </div><!-- /.breadcrumbWPML-nav -->
        </div>
    </div>

    <div class="container">
        <h1 class="container  tur-our-exc-title mt-5">
            <?php echo __('НАШИ', 'prokarpaty'); ?><span class="tur-our-exc-title-red"> <?php echo __('КОНТАКТЫ', 'prokarpaty'); ?></span>
        </h1>
    </div><!-- /.container -->
    <div class="container d-none d-sm-block">
        <?php
        if (ICL_LANGUAGE_CODE == 'ru') {
            $post = get_post(222);             // the_field from post (ACF)
        } elseif (ICL_LANGUAGE_CODE == 'uk') {
            $post = get_post(5722);
        } else {
            $post = get_post(222);
        }
        ?>
        <div class="row tur-contacts-content-map mb-5">
            <div class="col-lg-12">
                <img src="<?php the_field('contacts_map'); ?>" class="img-responsive" alt="map">
                <div class="tur-contacts-content-map-on-block">
                    <div class="row tur-contacts-content-map-on-block-text">
                        <div class="row tur-contacts-map-on-block-text-margin">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                <img src="/wp-content/themes/prokarpaty/images/tur-contacts-adress.png" alt="adress">
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                <p class="tur-contacts-adress"><?php the_field('contacts_adress'); ?></p>
                            </div>
                        </div>
                        <div class="row tur-contacts-map-on-block-text-margin">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                <img src="/wp-content/themes/prokarpaty/images/tur-contacts-mail.png" alt="mail">
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                <p class="tur-contacts-adress"><?php the_field('contacts_email'); ?></p>
                            </div>
                        </div>
                        <div class="row tur-contacts-map-on-block-text-margin">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                <img src="/wp-content/themes/prokarpaty/images/tur-contacts-skype.png" alt="skype">
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                <p class="tur-contacts-adress"><?php the_field('contacts_skype'); ?></p>
                            </div>
                        </div>
                        <div class="row tur-contacts-map-on-block-text-margin">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                <img src="/wp-content/themes/prokarpaty/images/tur-contacts-tel.png" alt="tel">
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                <p class="tur-contacts-adress"><?php the_field('contacts_tels'); ?></p>
                            </div>
                        </div>
                        <div class="row tur-contacts-map-on-block-text-margin">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                <button class="btn btn-danger tur-contacts-map-btn" type="button" data-toggle="modal" data-target=".bs-example-modal-sm2"><?php echo __('ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК', 'prokarpaty'); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->

    <div class="container tur-head-form-all2 mb-5 ">
        <div class="row tur-head-form-title">
            <?php echo __('ОСТАВЬТЕ ЗАЯВКУ, НАШИ МЕНЕДЖЕРЫ СВЯЖУТСЯ С ВАМИ В КОРОТКОЕ ВРЕМЯ', 'prokarpaty'); ?>
        </div>
        <div class="row tur-head-form">
            <?php if (is_active_sidebar('front_top_cf')) : ?>
                <?php dynamic_sidebar('front_top_cf'); ?>
            <?php endif; ?>
        </div>
    </div>


    <div class="workTime d-none d-sm-block">
        <div class="container ">
            <p class="tur-contacts-grafik-title"><?php echo __('График работы', 'prokarpaty'); ?></p>
        </div>
        <div class="container">
            <?php $post = get_post('313'); ?>
            <div class="row">
                <div class="col tur-content-near-exc-col tur-about-days-block">
                    <div class="tur-contacts-day-block">
                        <p><?php echo __('Понедельник', 'prokarpaty'); ?></p>
                    </div>
                    <div class="tur-content-near-exc-desc">
                        <p class="tur-contacts-grafik-time"><?php the_field('grafik1'); ?></p>
                    </div>
                </div>
                <div class="col tur-content-near-exc-col tur-about-days-block">
                    <div class="tur-contacts-day-block">
                        <p><?php echo __('Вторник', 'prokarpaty'); ?></p>
                    </div>
                    <div class="tur-content-near-exc-desc">
                        <p class="tur-contacts-grafik-time"><?php the_field('grafik2'); ?></p>
                    </div>
                </div>
                <div class="col tur-content-near-exc-col tur-about-days-block">
                    <div class="tur-contacts-day-block">
                        <p><?php echo __('Среда', 'prokarpaty'); ?></p>
                    </div>
                    <div class="tur-content-near-exc-desc">
                        <p class="tur-contacts-grafik-time"><?php the_field('grafik3'); ?></p>
                    </div>
                </div>
                <div class="col tur-content-near-exc-col tur-about-days-block">
                    <div class="tur-contacts-day-block">
                        <p><?php echo __('Четверг', 'prokarpaty'); ?></p>
                    </div>
                    <div class="tur-content-near-exc-desc">
                        <p class="tur-contacts-grafik-time"><?php the_field('grafik4'); ?></p>
                    </div>
                </div>
                <div class="col tur-content-near-exc-col tur-about-days-block">
                    <div class="tur-contacts-day-block">
                        <p><?php echo __('Пятница', 'prokarpaty'); ?></p>
                    </div>
                    <div class="tur-content-near-exc-desc">
                        <p class="tur-contacts-grafik-time"><?php the_field('grafik5'); ?></p>
                    </div>
                </div>
                <div class="col tur-content-near-exc-col tur-about-days-block">
                    <div class="tur-contacts-day-block-red">
                        <p><?php echo __('Суббота', 'prokarpaty'); ?></p>
                    </div>
                    <div class="tur-content-near-exc-desc">
                        <p class="tur-contacts-grafik-time-red"><?php the_field('grafik6'); ?></p>
                    </div>
                </div>
                <div class="col tur-content-near-exc-col tur-about-days-block">
                    <div class="tur-contacts-day-block-red">
                        <p><?php echo __('Воскресенье', 'prokarpaty'); ?></p>
                    </div>
                    <div class="tur-content-near-exc-desc">
                        <p class="tur-contacts-grafik-time-red"><?php the_field('grafik7'); ?></p>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.workTime -->


    <div class="container-fluid">
        <div class="container">
            <div class="breadcrumbWPML-nav">
                <?php do_action('icl_navigation_breadcrumb', ['separator']); ?>
            </div><!-- /.breadcrumbWPML-nav -->
        </div>
    </div>


</main><!-- #main -->

<?php
get_footer();
?>