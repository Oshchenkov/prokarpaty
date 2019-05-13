<?php
/**
 * The category template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package prokarpaty
 */

get_header();
?>

<?php

    /*
    * Get the_field(ACF plugin) from post 
    */

    if (ICL_LANGUAGE_CODE == 'ru') {
        $post = get_post(115);             // the_field from post (ACF)
    } elseif (ICL_LANGUAGE_CODE == 'uk') {
        $post = get_post(5702);
    } else {
        $post = get_post(115);
    }


    // Category variables

    $category = get_category( get_query_var( 'cat' ) );
    $cat_id = $category->cat_ID;
    $category_link1 = get_category_link($cat_id);
    
    // Category Hero Block

    /* Category id (ru | uk)
    *
    * 40  | 63       tours-uzhorod
    * 113 | 112      excursions-europe
    * 52  | 71       calendar-of-tours
    * 3   | 68       excursions-uzhorod
    * 5   | 72       grafik-of-excursions-uzhorod
    * 18  | 73       active-rest-uzhorod
    * 19  | 83       services
    * 4   | 82       articles
    * 7   | 64       reviews
    * 
    */

    if ( ($cat_id == 113) || ($cat_id == 64) || ($cat_id == 68)|| ($cat_id == 82) || ($cat_id == 112) || ($cat_id == 799) ){
        $cat_hero_img   = 'slider_image_exs';
        $cat_hero_title = 'ecs_head_slider_row1';
        $cat_hero_desc  = 'ecs_head_slider_row2';
    } 
    elseif ( ($cat_id == 40) || ($cat_id == 63) ) {
        $cat_hero_img   = 'slider_image_tours';
        $cat_hero_title = 'tours_head_slider_row1';
        $cat_hero_desc  = 'tours_head_slider_row2';
    } 
    elseif ( ($cat_id == 71) || ($cat_id == 52) ){
        $cat_hero_img   = 'slider_image_tours_cal';
        $cat_hero_title = 'tours_cal_head_slider_row1';
        $cat_hero_desc  = 'tours_cal_head_slider_row2';
    } 
    elseif ( ($cat_id == 5) || ($cat_id == 72) ) {
        $cat_hero_img   = 'slider_image_calendar';
        $cat_hero_title = 'calendar_head_slider_row1';
        $cat_hero_desc  = 'calendar_head_slider_row2';
    } 
    elseif ( ($cat_id == 73) || ($cat_id == 18) ) {
        $cat_hero_img   = 'slider_image_rest';
        $cat_hero_title = 'rest_head_slider_row1';
        $cat_hero_desc  = 'rest_head_slider_row2';
    } 
    elseif  ( ($cat_id == 83) || ($cat_id == 19) ) {
        $cat_hero_img   = 'slider_image_uslugi';
        $cat_hero_title = 'service_head_slider_row1';
        $cat_hero_desc  = 'service_head_slider_row2';
    } 
    else {
        $cat_hero_img   = 'slider_image_exs';
        $cat_hero_title = 'ecs_head_slider_row1';
        $cat_hero_desc  = 'ecs_head_slider_row2';
    }
    
    
    
?>

