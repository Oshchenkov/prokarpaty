<div class="container-fluid">
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
                        <p><?php echo __('На данный момент график пуст.', 'prokarpaty'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>