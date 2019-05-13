<div class="container-fluid">
    <div class="container">
        <div class="row tur-content-calendar-exc-block">
            <div class="tur-content-calendar-border">
                <div class="tur-content-calendar-exc-block-in">

                    <?php $posts = get_posts("category=40&numberposts=-1"); ?>
                    <?php if ($posts) : ?>
                        <?php foreach ($posts as $post) : setup_postdata($post);
                            $calendar_on = get_field('calendar_ecs_on');
                            if ($calendar_on == true) {
                                ?>
                                <div class="row tur-content-calendar-exc">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 tur-no-padding-left">
                                        <p class="tur-content-calendar-exc-price">
                                            <?php
                                            $date = get_field('date_start');
                                            if ($date) {
                                                ?>

                                                <?php
                                                $y = substr($date, 0, 4);
                                                $m = substr($date, 4, 2);
                                                $d = substr($date, 6, 2);
                                                $time = strtotime("{$d}-{$m}-{$y}");
                                                echo date('d', $time);
                                                echo " -";
                                                ?>

                                            <?php } ?>



                                            <?php
                                            $date = get_field('date_end');
                                            if ($date) {
                                                ?>
                                                <span>
                                                    <?php
                                                    $y = substr($date, 0, 4);
                                                    $m = substr($date, 4, 2);
                                                    $d = substr($date, 6, 2);
                                                    $time = strtotime("{$d}-{$m}-{$y}");
                                                    echo date('d.m.Y', $time);
                                                    ?>
                                                </span>
                                            <?php } ?>

                                        </p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 tur-content-calendar-exc-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <p><?php the_title(); ?></p>
                                        </a>
                                    </div>

                                </div>


                            <?php  }
                    endforeach;
                else : ?>
                        <p><?php echo __('На данный момент график пуст.', 'EutoTour'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>