<main <?php echo 'id="category-id-' .  $cat_id  . '"' ?> class="mainContainer">

    <div class="container-fluid catHero d-none d-lg-block">
        <img src="<?php  the_field($cat_hero_img); ?>" alt="catHero__img" class="catHero__img">
        <!-- <img src="https://prokarpaty-tour.info/wp-content/uploads/ekskursiiї.jpg" alt="catHero__img" class="catHero__img"> -->
        <div class=" catHero__container">
            <div class="container">
                <div class="catHero__title">
                    <?php  the_field($cat_hero_title); ?>
                    
                </div><!-- /.catHero__title -->
                <div class="catHero__desc">
                    <?php  the_field($cat_hero_desc); ?>
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
        <?php if( ($cat_id == 113) || ($cat_id == 112) ){
            echo '
            <h1 class="container tur-our-exc-title">' . __("Экскурсии", "prokarpaty") . '
            <span class="tur-our-exc-title-red">'. __("в Европу", "prokarpaty") . '</span>
            </h1>
            ';
        } 
        elseif ( ($cat_id == 40) || ($cat_id == 63) ) {
            echo '
            <h1 class="container tur-our-exc-title">
            <span class="tur-our-exc-title-red">'. __("ТУРЫ", "prokarpaty") . '</span>
            </h1>
            ';
        }
        elseif ( ($cat_id == 52) || ($cat_id == 71) ){
            echo '
            <h1 class="container tur-our-exc-title">' . __("Календарь", "prokarpaty") . '
            <span class="tur-our-exc-title-red">'. __("туров", "prokarpaty") . '</span>
            </h1>
            ';
        }
        elseif ( ($cat_id == 3) || ($cat_id == 68) ){
            echo '
            <h1 class="container tur-our-exc-title">' . __("НАШИ", "prokarpaty") . '
            <span class="tur-our-exc-title-red">'. __("ЭКСКУРСИИ", "prokarpaty") . '</span>
            </h1>
            ';
        }
        elseif ( ($cat_id == 5) || ($cat_id == 72) ){
            echo '
            <h1 class="container tur-our-exc-title">' . __("ГРАФИК", "prokarpaty") . '
            <span class="tur-our-exc-title-red">'. __("ЭКСКУРСИЙ", "prokarpaty") . '</span>
            </h1>
            ';
        }
        elseif ( ($cat_id == 18) || ($cat_id == 73) ){
            echo '
            <h1 class="container tur-our-exc-title">' . __("АКТИВНЫЙ", "prokarpaty") . '
            <span class="tur-our-exc-title-red">'. __("ОТДЫХ", "prokarpaty") . '</span>
            </h1>
            ';
        }
        elseif ( ($cat_id == 19) || ($cat_id == 83) ){
            echo '
            <h1 class="container tur-our-exc-title">' . __("НАШИ", "prokarpaty") . '
            <span class="tur-our-exc-title-red">'. __("УСЛУГИ", "prokarpaty") . '</span>
            </h1>
            ';
        }
        elseif ( ($cat_id == 4) || ($cat_id == 82) ){
            echo '
            <h1 class="container tur-our-exc-title">' . __("СТАТЬИ", "prokarpaty") . '
            <span class="tur-our-exc-title-red">'. __("О ТУРИЗМЕ В КАРПАТАХ", "prokarpaty") . '</span>
            </h1>
            ';
        }
        elseif ( ($cat_id == 7) || ($cat_id == 64) ){
            echo '
            <h1 class="container tur-our-exc-title">' . __("ОТЗЫВЫ", "prokarpaty") . '
            <span class="tur-our-exc-title-red">'. __("ТУРИСТОВ", "prokarpaty") . '</span>
            </h1>
            ';
        }
        else{
            echo '
            <h1 class="container tur-our-exc-title">' .  get_cat_name( $cat_id  ) . '
            </h1>
            ';
        }
        ?>
        
        <div class="categoryDesc">
            <?php echo category_description(); ?>
        </div>

    </div><!-- /.container -->

    <?php

        if ( ($cat_id == 52) || ($cat_id == 71) ){
            include(get_template_directory() .'/category-calendar.php');
        }
        elseif ( ($cat_id == 5) || ($cat_id == 72) ){
            include(get_template_directory() .'/category-graf.php');
        }
        elseif ( ($cat_id == 19) || ($cat_id == 83) ){
            include(get_template_directory() .'/category-servicesCont.php');
        }
        elseif ( ($cat_id == 4) || ($cat_id == 82) ){
            include(get_template_directory() .'/category-articlesCont.php');
        }
        elseif ( ($cat_id == 7) || ($cat_id == 64) ){
            include(get_template_directory() .'/category-reviewsCont.php');
        }
        else{
            include(get_template_directory() .'/category-default.php');
        }
    ?>

    <?php 
    // excursions-europe
    if ($cat_id == 113){
        $my_post_obj = get_post(8118); // ID поста, seo_text in footer of the category
        echo '
        <div class=" separatorImg"></div>
        <div class="container-fluid">'
            . $my_post_obj->post_content .
        '</div>
        ';
    }
    elseif ($cat_id == 112){
        $my_post_obj = get_post(8121); // ID поста, seo_text in footer of the category
        echo '
        <div class=" separatorImg"></div>
        <div class="container-fluid">'
            . $my_post_obj->post_content .
        '</div>
        ';
    }
    // tours-uzhorod
    elseif ($cat_id == 40){
        $my_post_obj = get_post(7138); // ID поста, seo_text in footer of the category
        echo '
        <div class=" separatorImg"></div>
        <div class="container-fluid">'
            . $my_post_obj->post_content .
        '</div>
        ';
    }
    elseif ($cat_id == 63){
        $my_post_obj = get_post(7136); // ID поста, seo_text in footer of the category
        echo '
        <div class=" separatorImg"></div>
        <div class="container-fluid">'
            . $my_post_obj->post_content .
        '</div>
        ';
    }
    // tours-uzhorod
    elseif ($cat_id == 3){
        $my_post_obj = get_post(2570); // ID поста, seo_text in footer of the category
        echo '
        <div class=" separatorImg"></div>
        <div class="container-fluid">'
            . $my_post_obj->post_content .
        '</div>
        ';
    }
    elseif ($cat_id == 68){
        $my_post_obj = get_post(6275); // ID поста, seo_text in footer of the category
        echo '
        <div class=" separatorImg"></div>
        <div class="container-fluid">'
            . $my_post_obj->post_content .
        '</div>
        ';
    }
    // active-rest-uzhorod
    elseif ($cat_id == 18){
        $my_post_obj = get_post(2566); // ID поста, seo_text in footer of the category
        echo '
        <div class=" separatorImg"></div>
        <div class="container-fluid">'
            . $my_post_obj->post_content .
        '</div>
        ';
    }
    elseif ($cat_id == 73){
        $my_post_obj = get_post(5663); // ID поста, seo_text in footer of the category
        echo '
        <div class=" separatorImg"></div>
        <div class="container-fluid">'
            . $my_post_obj->post_content .
        '</div>
        ';
    }
    ?>
    

    <div class="container">
        <div class="row tur-about-breadcrumb">
            <p class="breadcrumb"><?php the_breadcrumb(); ?></p>
        </div>
    </div>


</main><!-- #main -->

<?php
get_footer();
?>