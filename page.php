<?php
/**
 * The main page post template 
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


?>

	<main <?php echo 'id="page-id-' .  $postID  . '"' ?>  class="mainContainer">
		<div class="container">
			<?php
			get_header();
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			else :
				_e( 'Sorry, no posts matched your criteria.', 'prokarpaty' );
			endif;
			?>
		</div><!-- /.container -->
		

	</main><!-- #main -->

<?php
get_footer();
?>