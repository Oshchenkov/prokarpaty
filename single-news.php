<div class="container-fluid">
    <div class="container">
        <div class="row linkInArticles text-center">
        <?php
        if (ICL_LANGUAGE_CODE == 'ru') {
            $articleLinkHref = 'https://prokarpaty-tour.info/ru/category/grafik-of-excursions-uzhorod/';
            $articleLinkText = 'График ежедневных экскурсий по Закарпатью и в Европу из Ужгорода и Мукачево';
        } elseif (ICL_LANGUAGE_CODE == 'uk') {
            $articleLinkHref = 'https://prokarpaty-tour.info/uk/category/grafik-of-excursions-uzhorod-uk/';
            $articleLinkText = 'Графік щоденних екскурсій по Закарпаттю та в Європу з Ужгорода і Мукачево';
        } else {
            $articleLinkHref = 'https://prokarpaty-tour.info/ru/category/grafik-of-excursions-uzhorod/';
            $articleLinkText = 'График ежедневных экскурсий по Закарпатью и в Европу из Ужгорода и Мукачево';
        } ?>
            <a class="linkInArticles__p" href="<?php echo $articleLinkHref;  ?>" target="_blank"><?php echo $articleLinkText;  ?></a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class=" tur-news-title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="row">
            <div class="col-12">
                <?php the_content(); ?>
            </div><!-- /.col-12 -->
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="breadcrumbWPML-nav">
            <?php do_action('icl_navigation_breadcrumb', ['separator']); ?>
        </div><!-- /.breadcrumbWPML-nav -->
    </div>
</div>