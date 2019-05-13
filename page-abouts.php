<?php
/*
*  Template Name: Шаблон страницы "About"
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

<main <?php echo 'id="page-id-' .  $postID  . '"' ?> class="mainContainer ">

    <div class="about">
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
            <img src="<?php the_field('slider_image_o_kompanii'); ?>" alt="catHero__img" class="catHero__img">
            <!-- <img src="https://prokarpaty-tour.info/wp-content/uploads/ekskursiiї.jpg" alt="catHero__img" class="catHero__img"> -->
            <div class=" catHero__container">
                <div class="container">
                    <div class="catHero__title">
                        <?php the_field('about_head_slider_row1'); ?>
                    </div><!-- /.catHero__title -->
                    <div class="catHero__desc">
                        <?php the_field('about_head_slider_row2'); ?>
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

        <?php $post = get_post(229) ?>
        <h1 class="container tur-our-exc-title mt-5">
            <span class="tur-our-exc-title-red"><?php echo __('О', 'EutoTour'); ?> </span><?php echo __('КОМПАНИИ', 'EutoTour'); ?></h1>
        <div class="container tur-about-hello"><?php the_field('about_hello'); ?></div>
        <div class="container-fluid tur-about-line">
            <div class="row"></div>
        </div>
        <div class="container">
            <p class="tur-about-between-line"><?php the_field('about_title_block1'); ?></p>
        </div>
        <div class="container-fluid tur-about-line">
            <div class="row"></div>
        </div>
        <div class="container">
            <p class="tur-about-desc-with-slider"><?php the_field('about_block1_before'); ?></p>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div id="tur-about-slider2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col tur-about-slider-width">
                                        <img src="<?php the_field('about_slide1'); ?>" alt="slide1">
                                    </div>
                                    <div class="col tur-about-slider-width">
                                        <img src="<?php the_field('about_slide2'); ?>" alt="slide2">
                                    </div>
                                    <div class="col tur-about-slider-width">
                                        <img src="<?php the_field('about_slide3'); ?>" alt="slide3">
                                    </div>
                                    <div class="col tur-about-slider-width">
                                        <img src="<?php the_field('about_slide4'); ?>" alt="slide4">
                                    </div>
                                    <div class="col">
                                        <img src="<?php the_field('about_slide5'); ?>" alt="slide5">
                                    </div>
                                </div><!-- /.row -->
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col tur-about-slider-width">
                                        <img src="<?php the_field('about_slide6'); ?>" alt="slide6">
                                    </div>
                                    <div class="col tur-about-slider-width">
                                        <img src="<?php the_field('about_slide7'); ?>" alt="slide7">
                                    </div>
                                    <div class="col tur-about-slider-width">
                                        <img src="<?php the_field('about_slide8'); ?>" alt="slide8">
                                    </div>
                                    <div class="col tur-about-slider-width">
                                        <img src="<?php the_field('about_slide9'); ?>" alt="slide9">
                                    </div>
                                    <div class="col">
                                        <img src="<?php the_field('about_slide10'); ?>" alt="slide10">
                                    </div>
                                </div><!-- /.row -->
                            </div>
                        </div>
                        <a class="left carousel-control" href="#tur-about-slider2" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left tur-about-slider-glyphicon-grey" aria-hidden="true"></span>
                            <span class="sr-only"><?php echo __('Предыдущий', 'EutoTour'); ?></span>
                        </a>
                        <a class="right carousel-control" href="#tur-about-slider2" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right tur-about-slider-glyphicon-grey" aria-hidden="true"></span>
                            <span class="sr-only"><?php echo __('Следующий', 'EutoTour'); ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <br>
            <p class="tur-about-desc-with-slider"><?php the_field('about_block1_after'); ?></p>
        </div>
        <div class="container-fluid tur-about-line">
            <div class="row"></div>
        </div>
        <div class="container">
            <p class="tur-about-between-line"><?php the_field('about_title_block2'); ?></p>
        </div>
        <div class="container-fluid tur-about-line">
            <div class="row"></div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row tur-about-content-part-margin">
                    <div class="col-lg-3 tur-about-content-part-img-block">
                        <img src="<?php the_field('about_img1'); ?>" alt="part1">
                        <div class="tur-about-part-img-on-block">
                            <p class="tur-about-part-img-on-dig">1</p>
                        </div>
                    </div>
                    <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('about_feature1'); ?></div>
                </div>
                <div class="row tur-about-content-part-margin">
                    <div class="col-lg-3 tur-about-content-part-img-block">
                        <img src="<?php the_field('about_img2'); ?>" alt="part2">
                        <div class="tur-about-part-img-on-block">
                            <p class="tur-about-part-img-on-dig">2</p>
                        </div>
                    </div>
                    <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('about_feature2'); ?></div>
                </div>
                <div class="row tur-about-content-part-margin">
                    <div class="col-lg-3 tur-about-content-part-img-block">
                        <img src="<?php the_field('about_img3'); ?>" alt="part3">
                        <div class="tur-about-part-img-on-block">
                            <p class="tur-about-part-img-on-dig">3</p>
                        </div>
                    </div>
                    <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('about_feature3'); ?></div>
                </div>
                <div class="row tur-about-content-part-margin">
                    <div class="col-lg-3 tur-about-content-part-img-block">
                        <img src="<?php the_field('about_img4'); ?>" alt="part4">
                        <div class="tur-about-part-img-on-block">
                            <p class="tur-about-part-img-on-dig">4</p>
                        </div>
                    </div>
                    <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('about_feature4'); ?></div>
                </div>
                <div class="row tur-about-content-part-margin">
                    <div class="col-lg-3 tur-about-content-part-img-block">
                        <img src="<?php the_field('about_img5'); ?>" alt="part5">
                        <div class="tur-about-part-img-on-block">
                            <p class="tur-about-part-img-on-dig">5</p>
                        </div>
                    </div>
                    <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('about_feature5'); ?></div>
                </div>
                <div class="row tur-about-content-part-margin">
                    <div class="col-lg-3 tur-about-content-part-img-block">
                        <img src="<?php the_field('about_img6'); ?>" alt="part6">
                        <div class="tur-about-part-img-on-block">
                            <p class="tur-about-part-img-on-dig">6</p>
                        </div>
                    </div>
                    <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('about_feature6'); ?></div>
                </div>
                <div class="row tur-about-content-part-margin">
                    <div class="col-lg-3 tur-about-content-part-img-block">
                        <img src="<?php the_field('about_img7'); ?>" alt="part7">
                        <div class="tur-about-part-img-on-block">
                            <p class="tur-about-part-img-on-dig">7</p>
                        </div>
                    </div>
                    <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('about_feature7'); ?></div>
                </div>
            </div>
        </div>
        <div class="container-fluid tur-about-line">
            <div class="row"></div>
        </div>
        <div class="container">
            <p class="tur-about-between-line"><?php the_field('about_title_block3'); ?></p>
        </div>
        <div class="container-fluid tur-about-line">
            <div class="row"></div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row tur-about-content-why-block-margin">
                            <div class="col-lg-2">
                                <img src="/wp-content/themes/eurotourtheme3/images/tur-about-content-why.png" alt="why">
                            </div>
                            <div class="col-lg-10">
                                <p class="tur-about-content-why-text"><?php the_field('about_why1'); ?></p>
                            </div>
                        </div>
                        <div class="row tur-about-content-why-block-margin">
                            <div class="col-lg-2">
                                <img src="/wp-content/themes/eurotourtheme3/images/tur-about-content-why.png" alt="why">
                            </div>
                            <div class="col-lg-10">
                                <p class="tur-about-content-why-text"><?php the_field('about_why2'); ?></p>
                            </div>
                        </div>
                        <div class="row tur-about-content-why-block-margin">
                            <div class="col-lg-2">
                                <img src="/wp-content/themes/eurotourtheme3/images/tur-about-content-why.png" alt="why">
                            </div>
                            <div class="col-lg-10">
                                <p class="tur-about-content-why-text"><?php the_field('about_why3'); ?></p>
                            </div>
                        </div>
                        <div class="row tur-about-content-why-block-margin">
                            <div class="col-lg-2">
                                <img src="/wp-content/themes/eurotourtheme3/images/tur-about-content-why.png" alt="why">
                            </div>
                            <div class="col-lg-10">
                                <p class="tur-about-content-why-text"><?php the_field('about_why4'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row tur-about-content-why-block-margin">
                            <div class="col-lg-2">
                                <img src="/wp-content/themes/eurotourtheme3/images/tur-about-content-why.png" alt="why">
                            </div>
                            <div class="col-lg-10">
                                <p class="tur-about-content-why-text"><?php the_field('about_why5'); ?></p>
                            </div>
                        </div>
                        <div class="row tur-about-content-why-block-margin">
                            <div class="col-lg-2">
                                <img src="/wp-content/themes/eurotourtheme3/images/tur-about-content-why.png" alt="why">
                            </div>
                            <div class="col-lg-10">
                                <p class="tur-about-content-why-text"><?php the_field('about_why6'); ?></p>
                            </div>
                        </div>
                        <div class="row tur-about-content-why-block-margin">
                            <div class="col-lg-2">
                                <img src="/wp-content/themes/eurotourtheme3/images/tur-about-content-why.png" alt="why">
                            </div>
                            <div class="col-lg-10">
                                <p class="tur-about-content-why-text"><?php the_field('about_why7'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid tur-about-line">
            <div class="row"></div>
        </div>
        <div class="container">
            <p class="tur-about-between-line"><?php the_field('about_title_block4'); ?></p>
        </div>
        <div class="container-fluid tur-about-line">
            <div class="row"></div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="<?php the_field('about_foto1'); ?>" alt="foto">
                            </div>
                            <div class="col-lg-6">
                                <p class="tur-about-name"><?php the_field('about_name1'); ?></p>
                                <p class="tur-about-dolzhn"><?php the_field('about_dolzhn1'); ?></p>
                                <p class="tur-about-tel"><?php the_field('about_tel1'); ?></p>
                            </div>
                        </div><!-- /.row -->
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="<?php the_field('about_foto2'); ?>" alt="foto">
                            </div>
                            <div class="col-lg-6">
                                <p class="tur-about-name"><?php the_field('about_name2'); ?></p>
                                <p class="tur-about-dolzhn"><?php the_field('about_dolzhn2'); ?></p>
                                <p class="tur-about-tel"><?php the_field('about_tel2'); ?></p>
                            </div>
                        </div><!-- /.row -->
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="<?php the_field('about_foto3'); ?>" alt="foto">
                            </div>
                            <div class="col-lg-6">
                                <p class="tur-about-name"><?php the_field('about_name3'); ?></p>
                                <p class="tur-about-dolzhn"><?php the_field('about_dolzhn3'); ?></p>
                                <p class="tur-about-tel"><?php the_field('about_tel3'); ?></p>
                            </div>
                        </div><!-- /.row -->
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="<?php the_field('about_foto4'); ?>" alt="foto">
                            </div>
                            <div class="col-lg-6">
                                <p class="tur-about-name"><?php the_field('about_name4'); ?></p>
                                <p class="tur-about-dolzhn"><?php the_field('about_dolzhn4'); ?></p>
                                <p class="tur-about-tel"><?php the_field('about_tel4'); ?></p>
                            </div>
                        </div><!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid tur-about-line">
            <div class="row"></div>
        </div>
        <div class="container">
            <p class="tur-about-between-line"><?php the_field('about_title_block5'); ?></p>
        </div>
        <div class="container-fluid tur-about-line">
            <div class="row"></div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row tur-about-content-why2-margin">
                    <div class="col-lg-1">
                        <img src="/wp-content/themes/eurotourtheme3/images/tur-about-content-why2.png" alt="why2">
                    </div>
                    <div class="col-lg-11">
                        <p class="tur-about-content-why2-text"><?php the_field('about_block4_1'); ?></p>
                    </div>
                </div>
                <div class="row tur-about-content-why2-margin">
                    <div class="col-lg-1">
                        <img src="/wp-content/themes/eurotourtheme3/images/tur-about-content-why2.png" alt="why2">
                    </div>
                    <div class="col-lg-11">
                        <p class="tur-about-content-why2-text"><?php the_field('about_block4_2'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid tur-about-line">
            <div class="row"></div>
        </div>
        <div class="container">
            <p class="tur-about-between-line"><?php the_field('about_title_block6'); ?></p>
        </div>
        <div class="container-fluid tur-about-line">
            <div class="row"></div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="breadcrumbWPML-nav">
                    <?php do_action('icl_navigation_breadcrumb', ['separator']); ?>
                </div><!-- /.breadcrumbWPML-nav -->
            </div>
        </div>
    </div><!-- /.about -->
</main><!-- #main -->

<?php
get_footer();
?>