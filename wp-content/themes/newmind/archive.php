<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('page'); ?>

	    <section class="categories" id="portfolio" >
        <div class="container">
            

		<?php if ( have_posts() ) : ?>

            <div class="row text-center">
       			<?php
					single_term_title( '<h2>', '</h2>' );
					the_archive_description( '<h4>', '</h4>' );
				?>
            </div>

            <div class="row">
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
 				// the_title();
 			?> 
                <div class="col-md-4 col-sm-6 portfolio-item">
 					<a href="<?php the_permalink() ?>" class="portfolio-link" >
                    <!-- <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal"> -->
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php 
				            // check if the post has a Post Thumbnail assigned to it.
		                    if ( has_post_thumbnail() ) {
		                      the_post_thumbnail('thumb360*280');
		                    }
						?>
<!--                         <img src="https://blackrockdigital.github.io/startbootstrap-agency/img/portfolio/roundicons.png" class="img-responsive" alt=""> -->
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php the_title(); ?></h4>
                        <p class="text-muted"><?php the_excerpt(); ?></p>
                    </div>
                </div>
			<?php
				// get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

            </div>
        </div>
        </section>


<?php get_footer(); ?>
