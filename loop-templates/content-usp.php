<div class="col-md">
	<div class="usp">
		<?php
			if ($icon = get_post_meta(get_the_ID(), 'icon', true)) {
				?>
					<span class="fa <?php echo $icon; ?> fa-3x"></span>
				<?php
			}
		?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

		<?php
			$link = get_post_meta(get_the_ID(), 'link', true);
			if ($link) {
				?>
					<a href="<?php echo $link; ?>" class="btn btn-secondary">
						<?php _e('Read more', 'understrap'); ?>
					</a>
				<?php
			}
		?>
	</div>
</div>
