<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="content">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

		// End the loop.
		endwhile;
		?>

		<?php
			if(is_front_page()){
				require_once('inc/feed.php');
				?>
				<div id="corner_photo">
					<div id="vrbo_listing">
						<h4>Lagoon Point is listed at
							<a href="http://vrbo.com/282878" target="_blank">VRBO.com</a> #282878
						</h4>
						</div></div>
				<?php
			}
		?>

	</div><!-- .content-area -->

<?php get_footer(); ?>
