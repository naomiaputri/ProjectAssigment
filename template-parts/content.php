<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Study_Class
 */
$editor		= get_field('editor');
$penulis	= get_field('penulis');
?>

<div class="flex flex-row items-center py-6 md:px-4 md:items-start ">
	<div class="flex flex-row">
	<div class="flex items-center w-1/2"><?php study_class_post_thumbnail(); ?></div>
    <div class="flex flex-col w-1/2 pl-4">
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
        <div class="flex flex-col">
        	<article class="leading-normal font-pt-sans text-sm text-left pt-2 pb-4 px-2  lg:px-0 xl:px-0">
				<div class="post-excerpt">
					<?php echo get_excerpt(250); ?>
				</div>
		
				<div class='leading-normal font-pt-sans text-base text-left pt-2 pb-4 px-2 capitalize'> Category : <?php the_category(', ')?> </div>
				<div class="flex flex-row">	
					<div class='flex leading-normal font-pt-sans text-base text-left pt-2 pb-4 px-2 capitalize'> Editor : 
					<?php echo $editor; ?> 
					</div>
					<div class='flex leading-normal font-pt-sans text-base text-left pt-2 pb-4 px-2 capitalize'> | Penulis : 
					<?php echo $penulis; ?> 
					</div>
				</div>
			</article>
   
		</div>
    </div>
	</div>
</div>



