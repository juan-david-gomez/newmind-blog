<?php get_header('page'); ?>

    </section> 
			<!-- Main -->
				<section class="container-fluid bg_info"  >
					<div class="col-md-10 col-md-offset-1 ">

						<!-- Content -->
							<article class="panel">
								<!-- <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
								 -->

								<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
										
									<div class="img-post">
									<?php 
							            // check if the post has a Post Thumbnail assigned to it.
					                    if ( has_post_thumbnail() ) {
					                      the_post_thumbnail();
					                    }
									?>
									</div>
									<div class="panel-body">
										
										<!-- post -->
											<header>
												<h2><?php the_title(); ?></h2>
											</header>

											<section>
												<?php the_content(); ?>
											</section>
									</div>
								<?php endwhile; ?>
								<!-- post navigation -->
								<?php else: ?>
								<!-- no posts found -->
								<?php endif; ?>
							</article>

					</div>
				</section>
<?php get_footer(); ?>