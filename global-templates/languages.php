<?php
/**
 * USPs setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Get the three latest USPs
$languages = new WP_Query([
	'post_type' => 'us_language',
	'posts_per_page' => 10,
]);

// Did we get any USPs?
if ($languages->have_posts()) {
	// GREAT SUCCESS!
	?>
		<div class="wrapper" id="wrapper-languages">
			<div class="container col-md-4">
				<div class="row">
					<!-- Loop over the USPs -->
					<?php
						while ($languages->have_posts()) {
							$languages->the_post();
							?>
								<!-- For each USP, include a template part? -->
								<?php get_template_part('loop-templates/content', 'languages'); ?>
							<?php
						}

						// DON'T FORGET TO RESET POSTDATA!
						wp_reset_postdata();
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /#wrapper-usps -->
	<?php
}
