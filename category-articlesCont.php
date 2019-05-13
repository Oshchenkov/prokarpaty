<div class="articles">
    <?php
    while (have_posts()) :
        the_post();
        $postID = get_the_ID();
    endwhile;
    $post = get_post($postID);
    ?>
    <div class="container-fluid ">
        <div class="container">
            <? $page = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
            <?php query_posts('posts_per_page=6&cat=4&paged=' . $page); ?>

            <?php
            if ($_COOKIE['_icl_current_language'] == 'ru')
                query_posts('posts_per_page=6&cat=4&paged=' . $page);
            else
                query_posts('posts_per_page=6&cat=82&paged=' . $page);
            ?>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php if (in_category('4' || '82')) { ?>

                        <div class="row articles__row">
                            <div class="col-lg-2 tur-news-content-img-block">
                                <a href="<?php the_permalink(); ?>">
                                <?php } else continue; ?>
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } ?>
                                <div class="tur-news-date">
                                    <img src="/wp-content/themes/prokarpaty/images/tur-content-news-date.png" alt="Дата">
                                    <span class="tur-content-news-date3"><span class="glyphicon glyphicon-time"></span> <?php the_time('d.m'); ?></span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-10 tur-content-news-title-and-short">
                            <div class="tur-content-news-title">
                                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                            </div>
                            <div class="tur-content-news-short">
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="tur-news-more">
                                <a href="<?php the_permalink(); ?>"><?php echo __('Подробнее..', 'prokarpaty'); ?></a>
                            </div>
                        </div>
                    </div><!-- /.row -->
                <?php endwhile;
        else : ?>
                <p><?php echo __('На данный момент новостей нет.', 'prokarpaty'); ?></p>
            <?php endif; ?>



        </div>
    </div>
    <div class="container-fluid ">
        <div class="container">
            <div class="row text-center">
                <div class="tur-news-paginator-block">
                    <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
                </div><!-- /.tur-news-paginator-block -->
            </div>
        </div>
    </div>
</div><!-- /.articles -->