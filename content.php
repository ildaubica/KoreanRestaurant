<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KoreanCuisine
 */
global $item_number
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">
		<?php
			the_title();
			?>
		</h1>
		
		<!--here we grab our food menu item number -->
		<div class="entry-number">
		<span>
			<?php echo $item_number; ?>
		</span>
		</div>
		
		<div class="entry-price">
		<?php
			the_content();
			?>
		</div>
	</header><!-- .entry-header -->

	<?php koreancuisine_post_thumbnail(); ?>


</article><!-- #post-<?php the_ID(); ?> -->
