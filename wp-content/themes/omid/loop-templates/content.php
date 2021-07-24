<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


	<div class="archive-post-image"
		<?php if ( has_post_thumbnail() ) { ?>
			style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"
		<?php } ?> >
	</div>

	<div class="article-body-holder">

		<header class="entry-header">

			<?php
			the_title(
				sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);
			?> 

		</header><!-- .entry-header -->


		<div class="entry-content">

			<?php the_post_summary(); ?>

			<!-- <?php
			// wp_link_pages(
			// 	array(
			// 		'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			// 		'after'  => '</div>',
			// 	)
			// );
			?> -->

		</div><!-- .entry-content -->

		<div class="entry-metadata">
		
				<a href="<?php the_permalink(); ?>" class="button outline" >Read More</a>
				<div class="date">
					<i class="fa fa-calendar"></i>   <?php echo get_the_date("d.m.Y"); ?>
				</div>
		</div> 


		<!-- <footer class="entry-footer"> -->

			<!-- <?php understrap_entry_footer(); ?> -->

		<!-- </footer>.entry-footer -->
		
	</div>
	
</article><!-- #post-## -->
