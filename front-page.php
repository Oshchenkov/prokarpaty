<?php
/**
 * The Front page template file
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
    <div class="container-fluid heroImage">
        <?php
        if (ICL_LANGUAGE_CODE=='ru') {
            $post = get_post(115); 
        } elseif (ICL_LANGUAGE_CODE=='uk') {
            $post = get_post(5702);
        } else {
            $post = get_post(115); 
        }?>
        <div class="heroImageBlock">
            <div class="container">
                <h1 class="heroImageBlock__title">
                    <?php the_field('main_head_slider_row1'); ?>
                </h1><!-- /.heroImageBlock__title -->
                <div class="heroImageBlock__desc">
                    <?php the_field('main_head_slider_row2'); ?>
                </div><!-- /.heroImageBlock__desc -->
            </div><!-- /.container -->
        </div><!-- /.heroImageBlock -->
    </div><!-- /.container-fluid heroImage -->

    <div class="container">
        <!-- <?php
        get_header();
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        else :
            _e( 'Sorry, no posts matched your criteria.', 'prokarpaty' );
        endif;
        ?>  -->
    </div><!-- /.container -->

    <div class="separatorImg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/tur-content-hr2.png" alt="">
    </div><!-- /.separatorImg -->

    <div class="container tur-our-exc-title">
        <span class="tur-our-exc-title-red"><?php echo __('СТАТЬИ', 'EutoTour'); ?> </span><?php echo __('О ТУРИЗМЕ В КАРПАТАХ', 'EutoTour'); ?>
    </div>
    <div class="container-fluid">
        <div class="container news" >
            <div class="row">
                <?php query_posts('posts_per_page=3&cat=4') || query_posts('posts_per_page=3&cat=82'); ?>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php if ( in_category('4')||in_category('82') ) { ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 tur-content-news">
                    <?php } else continue; ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="col-lg-5 col-md-7 col-sm-3 col-xs-4 tur-content-news-image">
                            <div class="tur-content-news-img">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                            </div>
                            <div class="tur-content-news-date">
                                <img src="/wp-content/themes/prokarpaty/images/tur-content-news-date.png" alt="Дата">
                                <span class="tur-content-news-date2"><span class="glyphicon glyphicon-time"></span> <?php the_time('d.m'); ?></span>
                            </div>
                        </div>
                    </a>
                    <div class="col-lg-7 col-md-5 col-sm-9 col-xs-8 tur-content-news-title-and-short">
                        <div class="tur-content-news-title">
                            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                        </div>
                        <div class="tur-content-news-short">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <div class="tur-content-news-more visible-lg visible-md">
                        <a href="<?php the_permalink(); ?>"><?php echo __('Подробнее..', 'EutoTour'); ?></a>
                    </div>
                </div>
                <?php endwhile; else: ?>
                    <p><?php echo __('На данный момент новостей нет.', 'EutoTour'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container tur-content-ext-view-all text-center">
        <a href="<?php 
                    if (ICL_LANGUAGE_CODE=='ru') {
                        echo get_category_link('4');
                    } else {
                        echo get_category_link('82');
                    } 
                ?>">
            <button class="btn btn-danger tur-content-ext-view-all-btn" type="submit">
                <?php echo __('Смотреть все статьи', 'EutoTour'); ?>
            </button>
        </a>
    </div>
    <div class="separatorImg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/tur-content-hr2.png" alt="">
    </div><!-- /.separatorImg -->
    <div class="container-fluid">
        <?php
        if (ICL_LANGUAGE_CODE=='ru') {
            $my_post_obj = get_post(4); 
        } elseif (ICL_LANGUAGE_CODE=='uk') {
            $my_post_obj = get_post(6261);
        } else {
            $my_post_obj = get_post(4); 
        }
        echo $my_post_obj->post_content;
        ?>
    </div><!-- /.container-fluid -->

</main><!-- #main -->

<?php
get_footer();
?>