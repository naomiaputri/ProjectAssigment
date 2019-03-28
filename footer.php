<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Study_Class
 */

?>

	</div><!-- #content -->

	<footer id="myFooter" class="footer">
		<div class="flex flex-row w-full justify-between px-12">
		  <div class="flex justify-start"> 
		 	 <?php echo "Copyright © " . (int)date('Y') . "   |  By : NAP"; ?>
		  </div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
