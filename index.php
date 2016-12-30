	<?php get_header(); ?>


				<!-- Main -->
					<div id="main">
						<?php if(have_posts()) : ?>
							<?php while(have_posts()) : the_post();?>
								<article class="thumb">
									<a href='<?php echo the_post_thumbnail_url(); ?>' class="image"><img src='<?php echo the_post_thumbnail_url('thumbnail'); ?>' alt="<?php the_title(); ?>" /></a>
									<h2><?php the_title(); ?></h2>
									<p><?php the_excerpt(); ?></p>
								</article>
							<?php endwhile; ?>
			      <?php endif; ?>
					</div>

	<?php get_footer(); ?>
