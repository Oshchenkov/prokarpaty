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
        <div class="container-fluid">
            <?php
            if (ICL_LANGUAGE_CODE=='ru') {
                $post = get_post(115); 
            } elseif (ICL_LANGUAGE_CODE=='uk') {
                $post = get_post(5702);
            } else {
                $post = get_post(115); 
            }
            ?>

            <?php the_field('main_head_slider_row1', $post); ?>
            <?php the_field('main_head_slider_row2', $post); ?>
        </div><!-- /.container-fluid -->

		<div class="container">
			<!-- <?php
			get_header();
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			else :
				_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
			endif;
			?> -->
        </div><!-- /.container -->
        

	</main><!-- #main -->

<?php
get_footer();
?>