<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="post-header-holder"
	<?php if (has_post_thumbnail() ) { ?>
		style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"
	<?php } ?>
	>
	<div class="container">
		<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		</header><!-- .entry-header -->
	</div>
</div>


<div class="post-header-metadata">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<i class="fa fa-calendar"></i> Post Date: <?php echo get_the_date("d.m.Y"); ?>
			</div>
			<div class="col-lg-6">
				<i class="fa fa-bars"></i> Post Category: <?php echo get_the_category()[0]->cat_name; ?>
			</div>
		</div>
	</div>
</div>


<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<div class="col-lg-7">
				<main class="site-main" id="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'single' );
						understrap_post_nav();

						// // If comments are open or we have at least one comment, load up the comment template.
						// if ( comments_open() || get_comments_number() ) {
						// 	comments_template();
						// }
					}
					?>

				</main><!-- #main -->
			</div>

			<div class="offset-lg-1 col-lg-4">
				<div class="right-sidebar-blog-categories">
					<h3>Blog Categories</h3>
					<ul>
						<li>Garden & Household clean-up</li>
						<li>Garden & Household clean-up</li>
						<li>Garden & Household clean-up</li>
						<li>Garden & Household clean-up</li>
						<li>Garden & Household clean-up</li>
						<li>Garden & Household clean-up</li>
					</ul>
				</div>
			</div>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
