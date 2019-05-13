<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h1 class="tur-ecs2-title2">
                <?php the_title(); ?>
            </h1>
        </div>
        
        <div class="row">
            <div class="col-lg-7 tur-ecs2-right-otstup">
                <?php the_content(); ?>
                <div class="container postRating">
                    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                </div>
                <div class="row tur-ecs2-hr1">
                    <p class="tur-ecs2-title1"><?php echo __('Периодичность', 'prokarpaty'); ?></p>
                </div>
                <div class="row">
                    <div class="col-lg-offset-0 col-md-10 col-md-offset-0 col-sm-10 col-sm-offset-0 col-xs-10 col-xs-offset-0 tur-content-calenadar-exc-days">
                        <?php $values = get_field('days_of_week');
                        if ($values) {
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
                        <?php } else {
                        echo __('Под запрос', 'prokarpaty');
                    } ?>
                    </div>
                </div>

                <div class="row tur-ecs2-hr1">
                    <p class="tur-ecs2-title1"><?php echo __('Период экскурсии', 'prokarpaty'); ?></p>
                </div>
                <div class="row" style="display: -webkit-box;">
                    <div class="col-2 col-lg-1 ">

                        <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-calendar-on.png" alt="Календарь on" class="calendarIcon">
                    </div>
                    <div class="col-3 col-lg-5">
                        <p class="tur-ecs2-desc1"><?php echo __('Начало экскурсии', 'prokarpaty'); ?></p>
                        <p>
                            <?php
                            $date = get_field('date_start');
                            if ($date) {
                                ?>
                                <span class="tur-ecs2-date1">
                                    <?php
                                    $y = substr($date, 0, 4);
                                    $m = substr($date, 4, 2);
                                    $d = substr($date, 6, 2);
                                    $time = strtotime("{$d}-{$m}-{$y}");
                                    echo date('d.m.Y', $time);
                                    ?>
                                </span>
                                <span class="tur-ecs-beetwen-date-time">–</span>
                            <?php } ?>
                            <span class="tur-ecs2-time1"><?php the_field('ecs_time_start'); ?></span>
                        </p>
                    </div>
                    <div class="col-2 col-lg-1 ">
                        <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-calendar-on.png" alt="Календарь off" class="calendarIcon">
                    </div>
                    <div class="col-3 col-lg-5">
                        <p class="tur-ecs2-desc1"><?php echo __('Завершение экскурсии', 'prokarpaty'); ?></p>
                        <p>
                            <?php
                            $date = get_field('date_end');
                            if ($date) {
                                ?>
                                <span class="tur-ecs2-date1">
                                    <?php
                                    $y = substr($date, 0, 4);
                                    $m = substr($date, 4, 2);
                                    $d = substr($date, 6, 2);
                                    $time = strtotime("{$d}-{$m}-{$y}");
                                    echo date('d.m.Y', $time);
                                    ?>
                                </span>
                                <span class="tur-ecs-beetwen-date-time">–</span>
                            <?php } ?>
                            <span class="tur-ecs2-time1"><?php the_field('ecs_time_end'); ?></span>
                        </p>
                    </div>
                </div>
                <div class="row tur-ecs2-hr1">
                    <p class="tur-ecs2-title1"><?php echo __('Продолжительность экскурсии', 'prokarpaty'); ?></p>
                </div>
                <div class="row">
                    <div class="col-2 col-lg-1 col-lg-1-min">
                        <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-clock.png" alt="Продолжительность">
                    </div>
                    <div class="col-10 col-lg-11">
                        <p class="tur-ecs2-desc1">
                            <?php $duration = get_field(duration); ?>
                            <?php if ($duration != "") {
                                echo $duration;
                            } ?>
                        </p>
                    </div>
                </div>
                <div class="row tur-ecs2-hr1">
                    <p class="tur-ecs2-title1"><?php echo __('Стоимость экскурсии', 'prokarpaty'); ?></p>
                </div>
                <div class="row">
                    <div class="col-2 col-lg-1 col-lg-1-min">
                        <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-wallet.png" alt="Стоимость">
                    </div>
                    <div class="col-10 col-lg-11">
                        <p class="tur-ecs2-price1">
                            <?php $price = get_field(price); ?>
                            <?php if ($price != "") {
                                echo $price;
                            } ?>
                        </p>
                    </div>
                </div>
                <div class="row tur-ecs2-hr1">
                    <p class="tur-ecs2-title1"><?php echo __('Маршрут', 'prokarpaty'); ?></p>
                </div>
                <div class="row">
                    <div class="col-2 col-lg-1 col-lg-1-min">
                        <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-tray.png" alt="Маршрут">
                    </div>
                    <div class="col-10 col-lg-11">
                        <p class="tur-ecs2-desc1">
                            <?php $ecs_tray = get_field(ecs_tray); ?>
                            <?php if ($ecs_tray != "") {
                                echo $ecs_tray;
                            } ?>
                        </p>
                    </div>
                </div>
                <div class="row tur-ecs2-hr1">
                    <div class="tur-ecs2-desc2">
                        <?php $ecs_description = get_field(ecs_description); ?>
                        <?php if ($ecs_description != "") {
                            echo $ecs_description;
                        } ?>
                    </div>
                </div>
                <div class="row tur-ecs2-block-big-btn">
                    <div class="col-lg-6">
                        <button class="btn btn-success tur-ecs2-btn1" type="button" data-toggle="modal" data-target=".bs-example-modal-sm3"><?php echo __('Заказать', 'prokarpaty'); ?><br><?php echo __('экскурсию', 'prokarpaty'); ?></button>
                    </div>
                    <div class="modal fade bs-example-modal-sm3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myLargeModalLabel"><?php echo __('Заказ экскурсии', 'prokarpaty'); ?></h4>
                                    <div class="modal-body">
                                        <?php if (is_active_sidebar('post_modal_content_cf')) : ?>
                                            <?php dynamic_sidebar('post_modal_content_cf'); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <a href="<?php the_field('ecs_programma'); ?>" target="_blank"><button class="btn btn-info tur-ecs2-btn3" type="submit"><?php echo __('Распечатать', 'prokarpaty'); ?><br><?php echo __('программу экскурсии', 'prokarpaty'); ?></button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row tur-ecs2-calendar-exc-block tur-padding-top-bottom-10px tur-padding-bottom-20px">
                    <div class="tur-content-calendar-border">
                        <div class="tur-content-calendar-exc-block-in">
                            <div class="row tur-ecs2-calendar-title tur-ecs2-calendar-title2 postSidebar-blockInclude">
                                <p class="tur-ecs2-title1 calendar-titleHr"><?php echo __('Включено в стоимость', 'prokarpaty'); ?></p>

                                <?php $ecs_inc_proezd = get_field('ecs_inc_proezd'); ?>
                                <?php if ($ecs_inc_proezd != "") { ?>

                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-calendar-bus.png" alt="Bus">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_inc_proezd; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->

                                <?php } ?>
                                <?php $ecs_inc_transit = get_field('ecs_inc_transit'); ?>
                                <?php if ($ecs_inc_transit != "") { ?>

                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-calendar-hotel.png" alt="hotel">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_inc_transit; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->

                                <?php } ?>
                                <?php $ecs_inc_hotel = get_field('ecs_inc_hotel'); ?>
                                <?php if ($ecs_inc_hotel != "") { ?>

                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-calendar-star.png" alt="star">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_inc_hotel; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->

                                <?php } ?>
                                <?php $ecs_inc_zavtrak = get_field('ecs_inc_zavtrak'); ?>
                                <?php if ($ecs_inc_zavtrak != "") { ?>

                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-calendar-food.png" alt="food">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_inc_zavtrak; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->

                                <?php } ?>
                                <?php $ecs_inc_obslug = get_field('ecs_inc_obslug'); ?>
                                <?php if ($ecs_inc_obslug != "") { ?>

                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-calendar-dop.png" alt="dop">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_inc_obslug; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->

                                <?php } ?>
                                <?php $ecs_inc_gid = get_field('ecs_inc_gid'); ?>
                                <?php if ($ecs_inc_gid != "") { ?>

                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-calendar-excursion.png" alt="excursion">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_inc_gid; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->

                                <?php } ?>
                                <?php $ecs_inc_gid = get_field('ecs_inc_plus1'); ?>
                                <?php if ($ecs_inc_gid != "") { ?>

                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/plus.png" alt="excursion">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_inc_gid; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->

                                <?php } ?>
                                <?php $ecs_inc_gid = get_field('ecs_inc_plus2'); ?>
                                <?php if ($ecs_inc_gid != "") { ?>

                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/plus.png" alt="excursion">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_inc_gid; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                <?php } ?>
                                <?php $ecs_inc_gid = get_field('ecs_inc_plus3'); ?>
                                <?php if ($ecs_inc_gid != "") { ?>
                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/plus.png" alt="excursion">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_inc_gid; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tur-padding-top-bottom-10px">
                    <div class="tur-content-calendar-border">
                        <div class="tur-content-calendar-exc-block-in">
                            <div class="row tur-ecs2-calendar-title tur-ecs2-calendar-title2">
                                <p class="tur-ecs2-title1 calendar-titleHr"><?php echo __('Оплачивается дополнительно', 'prokarpaty'); ?></p>

                                <?php $ecs_dop_usluga = get_field('ecs_dop_usluga'); ?>
                                <?php if ($ecs_dop_usluga != "") { ?>
                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-calendar-flag.png" alt="flag">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_dop_usluga; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                <?php } ?>
                                <?php $ecs_dop_med = get_field('ecs_dop_med'); ?>
                                <?php if ($ecs_dop_med != "") { ?>
                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-calendar-med.png" alt="med case">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_dop_med; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                <?php } ?>

                                <?php $ecs_dop_tickets = get_field('ecs_dop_tickets'); ?>
                                <?php if ($ecs_dop_tickets != "") { ?>
                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-calendar-tickets.png" alt="tickets">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_dop_tickets; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                <?php } ?>

                                <?php $ecs_dop_obed = get_field('ecs_dop_obed'); ?>
                                <?php if ($ecs_dop_obed != "") { ?>
                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-dop-obed.png" alt="obed">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_dop_obed; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                <?php } ?>

                                <?php $ecs_dop_supper = get_field('ecs_dop_supper'); ?>
                                <?php if ($ecs_dop_supper != "") { ?>
                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-dop-supper.png" alt="supper">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_dop_supper; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                <?php } ?>

                                <?php $ecs_dop_deg = get_field('ecs_dop_deg'); ?>
                                <?php if ($ecs_dop_deg != "") { ?>
                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-dop-degust.png" alt="degus">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_dop_deg; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                <?php } ?>

                                <?php $ecs_dop_deg = get_field('ecs_dop_plus1'); ?>
                                <?php if ($ecs_dop_deg != "") { ?>
                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/plus_k.png" alt="degus">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_dop_deg; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                <?php } ?>

                                <?php $ecs_dop_deg = get_field('ecs_dop_plus2'); ?>
                                <?php if ($ecs_dop_deg != "") { ?>
                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/plus_k.png" alt="degus">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_dop_deg; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                <?php } ?>

                                <?php $ecs_dop_deg = get_field('ecs_dop_plus3'); ?>
                                <?php if ($ecs_dop_deg != "") { ?>
                                    <div class="row postSidebar-blockInclude-item__row">
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colIcon">
                                            <img src="/wp-content/themes/prokarpaty/images/plus_k.png" alt="degus">
                                        </div><!-- /.col -->
                                        <div class=" postSidebar-blockInclude-item__col postSidebar-blockInclude-item__colText">
                                            <p class="tur-ecs2-desc3"><?php echo $ecs_dop_deg; ?></p>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tur-ecs2-right-block3 tur-padding-bottom-20px">
                    <div class="col-lg-12">
                        <p class="tur-ecs2-title1"><?php echo __('Если понравилась экскурсия, лайкни в социальных сетях:', 'prokarpaty'); ?></p>
                    </div>
                    <div class="col-lg-6">
                        <p class="tur-ecs2-social-title">facebook</p>
                        <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                    </div>

                </div>
                <div class="carouselOther d-none d-md-block">
                    <p class="tur-ecs2-title1"><?php echo __('Посмотреть другие экскурсии', 'prokarpaty'); ?></p>
                    <div id="carouselOtherExcursion" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php $x = 0; ?>
                            <?php query_posts('posts_per_page=4&cat=3' || 'posts_per_page=4&cat=68'); ?>
                            <?php $n = ' active';
                            if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php if (in_category('3' || '68')) { ?>
                                        <?php $x++;
                                        if ($x === 1 || $x % 2 === 1) {
                                            echo '<div class="carousel-item ';

                                            echo $n;
                                            echo '">';
                                            echo '<div class="row">';
                                            $n = '';
                                        } ?>
                                    <?php } else continue; ?>
                                    <div class="col-lg-6 tur-ecs2-dop-block">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="tur-ecs2-slider-small-img"><?php if (has_post_thumbnail()) {
                                                                                        the_post_thumbnail();
                                                                                    } ?></div>
                                            <div class="tur-ecs2-dop-block-on">
                                                <p class="tur-ecs2-dop-desc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                                <div class="tur-ecs2-dop-desc-block2">
                                                    <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-dop-clock.png" hspace="5" alt="clock"><span class="tur-ecs2-dop-clock">08:30</span>
                                                    <br>
                                                    <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-dop-wallet.png" hspace="5" alt="clock"><span class="tur-ecs2-dop-wallet">

                                                        <?php $price = get_field(price); ?>
                                                        <?php if ($price != "") {
                                                            echo $price;
                                                        } ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php if ($x % 2 === 0) {
                                        echo '</div>';
                                        echo '</div>';
                                    } ?>
                                <?php endwhile;
                        else : ?>
                                <p><?php echo __('На данный момент отзывов нет.', 'prokarpaty'); ?></p>
                            <?php endif; ?>

                        </div>
                        <a class="carousel-control-prev" href="#carouselOtherExcursion" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left tur-glyphicon-color-black" aria-hidden="true"></span>
                            <span class="sr-only"><?php echo __('Предыдущий', 'prokarpaty'); ?></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselOtherExcursion" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right tur-glyphicon-color-black" aria-hidden="true"></span>
                            <span class="sr-only"><?php echo __('Следующий', 'prokarpaty'); ?></span>
                        </a>
                    </div>
                </div><!-- /.carouselOther -->


                <div class="row">
                    <div class="col-lg-1 tur-ecs2-skobka d-none d-lg-block">
                        <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-skobka.png" alt="skobka">
                    </div>
                    <div class="col-12 col-lg-11 sidebarPostWidget">
                        <div class="tur-ecs2-callback-block2">
                            <p><span class="tur-ecs2-title1"><?php echo __('Возникли вопросы по экскурсии', 'prokarpaty'); ?></span><br><span class="tur-ecs2-callback-desc1"><?php echo __('Оставьте заявку и наши менеджеры свяжутся с вами в короткое время', 'prokarpaty'); ?></span></p>
                        </div>
                        <?php if (is_active_sidebar('post_sidebar_cf')) : ?>
                            <?php dynamic_sidebar('post_sidebar_cf'); ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid tur-ecs2-vop-block d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p class="tur-ecs2-vop1"><?php echo __('Остались', 'prokarpaty'); ?> <span class="tur-ecs2-vop2"><?php echo __('вопросы', 'prokarpaty'); ?></span></p>

            </div>
            <div class="col-lg-6">
                <p class="tur-ecs2-manager1"><a href="#" class="dot" data-toggle="modal" data-target=".bs-example-modal-sm2"><?php echo __('задайте их менеджеру', 'prokarpaty'); ?></a></p>
            </div>
            <div class="tur-ecs2-vop3">
                <img src="/wp-content/themes/prokarpaty/images/tur-ecs2-vop3.png" alt="vop3">
            </div>
        </div>
    </div>
</div>