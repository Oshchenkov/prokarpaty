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

<main id="main" class="mainContainer">

    <?php
    if (ICL_LANGUAGE_CODE == 'ru') {
        $post = get_post(115);
    } elseif (ICL_LANGUAGE_CODE == 'uk') {
        $post = get_post(5702);
    } else {
        $post = get_post(115);
    } 
    
    
    $category = get_category( get_query_var( 'cat' ) );
    $cat_id = $category->cat_ID;
    
    echo $cat_id;
    echo '<br>';
    
    if ( $cat_id == 40){
        $cat_hero_img = the_field('slider_image_tours');
        echo $cat_hero_img;
    } elseif ($cat_id == 113) {
        $cat_hero_img = the_field('slider_image_exs');
        echo $cat_hero_img;
    } else {
        # code...
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
    <div class="container-fluid catHero">
        <!-- <img src="<?php the_field('slider_image_exs'); ?>" alt="catHero__img" class="catHero__img"> -->
        <img src="https://prokarpaty-tour.info/wp-content/uploads/ekskursiiї.jpg" alt="catHero__img" class="catHero__img">
        <div class=" catHero__container">
            <div class="container">
                <div class="catHero__title">
                    <?php the_field('ecs_head_slider_row1'); ?>
                </div><!-- /.catHero__title -->
                <div class="catHero__desc">
                    <?php the_field('ecs_head_slider_row2'); ?>
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

        <h1 class="container tur-our-exc-title">
        <span class="tur-our-exc-title-red"><?php echo __('ТУРЫ', 'prokarpaty'); ?> </span>
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
            'category'        => '40',
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
                <?php $category_link1 = get_category_link('40'); ?>

                <a href="<?php echo $category_link1; ?>"><span>Все Туры</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                <a href="<?php echo $category_link1; ?>?tag=novogodnie-tury"><span>Новогодние туры</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                <a href="<?php echo $category_link1; ?>?tag=gornolujnue"><span>Горнолыжные туры</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                <a href="<?php echo $category_link1; ?>?tag=majskie-turu"><span>Майские туры</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                <a href="<?php echo $category_link1; ?>?tag=vyhodnogo-dnya"><span>Туры выходного дня</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                <a href="<?php echo $category_link1; ?>?tag=degustatsionye-tury"><span>Дегустационные туры</span></a>
            </p>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="tur-content-our-exc-block">
                    <div class="row">


                        <?php $i = 0; ?>
                        <?php query_posts('posts_per_page=100&cat=40&tag=' . $tag); ?>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <?php if (in_category('40')) { ?>

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
                    </div><!-- /.row -->
                </div>
            </div>
        </div>

    </div><!-- /.categoryFilter -->

    <div class=" separatorImg"></div>
    <div class="container-fluid">
        <?php
        $my_post_obj = get_post(7138); // ID поста, seo_text in footer of the category
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