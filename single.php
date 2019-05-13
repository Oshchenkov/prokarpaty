<?php
/**
 * The main single post template 
 *
 *
 * @package prokarpaty
 */

get_header();


while (have_posts()) :
    the_post();
    $postID = get_the_ID();
endwhile;
$post = get_post($postID);


$postCategories = wp_get_post_categories($postID);

if ( ! function_exists( 'awps_recursive_parse_args' ) ) {
    function awps_recursive_parse_args( $args, $defaults ) {
        $new_args = (array) $defaults;
 
        foreach ( $args as $key => $value ) {
            if ( is_array( $value ) && isset( $new_args[ $key ] ) ) {
                $new_args[ $key ] = awps_recursive_parse_args( $value, $new_args[ $key ] );
            }
            else {
                $new_args[ $key ] = $value;
            }
        }
 
        return $new_args;
    }
}

$cat_id = $postCategories[0];

// print_r( awps_recursive_parse_args( $postCategories, $defaults ));

// Hero Block
    if (ICL_LANGUAGE_CODE == 'ru') {
        $post = get_post(115); // Главный слайдер на всех страницах
    } elseif (ICL_LANGUAGE_CODE == 'uk') {
        $post = get_post(5702);
    } else {
        $post = get_post(115);
    }

    /* Category id (ru | uk)
    *
    * 40  | 63       tours-uzhorod
    * 113 | 112      excursions-europe
    * 52  | 71       calendar-of-tours
    * 3   | 68       excursions-uzhorod
    * 5   | 72       grafik-of-excursions-uzhorod
    * 18  | 73       active-rest-uzhorod
    * 19  | 83       services
    * 4   | 82       articles
    * 7   | 64       reviews
    * 
    */

    if ( ($cat_id == 113) || ($cat_id == 64) || ($cat_id == 68)|| ($cat_id == 82) || ($cat_id == 112) || ($cat_id == 799) ){
        $cat_hero_img   = 'slider_image_exs';
        $cat_hero_title = 'ecs_head_slider_row1';
        $cat_hero_desc  = 'ecs_head_slider_row2';
    } 
    elseif ( ($cat_id == 40) || ($cat_id == 63) ) {
        $cat_hero_img   = 'slider_image_tours';
        $cat_hero_title = 'tours_head_slider_row1';
        $cat_hero_desc  = 'tours_head_slider_row2';
    } 
    elseif ( ($cat_id == 71) || ($cat_id == 52) ){
        $cat_hero_img   = 'slider_image_tours_cal';
        $cat_hero_title = 'tours_cal_head_slider_row1';
        $cat_hero_desc  = 'tours_cal_head_slider_row2';
    } 
    elseif ( ($cat_id == 5) || ($cat_id == 72) ) {
        $cat_hero_img   = 'slider_image_calendar';
        $cat_hero_title = 'calendar_head_slider_row1';
        $cat_hero_desc  = 'calendar_head_slider_row2';
    } 
    elseif ( ($cat_id == 73) || ($cat_id == 18) ) {
        $cat_hero_img   = 'slider_image_rest';
        $cat_hero_title = 'rest_head_slider_row1';
        $cat_hero_desc  = 'rest_head_slider_row2';
    } 
    elseif  ( ($cat_id == 83) || ($cat_id == 19) ) {
        $cat_hero_img   = 'slider_image_uslugi';
        $cat_hero_title = 'service_head_slider_row1';
        $cat_hero_desc  = 'service_head_slider_row2';
    } 
    else {
        $cat_hero_img   = 'slider_image_exs';
        $cat_hero_title = 'ecs_head_slider_row1';
        $cat_hero_desc  = 'ecs_head_slider_row2';
    }

?>

<main <?php echo 'id="post-id-' .  $postID  . '"' ?> class="mainContainer">

    <div class="container-fluid catHero d-none d-lg-block">
        <img src="<?php  the_field($cat_hero_img); ?>" alt="catHero__img" class="catHero__img">
        <!-- <img src="https://prokarpaty-tour.info/wp-content/uploads/ekskursiiї.jpg" alt="catHero__img" class="catHero__img"> -->
        <div class=" catHero__container">
            <div class="container">
                <div class="catHero__title">
                    <?php  the_field($cat_hero_title); ?>
                </div><!-- /.catHero__title -->
                <div class="catHero__desc">
                    <?php  the_field($cat_hero_desc); ?>
                </div><!-- /.catHero__desc -->
            </div><!-- /.container -->
        </div><!-- /. -->
    </div><!-- /.container-fluid catHero -->

    <div class="container-fluid">
        <div class="container">
            <div class="breadcrumbWPML-nav">
                <?php do_action('icl_navigation_breadcrumb', ['separator']); ?>
            </div><!-- /.breadcrumbWPML-nav -->
        </div>
    </div>
    

    <?php
        $post = $wp_query->post;
 
        if (in_category('4')||in_category('82')){
            include(get_template_directory() .'/single-news.php');
        }
        elseif (in_category('40')||in_category('63')){
            include(get_template_directory() .'/single-tours.php');
        }
        else{
            include(get_template_directory() .'/single-default.php');
        }
    ?>


    

</main><!-- #main -->

<?php
get_footer();
?>