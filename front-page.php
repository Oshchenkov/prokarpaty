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
        if (ICL_LANGUAGE_CODE == 'ru') {
            $post = get_post(115);
        } elseif (ICL_LANGUAGE_CODE == 'uk') {
            $post = get_post(5702);
        } else {
            $post = get_post(115);
        } ?>
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
    <div class="container-fluid tur-head-form-all-margin">
        <div class="container tur-head-form-all2">
            <div class="row tur-head-form-title">
                <?php echo __('ОСТАВЬТЕ ЗАЯВКУ, НАШИ МЕНЕДЖЕРЫ СВЯЖУТСЯ С ВАМИ В КОРОТКОЕ ВРЕМЯ', 'prokarpaty'); ?>
            </div>
            <div class="row tur-head-form">
                <?php if (is_active_sidebar('front_top_cf')) : ?>
                    <?php dynamic_sidebar('front_top_cf'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container tur-our-exc-title">
        <span class="tur-our-exc-title-red"><?php echo __('БЛИЖАЙШИЕ', 'prokarpaty'); ?> </span><?php echo __('ЭКСКУРСИИ', 'prokarpaty'); ?>
    </div>
    <?php function rdate($param, $time = 0)
    {
        if (intval($time) == 0) $time = time();
        if ($_COOKIE['_icl_current_language'] == 'ru') {
            $MN = array("января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря");
            $MonthNames[] = $MN[date('n', $time) - 1];
            $MN = array("Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота");
            $MonthNames[] = $MN[date('w', $time)];
        } else {
            $MN = array("січня", "лютого", "березня", "квітня", "травня", "червня", "липня", "серпня", "вересня", "жовтня", "листопада", "грудня");
            $MonthNames[] = $MN[date('n', $time) - 1];
            $MN = array("Неділя", "Понеділок", "Вівторок", "Середа", "Четвер", "П'ятница", "Субота");
            $MonthNames[] = $MN[date('w', $time)];
        }

        $arr[] = 'M';
        $arr[] = 'N';
        if (strpos($param, 'M') === false) return date($param, $time);
        else return date(str_replace($arr, $MonthNames, $param), $time);
    }
    ?>
    <div class="container">

        <div class="row blizh1">

            <div class="col-lg-4 col-xs-12 ">
                <div class="row">
                    <div class="col-6 tur-content-near-exc-col">
                        <div class="tur-content-near-exc-day">
                            <p><?php echo __('Сегодня,', 'prokarpaty'); ?> <?php echo rdate('j M'); ?></p>
                        </div>
                        <?php query_posts('posts_per_page=36&cat=3'); ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php $date = get_field('date_start');
                                $y = substr($date, 0, 4);
                                $m = substr($date, 4, 2);
                                $d = substr($date, 6, 2);
                                $time = strtotime("{$d}-{$m}-{$y}");


                                $dn = date('l', strtotime("+0 day", strtotime(date('d.m.Y'))));
                                $dn_id = get_field('days_of_week');
                                $check_day = 0;
                                foreach ($dn_id as $key => $value) {
                                    if ($value == $dn) $check_day = 1;
                                }


                                ?>
                                <?php if ((date('d.m.Y', $time) == date('d.m.Y')) || $check_day == 1) {


                                    ?>
                                    <div class="tur-content-near-exc-desc">
                                    <?php } else continue; ?>
                                    <div class="row tur-content-near-exc">
                                        <p class="tur-content-near-exc-time">
                                            <span class="glyphicon glyphicon-time"></span>
                                            <span>
                                                <?php $next_tours_time = get_field(date_start); ?>
                                                <?php if ($next_tours_time != "") {
                                                    $y = substr($next_tours_time, 0, 4);
                                                    $m = substr($next_tours_time, 4, 2);
                                                    $d = substr($next_tours_time, 6, 2);
                                                    $time = strtotime("{$d}-{$m}-{$y}");
                                                    echo date('d.m.Y', $time);
                                                } ?>
                                            </span>
                                        </p>
                                        <p class="tur-content-near-exc-price">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-exc-wallet.png" alt="Wallet" hspace="5">
                                            <span>
                                                <?php $next_tours_price = get_field(price); ?>
                                                <?php if ($next_tours_price != "") {
                                                    echo $next_tours_price;
                                                } ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="row tur-content-near-exc tur-content-near-exc-hr">
                                        <p class="tur-content-near-exc-place"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    </div>
                                </div>
                            <?php endwhile;
                    else : ?>
                            <p><?php echo __('На данный момент ближайших экскурсий нет.', 'prokarpaty'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-6 tur-content-near-exc-col">
                        <div class="tur-content-near-exc-day">
                            <p><?php echo __('Завтра,', 'prokarpaty'); ?> <?php echo rdate('j M', strtotime("+1 day")); ?></p>
                        </div>
                        <?php if (have_posts()) : while (have_posts()) : the_post();

                                $dn = date('l', strtotime("+1 day", strtotime(date('d.m.Y'))));
                                $dn_id = get_field('days_of_week');
                                $check_day = 0;
                                foreach ($dn_id as $key => $value) {
                                    if ($value == $dn) $check_day = 1;
                                }


                                ?>



                                <?php if (in_category('3') && (get_field('date_start') == date('Ymd', strtotime("+1 day"))) || $check_day == 1) { ?>
                                    <div class="tur-content-near-exc-desc">
                                    <?php } else continue; ?>
                                    <div class="row tur-content-near-exc">
                                        <p class="tur-content-near-exc-time">
                                            <span class="glyphicon glyphicon-time"></span>
                                            <span>
                                                <?php $next_tours_time = get_field(date_start); ?>
                                                <?php if ($next_tours_time != "") {
                                                    $y = substr($next_tours_time, 0, 4);
                                                    $m = substr($next_tours_time, 4, 2);
                                                    $d = substr($next_tours_time, 6, 2);
                                                    $time = strtotime("{$d}-{$m}-{$y}");
                                                    echo date('d.m.Y', $time);
                                                } ?>
                                            </span>
                                        </p>
                                        <p class="tur-content-near-exc-price">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-exc-wallet.png" alt="Wallet" hspace="5">
                                            <span>
                                                <?php $next_tours_price = get_field(price); ?>

                                                <?php if ($next_tours_price != "") {
                                                    echo $next_tours_price;
                                                } ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="row tur-content-near-exc tur-content-near-exc-hr">
                                        <p class="tur-content-near-exc-place"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    </div>
                                </div>
                            <?php endwhile;
                    else : ?>
                            <p><?php echo __('На данный момент ближайших экскурсий нет.', 'prokarpaty'); ?></p>
                        <?php endif; ?>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="col-lg-4 col-xs-12 ">
                <div class="row">
                    <div class="col-6 tur-content-near-exc-col">
                        <div class="tur-content-near-exc-day">
                            <p><?php echo __('Послезавтра,', 'prokarpaty'); ?> <?php echo rdate('j M', strtotime("+2 day")); ?></p>
                        </div>
                        <?php if (have_posts()) : while (have_posts()) : the_post();

                                $dn = date('l', strtotime("+2 day", strtotime(date('d.m.Y'))));
                                $dn_id = get_field('days_of_week');
                                $check_day = 0;
                                foreach ($dn_id as $key => $value) {
                                    if ($value == $dn) $check_day = 1;
                                }
                                ?>


                                <?php if (in_category('3') && (get_field('date_start') == date('Ymd', strtotime("+2 day"))) || $check_day == 1) { ?>
                                    <div class="tur-content-near-exc-desc">
                                    <?php } else continue; ?>
                                    <div class="row tur-content-near-exc">
                                        <p class="tur-content-near-exc-time">
                                            <span class="glyphicon glyphicon-time"></span>
                                            <span>
                                                <?php $next_tours_time = get_field(date_start); ?>
                                                <?php if ($next_tours_time != "") {
                                                    $y = substr($next_tours_time, 0, 4);
                                                    $m = substr($next_tours_time, 4, 2);
                                                    $d = substr($next_tours_time, 6, 2);
                                                    $time = strtotime("{$d}-{$m}-{$y}");
                                                    echo date('d.m.Y', $time);
                                                } ?>
                                            </span>
                                        </p>
                                        <p class="tur-content-near-exc-price">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-exc-wallet.png" alt="Wallet" hspace="5">
                                            <span>
                                                <?php $next_tours_price = get_field(price); ?>
                                                <?php if ($next_tours_price != "") {
                                                    echo $next_tours_price;
                                                } ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="row tur-content-near-exc tur-content-near-exc-hr">
                                        <p class="tur-content-near-exc-place"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    </div>
                                </div>
                            <?php endwhile;
                    else : ?>
                            <p><?php echo __('На данный момент ближайших экскурсий нет.', 'prokarpaty'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-6 tur-content-near-exc-col">
                        <div class="tur-content-near-exc-day">
                            <p><?php echo rdate('N, j M', strtotime("+3 day")); ?></p>
                        </div>
                        <?php if (have_posts()) : while (have_posts()) : the_post();
                                $dn = date('l', strtotime("+3 day", strtotime(date('d.m.Y'))));
                                $dn_id = get_field('days_of_week');
                                $check_day = 0;
                                foreach ($dn_id as $key => $value) {
                                    if ($value == $dn) $check_day = 1;
                                }
                                ?>
                                <?php if (in_category('3') && (get_field('date_start') == date('Ymd', strtotime("+3 day"))) || $check_day == 1) { ?>
                                    <div class="tur-content-near-exc-desc">
                                    <?php } else continue; ?>
                                    <div class="row tur-content-near-exc">
                                        <p class="tur-content-near-exc-time">
                                            <span class="glyphicon glyphicon-time"></span>
                                            <span>
                                                <?php $next_tours_time = get_field(date_start); ?>
                                                <?php if ($next_tours_time != "") {
                                                    $y = substr($next_tours_time, 0, 4);
                                                    $m = substr($next_tours_time, 4, 2);
                                                    $d = substr($next_tours_time, 6, 2);
                                                    $time = strtotime("{$d}-{$m}-{$y}");
                                                    echo date('d.m.Y', $time);
                                                } ?>
                                            </span>
                                        </p>
                                        <p class="tur-content-near-exc-price">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-exc-wallet.png" alt="Wallet" hspace="5">
                                            <span>
                                                <?php $next_tours_price = get_field(price); ?>
                                                <?php if ($next_tours_price != "") {
                                                    echo $next_tours_price;
                                                } ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="row tur-content-near-exc tur-content-near-exc-hr">
                                        <p class="tur-content-near-exc-place"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    </div>
                                </div>
                            <?php endwhile;
                    else : ?>
                            <p><?php echo __('На данный момент ближайших экскурсий нет.', 'prokarpaty'); ?></p>
                        <?php endif; ?>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="col-lg-4 col-xs-12 ">
                <div class="row">
                    <div class="col-6 tur-content-near-exc-col">
                        <div class="tur-content-near-exc-day">
                            <p><?php echo rdate('N, j M', strtotime("+4 day")); ?></p>
                        </div>
                        <?php if (have_posts()) : while (have_posts()) : the_post();
                                $dn = date('l', strtotime("+4 day", strtotime(date('d.m.Y'))));
                                $dn_id = get_field('days_of_week');
                                $check_day = 0;
                                foreach ($dn_id as $key => $value) {
                                    if ($value == $dn) $check_day = 1;
                                }
                                ?>
                                <?php if (in_category('3') && (get_field('date_start') == date('Ymd', strtotime("+4 day"))) || $check_day == 1) { ?>
                                    <div class="tur-content-near-exc-desc">
                                    <?php } else continue; ?>
                                    <div class="row tur-content-near-exc">
                                        <p class="tur-content-near-exc-time">
                                            <span class="glyphicon glyphicon-time"></span>
                                            <span>
                                                <?php $next_tours_time = get_field(date_start); ?>
                                                <?php if ($next_tours_time != "") {
                                                    $y = substr($next_tours_time, 0, 4);
                                                    $m = substr($next_tours_time, 4, 2);
                                                    $d = substr($next_tours_time, 6, 2);
                                                    $time = strtotime("{$d}-{$m}-{$y}");
                                                    echo date('d.m.Y', $time);
                                                } ?>
                                            </span>
                                        </p>
                                        <p class="tur-content-near-exc-price">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-exc-wallet.png" alt="Wallet" hspace="5">
                                            <span>
                                                <?php $next_tours_price = get_field(price); ?>
                                                <?php if ($next_tours_price != "") {
                                                    echo $next_tours_price;
                                                } ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="row tur-content-near-exc tur-content-near-exc-hr">
                                        <p class="tur-content-near-exc-place"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    </div>
                                </div>
                            <?php endwhile;
                    else : ?>
                            <p><?php echo __('На данный момент ближайших экскурсий нет.', 'prokarpaty'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-6 tur-content-near-exc-col">
                        <div class="tur-content-near-exc-day">
                            <p><?php echo rdate('N, j M', strtotime("+5 day")); ?></p>
                        </div>
                        <?php if (have_posts()) : while (have_posts()) : the_post();
                                $dn = date('l', strtotime("+5 day", strtotime(date('d.m.Y'))));
                                $dn_id = get_field('days_of_week');
                                $check_day = 0;
                                foreach ($dn_id as $key => $value) {
                                    if ($value == $dn) $check_day = 1;
                                }
                                ?>
                                <?php if (in_category('3') && (get_field('date_start') == date('Ymd', strtotime("+5 day"))) || $check_day == 1) { ?>
                                    <div class="tur-content-near-exc-desc">
                                    <?php } else continue; ?>
                                    <div class="row tur-content-near-exc">
                                        <p class="tur-content-near-exc-time">
                                            <span class="glyphicon glyphicon-time"></span>
                                            <span>
                                                <?php $next_tours_time = get_field(date_start); ?>
                                                <?php if ($next_tours_time != "") {
                                                    $y = substr($next_tours_time, 0, 4);
                                                    $m = substr($next_tours_time, 4, 2);
                                                    $d = substr($next_tours_time, 6, 2);
                                                    $time = strtotime("{$d}-{$m}-{$y}");
                                                    echo date('d.m.Y', $time);
                                                } ?>
                                            </span>
                                        </p>
                                        <p class="tur-content-near-exc-price">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-exc-wallet.png" alt="Wallet" hspace="5">
                                            <span>
                                                <?php $next_tours_price = get_field(price); ?>
                                                <?php if ($next_tours_price != "") {
                                                    echo $next_tours_price;
                                                } ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="row tur-content-near-exc tur-content-near-exc-hr">
                                        <p class="tur-content-near-exc-place"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    </div>
                                </div>
                            <?php endwhile;
                    else : ?>
                            <p><?php echo __('На данный момент ближайших экскурсий нет.', 'prokarpaty'); ?></p>
                        <?php endif; ?>
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
    </div>

    <div class="separatorImg"></div><!-- /.separatorImg -->

    <div class="container tur-our-exc-title">
        <span class="tur-our-exc-title-red"><?php echo __('НАШИ', 'prokarpaty'); ?> </span><?php echo __('ЭКСКУРСИИ', 'prokarpaty'); ?>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="tur-content-our-exc-block row">
                <?php $i = 0; ?>
                <?php query_posts('posts_per_page=6&cat=33') || query_posts('posts_per_page=6&cat=84'); ?>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php if (in_category('33') || in_category('84')) { ?>

                            <a href="<?php the_permalink(); ?>">
                                <div class="col-lg-4 col-md-6">
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
    <div class="container tur-content-ext-view-all">
        <a href="category/excursions-uzhorod/"><button class="btn btn-danger tur-content-ext-view-all-btn" type="submit"> <?php echo __('ПОСМОТРЕТЬ ВСЕ ЭКСКУРСИИ', 'prokarpaty'); ?></button></a>
    </div>
    <div class="container-fluid hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 tur-content-exc-dop">
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm2" class="tur-content-exc-dop__link">
                        <img src="/wp-content/themes/prokarpaty/images/tur-content-exc-dop1.jpg" class="img-responsive" alt="Фото экскурсии">
                        <div class="tur-content-exc-dop1">
                            <p class="tur-dop-left-text"><?php echo __('Если Вас интересует индивидуальная экскурсия', 'prokarpaty'); ?></p>
                        </div>
                        <div class="tur-content-exc-dop2">
                            <p><?php echo __('Оставить заявку', 'prokarpaty'); ?></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 tur-content-exc-dop">
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm2" class="tur-content-exc-dop__link">
                        <img src="/wp-content/themes/prokarpaty/images/tur-content-exc-dop2.jpg" class="img-responsive" alt="Фото экскурсии">
                        <div class="tur-content-exc-dop1">
                            <p class="tur-dop-padding-left-right"><?php echo __('Если Вас интересуют дополнительные услуги (трансфер, услуги гида)', 'prokarpaty'); ?></p>
                        </div>
                        <div class="tur-content-exc-dop2">
                            <p><?php echo __('Оставить заявку', 'prokarpaty'); ?></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="separatorImg"></div><!-- /.separatorImg -->

    <div class="container tur-our-exc-title">
        <span class="tur-our-exc-title-red"><?php echo __('ГРАФИК', 'prokarpaty'); ?> </span><?php echo __('ЭКСКУРСИЙ', 'prokarpaty'); ?>
    </div>
    <div class="container">
        <div class="row tur-content-calendar-exc-block">
            <div class="tur-content-calendar-border">
                <div class="tur-content-calendar-exc-block-in">





                    <?php $posts = get_posts("category=3&numberposts=-1"); ?>
                    <?php if ($posts) : ?>
                        <?php foreach ($posts as $post) : setup_postdata($post);
                            $calendar_on = get_field('calendar_ecs_on');
                            if ($calendar_on == true) {
                                ?>
                                <div class="row tur-content-calendar-exc">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tur-no-padding-left">
                                        <p class="tur-content-calendar-exc-price">
                                            <?php $price = get_field(price); ?>
                                            <?php if ($price != "") {
                                                echo $price;
                                            } ?>
                                        </p>
                                    </div>
                                    <div class="col-lg-7 col-md-10 col-sm-10 col-xs-10 tur-content-calendar-exc-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <p><?php the_title(); ?></p>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-lg-offset-0 col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-2 tur-content-calenadar-exc-days">
                                        <?php $values = get_field('days_of_week');

                                        $onoff1 = 'off';
                                        $onoff2 = 'off';
                                        $onoff3 = 'off';
                                        $onoff4 = 'off';
                                        $onoff5 = 'off';
                                        $onoff6 = 'off';
                                        $onoff7 = 'off';
                                        if ($values) {
                                            foreach ($values as $check) {
                                                if (($check) == 'Monday') {
                                                    $onoff1 = 'on';
                                                } elseif (($check) == 'Tuesday') {
                                                    $onoff2 = 'on';
                                                } elseif (($check) == 'Wednesday') {
                                                    $onoff3 = 'on';
                                                } elseif (($check) == 'Thursday') {
                                                    $onoff4 = 'on';
                                                } elseif (($check) == 'Friday') {
                                                    $onoff5 = 'on';
                                                } elseif (($check) == 'Saturday') {
                                                    $onoff6 = 'on';
                                                } elseif (($check) == 'Sunday') {
                                                    $onoff7 = 'on';
                                                }
                                            }
                                        } ?>
                                        <div class="tur-content-calendar-exc-day-<?php echo $onoff1 ?>">
                                            <p class="tur-content-calendar-exc-day">пн</p>
                                        </div>
                                        <div class="tur-content-calendar-exc-day-<?php echo $onoff2 ?>">
                                            <p class="tur-content-calendar-exc-day">вт</p>
                                        </div>
                                        <div class="tur-content-calendar-exc-day-<?php echo $onoff3 ?>">
                                            <p class="tur-content-calendar-exc-day">ср</p>
                                        </div>
                                        <div class="tur-content-calendar-exc-day-<?php echo $onoff4 ?>">
                                            <p class="tur-content-calendar-exc-day">чт</p>
                                        </div>
                                        <div class="tur-content-calendar-exc-day-<?php echo $onoff5 ?>">
                                            <p class="tur-content-calendar-exc-day">пт</p>
                                        </div>
                                        <div class="tur-content-calendar-exc-day-<?php echo $onoff6 ?>">
                                            <p class="tur-content-calendar-exc-day">сб</p>
                                        </div>
                                        <div class="tur-content-calendar-exc-day-<?php echo $onoff7 ?>">
                                            <p class="tur-content-calendar-exc-day"><?php echo __('вс', 'prokarpaty'); ?></p>
                                        </div>
                                    </div>
                                </div>


                            <?php  }
                    endforeach;
                else : ?>
                        <p><?php echo __('На данный момент календарь пуст.', 'prokarpaty'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="separatorImg separatorImg_l"></div><!-- /.separatorImg -->

    <div class="container-fluid tur-content-free-call">
        <div class="row tur-head-form-title">
            <span><?php echo __('ПОЛУЧИТЬ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ', 'prokarpaty'); ?></span>
        </div>
        <div class="row tur-head-form">
            <div class="container">
                <?php if (is_active_sidebar('front_top_cf')) : ?>
                    <?php dynamic_sidebar('front_top_cf'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container tur-our-exc-title d-none d-lg-block">
                <span class="tur-our-exc-title-red"><?php echo __('НАШИ', 'prokarpaty'); ?> </span><?php echo __('ПРЕИМУЩЕСТВА', 'prokarpaty'); ?>
            </div>
            <div class="container-fluid tur-content-our-plus-bg d-none d-lg-block">
<?php 
if ($_COOKIE['_icl_current_language']=='ru')   
    $post = get_post(390); 
else 
$post = get_post(5896);    
?>

                
                <div class="container ">
                    <div class=" row tur-content-our-plus">
                        <div class="tur-content-our-plus1">
                            <a class="pp-credit-block-button" href="#" onclick="return false"><img src="/wp-content/themes/prokarpaty/images/tur-content-our-plus-off.png" alt="Открыть"></a>
                            <div class="popup-credit our_plus">
                                <div class="tur-content-our-plus-desc1">
                                    <div class="row">
                                        <div class="col-lg-2 tur-content-plus-on">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-our-plus-on.png" alt="Плюс">
                                            <div class="tur-content-plus-on-dig">
                                                <p>1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 tur-content-our-plus-desc">
                                            <p><?php the_field('our_plus1'); ?></p>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="tur-content-our-plus-line1"></div>
                                </div>
                            </div>
                        </div>
                        <div class=" tur-content-our-plus2">
                            <a class="pp-credit-block-button" href="#" onclick="return false"><img src="/wp-content/themes/prokarpaty/images/tur-content-our-plus-off.png" alt="Открыть"></a>
                            <div class="popup-credit our_plus hide">
                                <div class="tur-content-our-plus-desc2">
                                    <div class="row">
                                        <div class="col-lg-2 tur-content-plus-on">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-our-plus-on.png" alt="Плюс">
                                            <div class="tur-content-plus-on-dig">
                                                <p>2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 tur-content-our-plus-desc">
                                            <p><br><?php the_field('our_plus2'); ?></p>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="tur-content-our-plus-line2"></div>
                                </div>
                            </div>
                        </div>
                        <div class=" tur-content-our-plus3">
                            <a class="pp-credit-block-button" href="#" onclick="return false"><img src="/wp-content/themes/prokarpaty/images/tur-content-our-plus-off.png" alt="Открыть"></a>
                            <div class="popup-credit our_plus hide">
                                <div class="tur-content-our-plus-desc3">
                                    <div class="row">
                                        <div class="col-lg-9 tur-content-our-plus-desc-right">
                                            <p><?php the_field('our_plus3'); ?></p>
                                        </div>
                                        <div class="col-lg-3 tur-content-plus-on">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-our-plus-on.png" alt="Плюс">
                                            <div class="tur-content-plus-on-dig">
                                                <p>3</p>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="tur-content-our-plus-line3"></div>
                                </div>
                            </div>
                        </div>
                        <div class=" tur-content-our-plus4">
                            <a class="pp-credit-block-button" href="#" onclick="return false"><img src="/wp-content/themes/prokarpaty/images/tur-content-our-plus-off.png" alt="Открыть"></a>
                            <div class="popup-credit our_plus hide">
                                <div class="tur-content-our-plus-desc4">
                                    <div class="row">
                                        <div class="col-lg-10 tur-content-our-plus-desc-right">
                                            <p><?php the_field('our_plus4'); ?></p>
                                        </div>
                                        <div class="col-lg-2 tur-content-plus-on">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-our-plus-on.png" alt="Плюс">
                                            <div class="tur-content-plus-on-dig">
                                                <p>4</p>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="tur-content-our-plus-line4"></div>
                                </div>
                            </div>
                        </div>
                        <div class=" tur-content-our-plus5">
                            <a class="pp-credit-block-button" href="#" onclick="return false"><img src="/wp-content/themes/prokarpaty/images/tur-content-our-plus-off.png" alt="Открыть"></a>
                            <div class="popup-credit our_plus hide">
                                <div class="tur-content-our-plus-desc5">
                                    <div class="row">
                                        <div class="col-lg-10 tur-content-our-plus-desc-right">
                                            <p><br><?php the_field('our_plus5'); ?></p>
                                        </div>
                                        <div class="col-lg-2 tur-content-plus-on">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-our-plus-on.png" alt="Плюс">
                                            <div class="tur-content-plus-on-dig">
                                                <p>5</p>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="tur-content-our-plus-line5"></div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <script>
                $(".pp-credit-block-button").click( function(){
                    //$(this).next(".popup-credit").toggle("fast")
                    $('.our_plus').addClass('hide');
                    $(this).next(".popup-credit").removeClass('hide');
                });
                var buttons = $(".pp-credit-block-button");
                var i = 0;
                function slide() {
                    i+=1;
                    if(4 < i) i=0;
                    buttons[i].click();
                    // console.log(i);
                }
                var interval = setInterval(slide, 5000)
            </script>

    <div class="separatorImg separatorImg_l"></div><!-- /.separatorImg -->

    <div class="container tur-our-exc-title">
        <span class="tur-our-exc-title-red"><?php echo __('СТАТЬИ', 'prokarpaty'); ?> </span><?php echo __('О ТУРИЗМЕ В КАРПАТАХ', 'prokarpaty'); ?>
    </div>
    <div class="container-fluid">
        <div class="container news">
            <div class="row">
                <?php query_posts('posts_per_page=3&cat=4') || query_posts('posts_per_page=3&cat=82'); ?>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php if (in_category('4') || in_category('82')) { ?>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 tur-content-news px-4">
                            <?php } else continue; ?>

                            <div class="row">
                                <div class="col-lg-5 col-md-7 col-sm-3 col-xs-4 tur-content-news-image ">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="tur-content-news-img">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail();
                                            } ?>
                                        </div>
                                        <div class="tur-content-news-date">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-content-news-date.png" alt="Дата">
                                            <span class="tur-content-news-date2"><span class="glyphicon glyphicon-time"></span> <?php the_time('d.m'); ?></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-7 col-md-5 col-sm-9 col-xs-8 tur-content-news-title-and-short">
                                    <div class="tur-content-news-title">
                                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    </div>
                                    <div class="tur-content-news-short">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                            <div class="tur-content-news-more visible-lg visible-md">
                                <a href="<?php the_permalink(); ?>"><?php echo __('Подробнее..', 'prokarpaty'); ?></a>
                            </div>
                        </div>
                    <?php endwhile;
            else : ?>
                    <p><?php echo __('На данный момент новостей нет.', 'prokarpaty'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container tur-content-ext-view-all text-center">
        <a href="<?php
                    if (ICL_LANGUAGE_CODE == 'ru') {
                        echo get_category_link('4');
                    } else {
                        echo get_category_link('82');
                    }
                    ?>">
            <button class="btn btn-danger tur-content-ext-view-all-btn" type="submit">
                <?php echo __('Смотреть все статьи', 'prokarpaty'); ?>
            </button>
        </a>
    </div>
    <div class="separatorImg"></div><!-- /.separatorImg -->
    <div class="container-fluid">
        <?php
        if (ICL_LANGUAGE_CODE == 'ru') {
            $my_post_obj = get_post(4);
        } elseif (ICL_LANGUAGE_CODE == 'uk') {
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