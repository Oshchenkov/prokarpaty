<div class="categoryFilter">
    <?php
    if (isset($_GET['tag'])) {
        $tag = $_GET['tag'];
    }
    $posts = get_posts(array(
        'numberposts'     => 100, // тоже самое что posts_per_page
        'offset'          => 0,
        'category'        => $cat_id,
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

    // excursions-europe
    if ($cat_id == 113) {
        echo '
            <div class="container tur-ecs-filter-block" id="tur-ecs-filter-block-link">
                <p class="tur-ecs-filter-title">
                    <a href="' . $category_link1 . '"><span>Все экскурсии:</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=slovakiya"><span>Словакия</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=vengriya"><span>Венгрия</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=rumyniya"><span>Румыния</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=poland"><span>Польша</span></a>
                </p>
            </div>
            ';
    } elseif ($cat_id == 112) {
        echo '
            <div class="container tur-ecs-filter-block" id="tur-ecs-filter-block-link">
                <p class="tur-ecs-filter-title">
                    <a href="' . $category_link1 . '"><span>Всі екскурсії: </span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=slovatchyna"><span>Словаччина</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=ugorschyna"><span>Угорщина</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=rumuniya"><span>Румунія</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=poland"><span>Польша</span></a>
                </p>
            </div>
            ';
    }
    // tours-uzhorod
    elseif ($cat_id == 40) {
        echo '
            <div class="container tur-ecs-filter-block" id="tur-ecs-filter-block-link">
                <p class="tur-ecs-filter-title">
                    <a href="' . $category_link1 . '"><span>Все Туры: </span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=novogodnie-tury"><span>Новогодние туры</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=gornolujnue"><span>Горнолыжные туры</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=majskie-turu"><span>Майские туры</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=vyhodnogo-dnya"><span>Туры выходного дня</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=degustatsionye-tury"><span>Дегустационные туры</span></a>
                </p>
            </div>
            ';
    } elseif ($cat_id == 63) {
        echo '
            <div class="container tur-ecs-filter-block" id="tur-ecs-filter-block-link">
                <p class="tur-ecs-filter-title">
                    <a href="' . $category_link1 . '"><span>Всі Тури: </span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=novorichni-tury-uk"><span>Новорічні тури</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=girskolujni-turu"><span>Гірськолижні тури</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=travnevi-tury-uk"><span>Травневі тури</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=vyhidnogo-dnya"><span>Тури вихідного дня</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=degustatsionye-tury-uk"><span>Дегустаційні тури</span></a>
                </p>
            </div>
            ';
    }
    // excursions-uzhorod
    elseif ($cat_id == 3) {
        echo '
            <div class="container tur-ecs-filter-block" id="tur-ecs-filter-block-link">
                <p class="tur-ecs-filter-title">
                    <a href="' . $category_link1 . '"><span>Все экскурсии: </span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=odnodnevnye-ekskursii"><span>Однодневные экскурсии</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=dvuhdnevnaya"><span>Двухдневные экскурсии</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=spetsialnye-predlozheniya"><span>Специальные предложения</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=populyarnuye-ekskursii"><span>Самые популярные экскурсии</span></a>
                </p>
            </div>
            ';
    } elseif ($cat_id == 68) {
        echo '
            <div class="container tur-ecs-filter-block" id="tur-ecs-filter-block-link">
                <p class="tur-ecs-filter-title">
                    <a href="' . $category_link1 . '"><span>Всі екскурсії: </span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=odnodeni-ekskursii"><span>Одноденні екскурсії</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=dvodeni-ekskyrsii"><span>Дводенні екскурсії</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=spetsialni-propozutsii"><span>Спеціальні пропозиції</span></a><img src="/wp-content/themes/prokarpaty/images/tur-ecs-filter-razd.png" hspace="10">
                    <a href="' . $category_link1 . '?tag=populyarni-ekskursii"><span>Найпопулярніші екскурсії</span></a>
                </p>
            </div>
            ';
    }
    // active-rest-uzhorod


    ?>
    <div class="container-fluid">
        <div class="container">
            <div class="tur-content-our-exc-block">
                <div class="row">
                    <?php $i = 0; ?>
                    <?php query_posts('posts_per_page=100&cat=' . $cat_id . '&tag=' . $tag); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php if (in_category($cat_id)) { ?>

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