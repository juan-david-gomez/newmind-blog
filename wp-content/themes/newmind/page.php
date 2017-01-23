<?php get_header('page'); ?>

			<!-- Main -->
				<section class="container-fluid bg_info"  >
					<div class="col-md-10 col-md-offset-1 ">

						<!-- Content -->
							<article class="panel">
								<div class="panel-body">
									
								<!-- <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
								 -->

									<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<!-- post -->
										<header>
											<h2><?php the_title(); ?></h2>
										</header>

										<section>
											<?php the_content(); ?>
										</section>
									<?php endwhile; ?>
									<!-- post navigation -->
									<?php else: ?>
									<!-- no posts found -->
									<?php endif; ?>
								</div>
							</article>

					</div>
				</section>
<?php get_footer(); ?>