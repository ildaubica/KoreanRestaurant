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
 * @package KoreanCuisine
 */

get_header();
?>

	<main id="main" class="site-main">
	
	<?php query_posts('posts_per_page=1&category_name=menu&orderby=rand'); ?>
	<?php if (have_posts() ): while ( have_posts() ) : the_post(); ?>
	<div class="hero">
		<div class="hero-inner container">
			<h1 class="hero-text lowercase">
				<!-- here we use the template tag to grab the site name -->
				<span class="hero-sitename"><?php bloginfo('name'); ?></span> <?php the_title(); ?>
			</h1>
			<p class="hero-description lowercase">
				<span class="magenta"><?php bloginfo('name'); ?></span> <?php
				bloginfo('description') ?>.
			</p>
		</div>
	</div>
	
	<?php
	endwhile;
	endif;
	?>
	
	<!--  here we query for our new intro category post and get just one single post-->
	<?php query_posts('posts_per_page=1&post_type=intro'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- our intro element, make it dynamic -->
	<div class="intro" id="intro">
		<div class="intro-inner">
			<h2 class="intro-title"><?php the_title(); ?></h2>
			<div class="intro-description">
			<?php the_content(); ?>
			</div>
		</div>
	</div>
	
	<?php
	endwhile;
	endif;
	?>
	
		<div class="section-heading" id="food">
			<?php get_category_description('category_name=menu'); ?>
			Menu | 메뉴
		</div> 
	
	
		<div class="grid">
		<?php
		query_posts('posts_per_page=20&category_name=menu');
		if ( have_posts() ) :
		$item_number = 1;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				 
				
				get_template_part( 'template-parts/content', get_post_type() );
				$item_number++;
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
		</div>
		
		<div class="section-heading" id="locations">
			<?php get_category_description('post_type=location'); ?>
			Directions to Korean Cuisine Restaurant | 한식 레스토랑까지의 길 안내
		</div>
		
		<div class="locations">
		<!--  here we query for our location post -->
			<?php query_posts('posts_per_page=1&post_type=location'); ?>
			<!--  then we loop over -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<!-- each individual location -->
			<div class="location grid">
			<!-- our map on the left -->
				<div class="map">
					<div class="map-inner">
					<?php if( get_field('map') ): ?>
					<!--if it is, output here -->
						<?php the_field('map'); ?>
					<?php endif; ?>
					
					</div>
				</div>
				
				<div class="location-info">
					<div class="location-description">
					<!-- our location text goes in here -->
					<?php the_content(); ?>

					</div>
				</div>
				
			 </div>
			<?php endwhile; endif; ?>
		</div>
		
	</main><!-- #main -->

<?php

get_footer();
