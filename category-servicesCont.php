<?php
while (have_posts()) :
    the_post();
    $postID = get_the_ID();
endwhile;
$post = get_post($postID);
?>
<div class="container-fluid services">
    <div class="container">
        <?php if (get_field('service1') != "") { ?>
            <div class="row tur-about-content-part-margin">
                <div class="col-lg-3 tur-about-content-part-img-block">
                    <img src="<?php the_field('service_img1'); ?>" class="img-responsive" alt="part1">
                    <div class="tur-about-part-img-on-block">
                        <p class="tur-about-part-img-on-dig">1</p>
                    </div>
                </div>
                <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('service1'); ?></div>
            </div>
        <?php } ?>
        <?php if (get_field('service2') != "") { ?>
            <div class="row tur-about-content-part-margin">
                <div class="col-lg-3 tur-about-content-part-img-block">
                    <img src="<?php the_field('service_img2'); ?>" class="img-responsive" alt="part2">
                    <div class="tur-about-part-img-on-block">
                        <p class="tur-about-part-img-on-dig">2</p>
                    </div>
                </div>
                <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('service2'); ?></div>
            </div>
        <?php } ?>
        <?php if (get_field('service3') != "") { ?>
            <div class="row tur-about-content-part-margin">
                <div class="col-lg-3 tur-about-content-part-img-block">
                    <img src="<?php the_field('service_img3'); ?>" class="img-responsive" alt="part3">
                    <div class="tur-about-part-img-on-block">
                        <p class="tur-about-part-img-on-dig">3</p>
                    </div>
                </div>
                <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('service3'); ?></div>
            </div>
        <?php } ?>
        <?php if (get_field('service4') != "") { ?>
            <div class="row tur-about-content-part-margin">
                <div class="col-lg-3 tur-about-content-part-img-block">
                    <img src="<?php the_field('service_img4'); ?>" class="img-responsive" alt="part4">
                    <div class="tur-about-part-img-on-block">
                        <p class="tur-about-part-img-on-dig">4</p>
                    </div>
                </div>
                <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('service4'); ?></div>
            </div>
        <?php } ?>
        <?php if (get_field('service5') != "") { ?>
            <div class="row tur-about-content-part-margin">
                <div class="col-lg-3 tur-about-content-part-img-block">
                    <img src="<?php the_field('service_img5'); ?>" class="img-responsive" alt="part5">
                    <div class="tur-about-part-img-on-block">
                        <p class="tur-about-part-img-on-dig">5</p>
                    </div>
                </div>
                <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('service5'); ?></div>
            </div>
        <?php } ?>
        <?php if (get_field('service6') != "") { ?>
            <div class="row tur-about-content-part-margin">
                <div class="col-lg-3 tur-about-content-part-img-block">
                    <img src="<?php the_field('service_img6'); ?>" class="img-responsive" alt="part6">
                    <div class="tur-about-part-img-on-block">
                        <p class="tur-about-part-img-on-dig">6</p>
                    </div>
                </div>
                <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('service6'); ?></div>
            </div>
        <?php } ?>
        <?php if (get_field('service7') != "") { ?>
            <div class="row tur-about-content-part-margin">
                <div class="col-lg-3 tur-about-content-part-img-block">
                    <img src="<?php the_field('service_img7'); ?>" class="img-responsive" alt="part7">
                    <div class="tur-about-part-img-on-block">
                        <p class="tur-about-part-img-on-dig">7</p>
                    </div>
                </div>
                <div class="col-lg-9 tur-about-content-part-desc-block tur-about-content-part-desc"><?php the_field('service7'); ?></div>
            </div>
        <?php } ?>
    </div>
</div>