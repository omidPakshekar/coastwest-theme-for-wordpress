<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="footer-we-accept">
		<div class="container">
			<div class="title-holder">
				<h2>we accept the following wast</h2>
				<div class="button-holder top">
					<a href="" class="button outline">read the full list of acceptable waste</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="circle">
						<div class="abs-holder">
							<img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-11.svg" alt="We accept waste">
							<div class="title">
								Commercial waste
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle">
						<div class="abs-holder">
							<img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-11.svg" alt="We accept waste">
							<div class="title">
								Commercial waste
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle">
						<div class="abs-holder">
							<img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-11.svg" alt="We accept waste">
							<div class="title">
								Commercial waste
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle">
						<div class="abs-holder">
							<img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-11.svg" alt="We accept waste">
							<div class="title">
								Commercial waste
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="button-holder top">
				<a href="" class="button outline">read the full list of acceptable waste</a>
			</div>
		</div>
	</div>


<div class="wrapper" id="wrapper-footer">

    <div class="footer-testimonial">
        <div class="container">
            <div class="testimonial">
                <div class="stars">
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                    <i class="fa fa-star"> </i>
                </div>
                <div class="quote">
                    amazing customer service and very good price will be definetly getting another one through ghese guys when need to much help thankyou
                </div>
                <div class="author">
                    Damon, facebook review
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer-contact-info">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title">Wantto know more?</div>
                    <div class="desc"> Cody takes Barbara to be repaired and learns they have more in common than she thought.</div>
                    <div class="contact-info">
                        <div class="phone"> <i class="fa fa-phone"></i>call today 09382162999</div>
                        <div class="email"><i class="fa fa-envelope-o"></i>omid.pakshekar.est@gmail.com</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-holder">
                        <?php echo do_shortcode('[contact-form-7 id="27" title="Footer Contact Form"]')  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            copyright west coast waste 2020 <span>//</span> <a href="#"> Term and condition</a> <span>//</span> <a href="#">website by moshi moshi</a>
        </div>
    </div>

</div>


<?php wp_footer(); ?>

</body>

</html>
