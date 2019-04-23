<div class="wrapper-portfolio col-md-6 col-lg-4">
	<article class="portfolio">
		<header>
			<?php if (has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('portfolio-thumbnail', ['class' => 'img-fluid']); ?>
				</a>
			<?php endif; ?>

			<h1><?php the_title(); ?></h1>
		</header>

		<main>
			<?php the_excerpt(); ?>
		</main>

		<footer>
			<?php
				if ($client = get_post_meta(get_the_ID(), 'client', true)) {
					printf(__('<div class="client">Client: %s</div>', 'understrap'), $client);
				}
			?>

			<div class="branch">
				<?php
					the_terms(
						get_the_ID(),
						'us_portfolio_branch',
						__('Branch: ', 'understrap')
					);
				?>
			</div><!-- /.branch -->
		</footer>
	</article>
</div>