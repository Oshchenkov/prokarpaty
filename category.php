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
    if (ICL_LANGUAGE_CODE == 'ru') {
        $post = get_post(115); // Главный слайдер на всех страницах
    } elseif (ICL_LANGUAGE_CODE == 'uk') {
        $post = get_post(5702);
    } else {
        $post = get_post(115);
    }


    // Category id

    $category = get_category( get_query_var( 'cat' ) );
    $cat_id = $category->cat_ID;
    
    // Category Hero Block

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

    
    <div class="container-fluid catHero">
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
        <?php
        while (have_posts()) :
            the_post();
            $postID = get_the_ID();
        endwhile;
        $post = get_post($postID);
        ?>
        <div class="container">
            <div class="row tur-about-breadcrumb">
                <p class="breadcrumb"><?php the_breadcrumb(); ?></p>
            </div>
        </div>
    </div>

    <div class="container">
        <?php echo  $cat_id; ?>
    </div><!-- /.container -->

    <div class="container">

        <h1 class="container tur-our-exc-title">
            <?php echo __('Экскурсии', 'prokarpaty'); ?><span class="tur-our-exc-title-red"> <?php echo __('в Европу', 'prokarpaty'); ?></span>
        </h1>
        <div class="categoryDesc">
            <?php echo category_description(); ?>
        </div>

    </div><!-- /.container -->

    <div class="categoryFilter">
        <?php
        if (isset($_GET['tag'])) {
            $tag = $_GET['tag'];
        }
        $posts = get_posts(array(
            'numberposts'     => 100, // тоже самое что posts_per_page
            'offset'          => 0,
            'category'        => '113',
            'orderby'         => 'post_date',
            'order'           => 'DESC',
            'include'         => '',
            'exclude'         => '',
            'meta_key'        => '',
            'meta_value'      => '',
            'post_type'       => 'post',
            'post_mime_type'  => '', // image, video, video/mp4
            'post_parent'     => '',
            'post_status'     => 'publish',
            'tag' => $tag
        ));
        ?>

        <div class="container tur-ecs-filter-block" id="tur-ecs-filter-block-link">
            <p class="tur-ecs-filter-title">
                <?php $category_link1 = get_category_link('113'); ?>

                <a href="<?php echo $category_link1; ?>"><span>Все экскурсии</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                <a href="<?php echo $category_link1; ?>?tag=slovakiya"><span><?php echo __('Словакия', 'prokarpaty'); ?></span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                <a href="<?php echo $category_link1; ?>?tag=vengriya"><span><?php echo __('Венгрия', 'prokarpaty'); ?></span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                <a href="<?php echo $category_link1; ?>?tag=rumyniya"><span><?php echo __('Румыния', 'prokarpaty'); ?></span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                <a href="<?php echo $category_link1; ?>?tag=poland"><span><?php echo __('Польша', 'prokarpaty'); ?></span></a>

            </p>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="tur-content-our-exc-block">
                    <?php $i = 0; ?>
                    <?php query_posts('posts_per_page=100&cat=113&tag=' . $tag); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php if (in_category('113')) { ?>

                                <a href="<?php the_permalink(); ?>">
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="tur-content-exc">
                                        <?php } else continue; ?>
                                        <div class="tur-content-our-exc-img">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail();
                                            } ?>
                                        </div>
                                        <div class="tur-content-flag">
                                            <img src="<?php the_field('flag'); ?>" />
                                        </div>
                                        <div class="tur-content-exc-more">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-exc-more.png" alt="Подробнее">
                                            <div class="tur-content-more">
                                                <a class="tur-content-exc-more-link" href="<?php the_permalink(); ?>"><?php echo __('Подробнее', 'prokarpaty'); ?></a>
                                            </div>
                                        </div>
                                        <div class="tur-content-exc-title">
                                            <p class="tur-content-exc-nazv"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                            <p class="tur-content-exc-dlit">
                                                <?php $duration = get_field(duration); ?>
                                                <?php if ($duration != "") {
                                                    echo $duration;
                                                } ?>
                                            </p>
                                            <p class="tur-content-exc-price">
                                                <img src="/wp-content/themes/prokarpaty/images/tur-content-exc-wallet.png" alt="Wallet">
                                                <?php $price = get_field(price); ?>
                                                <?php if ($price != "") {
                                                    echo $price;
                                                } ?>
                                            </p>

                                        </div>

                                        <div class="tur-content-exc-date">
                                            <p>
                                                <span class="glyphicon glyphicon-time"></span>
                                                <?php the_field('ecs_time_start'); ?>
                                                <span> - </span>
                                                <?php the_field('ecs_time_end'); ?>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </a>

                        <?php endwhile;
                else : ?>
                        <p><?php echo __('На данный момент экскурсий нет.', 'prokarpaty'); ?></p>
                    <?php endif; ?>
                    <?php if ($i % 3 !== 0) {
                        echo '</div>';
                    } ?>
                </div>
            </div>
        </div>

    </div><!-- /.categoryFilter -->

    <div class=" separatorImg"></div>
    <div class="container-fluid">
        <?php
        $my_post_obj = get_post(8118); // ID поста, seo_text in footer of the category
        echo $my_post_obj->post_content;
        ?>
    </div>

    <div class="container">
        <div class="row tur-about-breadcrumb">
            <p class="breadcrumb"><?php the_breadcrumb(); ?></p>
        </div>
    </div>


</main><!-- #main -->

<?php
get_footer();
?>