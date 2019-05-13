<div class="reviews">
    <div class="container">
        <?php if (is_active_sidebar('reviews_show')) : ?>
            <?php dynamic_sidebar('reviews_show'); ?>
        <?php endif; ?>
    </div><!-- /.container -->
    <div class="container">
        <div class="row tur-ecs2-otz-block-btn">
            <div class="col-lg-3">
                <button class="btn btn-danger tur-ecs2-btn-view-otz" type="submit"><img src="/wp-content/themes/eurotourtheme3/images/tur-otz-text-btn.png" alt="text"> <?php echo __('Смотреть больше отзывов', 'EutoTour'); ?></button>
            </div>
            <div class="col-lg-6">
                <button class="btn btn-success tur-ecs2-btn-dob-otz" type="button" data-toggle="modal" data-target=".bs-example-modal-sm-otzyv"><?php echo __('Добавить отзыв', 'EutoTour'); ?></button>
            </div>
            <div class="modal fade bs-example-modal-sm-otzyv" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myLargeModalLabel"><?php echo __('Оставить отзыв', 'EutoTour'); ?></h4>
                            <div class="modal-body">
                                <?php if (is_active_sidebar('reviews_add')) : ?>
                                    <?php dynamic_sidebar('reviews_add'); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.reviews -->