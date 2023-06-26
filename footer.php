<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KoreanCuisine
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			
			<!--copyright info, current year -->
			<div class="footer-copyright">
				&copy;<?php echo date("Y"); ?>  Korean Cuisine Restaurant. All Rights Reserved.
			</div> 
		
			<!--social media links -->
			<div class="footer-social">
				<a href="https://facebook.com/koreancuisinerestaurant" class="social-link">
					<img src="<?php bloginfo('template_url'); ?>/ass/facebook-icon.svg">
				</a>
				
				<a href="https://instagram.com/koreancuisinerestaurant" class="social-link">
					<img src="<?php bloginfo('template_url'); ?>/ass/instagram-icon.svg">
				</a>
				
			</div>
			
			</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
