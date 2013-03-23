<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Site Front Page
 *
 * Note: You can overwrite front-page.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /responsive-child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes and
 *                 http://themeid.com/forum/topic/505/child-theme-example/
 *
 * @file           front-page.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/front-page.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */

/**
 * Globalize Theme Options
 */
global $responsive_options;
$responsive_options = responsive_get_options();

/**
 * If front page is set to display the
 * blog posts index, include home.php;
 * otherwise, display static front page
 * content
 */
if ( 'posts' == get_option( 'show_on_front' ) ) {
	get_template_part( 'home' );
} else if ( 'default' != get_post_meta( get_option( 'page_on_front' ), '_wp_page_template', true ) ) {
	locate_template( get_post_meta( get_option( 'page_on_front' ), '_wp_page_template', true ), true );
} else { 

	get_header(); 
	?>

	<div id="featured" class="grid col-940">

		<div class="grid col-460">

			<h1 class="featured-title"><?php echo $responsive_options['home_headline']; ?></h1>

			<h2 class="featured-subtitle"><?php echo $responsive_options['home_subheadline']; ?></h2>

			<p><?php echo $responsive_options['home_content_area']; ?></p>

			<?php if ($responsive_options['cta_button'] == 0): ?>  
   
				<div class="call-to-action">

					<a href="<?php echo $responsive_options['cta_url']; ?>" class="blue button">
						<?php echo $responsive_options['cta_text']; ?>
					</a>

				</div><!-- end of .call-to-action -->

			<?php endif; ?>         
			
		</div><!-- end of .col-460 -->

		<div id="featured-image" class="grid col-460 fit"> 

			<?php echo do_shortcode( $responsive_options['featured_content'] ); ?>

		</div><!-- end of #featured-image --> 

	</div><!-- end of #featured -->

		<div id="content-blog-home">

		<div class="grid col-620">
	<?php get_template_part( 'loop-header' ); ?>
			
	<?php 
	global $wp_query, $paged;
	$paged = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 );
	$blog_query = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged ) );
	$temp_query = $wp_query;
	$wp_query = null;
	$wp_query = $blog_query;

	if ( $blog_query->have_posts() ) :

			while ( $blog_query->have_posts() ) : $blog_query->the_post(); 
				?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>       
				<?php responsive_entry_top(); ?>

				<?php get_template_part( 'post-meta' ); ?>

				<div class="post-entry">
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php the_post_thumbnail(); ?>
						</a>
					<?php endif; ?>
					<?php the_excerpt(); ?>
					<?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
				</div><!-- end of .post-entry -->

				<?php get_template_part( 'post-data' ); ?>

				<?php responsive_entry_bottom(); ?>      
			</div><!-- end of #post-<?php the_ID(); ?> -->       
			<?php responsive_entry_after(); ?>
			
        <?php 
		endwhile; 

        if (  $wp_query->max_num_pages > 1 ) : 
			?>
			<div class="navigation">
				<div class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'responsive' ), $wp_query->max_num_pages ); ?></div>
				<div class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'responsive' ), $wp_query->max_num_pages ); ?></div>
			</div><!-- end of .navigation -->
			<?php 
		endif;

	else : 

		get_template_part( 'loop-no-posts' ); 

	endif; 
	$wp_query = $temp_query;
	wp_reset_postdata();
	?>

		</div><!-- end of .grid col-620-->

		<?php get_sidebar(); ?> 

		</div><!-- end of #content-blog-home -->

	<?php 
	get_sidebar('home');
	get_footer(); 
}
?>