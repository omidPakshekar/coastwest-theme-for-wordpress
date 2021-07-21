<?php
/**
 * Template Name: template contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

// if ( is_front_page() ) {
// 	get_template_part( 'global-templates/hero' );
// }
// ?>

<div class="page-header-holder">
	<div class="container">
		<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		</header><!-- .entry-header -->
	</div>
</div>


<div class="wrapper template-contact-us" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

            <div class="col-lg-7">
				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main><!-- #main -->

			</div><!-- col-lg-7 -->
            
            <div class="offset-lg-1 col-lg-4">
                    <div class="iframe-holder">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101636.87072383083!2d49.65640278304627!3d37.24409597490786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ff5620d43f15675%3A0x41dd40f9931cfbf6!2z2LHYtNiq2Iwg2KfYs9iq2KfZhiDar9uM2YTYp9mG!5e0!3m2!1sfa!2s!4v1626858994175!5m2!1sfa!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="iframe-holder">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.5852291581655!2d49.5715687869043!3d37.25754724952507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ff56302f17f9665%3A0x1a99c4a4c21a847b!2z2KfYs9iq2KfZhiDar9uM2YTYp9mGINix2LTYqiDYtNuM2YjZhiDZgdmI2YXZhtuMINin2YbYqtmH2KfbjCDYp9iz2KfbjNi0INuzINmG2KjYtCDaqdmI2obZhyDbuA!5e0!3m2!1sfa!2s!4v1626860295058!5m2!1sfa!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
                    <div class="iframe-holder">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101636.87072383083!2d49.65640278304627!3d37.24409597490786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ff5620d43f15675%3A0x41dd40f9931cfbf6!2z2LHYtNiq2Iwg2KfYs9iq2KfZhiDar9uM2YTYp9mG!5e0!3m2!1sfa!2s!4v1626858994175!5m2!1sfa!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

            </div>
		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();