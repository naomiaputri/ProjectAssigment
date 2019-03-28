<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Study_Class
 */

get_header();
?>
<div class="flex flex-row">
	<div id="primary" class="content-area lg:w-2/3 xl:w-2/3 flex flex-col border-r border-pink-darker pr-4 mb-6">
		<main id="main" class="site-main">



		<div class="flex flex-row lg:flex-col items-center py-6 md:px-4 md:items-start">
			<div class="flex items-center"><?php study_class_post_thumbnail(); ?></div>
		    <div class="flex flex-col pl-4">
		        <div class="flex flex-col items-center justify-center">
					<a class="text-black no-underline" href="#">
		            	<div class="flex flex-wrap font-chronicle-display py-4 text-xl leading-tight text-center px-2 md:px-0 lg:px-0 xl:px-0"><?php if ( is_singular() ) :
								the_title( '<h1 class="entry-title">', '</h1>' );
							else :
								the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							endif; ?>
						</div>
		            </a>
		            <div class="flex flex-row">
						<?php echo get_the_date();?>
		            </div>
		        </div>
		        <div class="flex">
		        	<article class="leading-normal font-pt-sans text-base text-left pt-2 pb-4 px-2  lg:px-0 xl:px-0"><?php the_excerpt(); ?></article>
		        </div>
		    </div>
		</div>
						
	<div class="text-sm text-pink-darker bg-pink-lightest m-4 p-4">
		<?php
		while ( have_posts() ) :

			the_post();

			the_tags();

		endwhile; // End of the loop.
		?>
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="w-1/3 text-base px-8 pt-6 font-georgia text-pink-darkest">
	<?php get_sidebar(); ?>
	</div>

</div>

<?php
get_footer();
