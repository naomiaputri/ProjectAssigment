<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Study_Class
 */


 
get_header();
?>


<div class="flex flex-col mx-auto w-full max-w-xl border-b-1 border-gray-15 mb-8">
      <div class="flex flex-col md:px-0">
        <div class="flex flex-wrap font-pt-sans text-3xl text-pink-darker font-bold py-4">Lets Go</div>
        <div class="border-2 border-yellow-buttercup w-16"></div>
      </div>
    <div class="flex flex-row flex-wrap">

	
	
		<?php
		if ( have_posts() ) :
			
			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
		
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_pagination(
				array(
					'mid_size' 	=> 2, 
					'prev_text'	=> __( 'sebelumnya','textmain'),
					'next_text'	=> __( 'selanjutnya','textmain')
	
				)
			);
		else :

			get_template_part( 'template-parts/content', 'none' );
		
		

		endif;
		?>


</div>
  </div>
</div>

<?php
get_footer();
