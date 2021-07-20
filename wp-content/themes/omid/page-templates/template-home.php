<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="home-hero-banner-top">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-7">
				<div class="skip-bin-info-holder">
					<div class="overlay-image-arrow">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-arrow-up.svg" alt="Arrow up West Coast">
					</div>
				<div class="title">
						<i class="fa fa-arrow-circle-up"></i> SKip Bin instant quote
					</div>
					<div class="desc">
						simply type your suburb above and you will be provided with an instant
					</div>
				</div>
			</div>

			<div class="col-lg-4 offset-xl-1">
				<div class="seven-day-skip-info">
					<img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/home-hero-right-info.svg" alt="West coast info">
					<div class="title">
						7-Day skip bin hire diret to your covering perth to Albany
					</div>	
				</div>
		
			</div>
		</div>

		<div class="home-hero-slider">
			<div class="slider">
				<div class="slide-wrapper">
					<div class="slide">
						<div class="image">
							</div>
			
						<div class="entry-content">
							<div class="icon">
								<img  src="<?php echo get_template_directory_uri() ?>/img/home-slider-truck.svg" alt="truck">
							</div>
							<div class="info">
								we deliver the right skip bin for your residential and
							commercial projects.
							</div>

							<div class="slider-nav">
								<a href="#"><i class="fa fa-arrow-circle-left"></i></a>
								<a href="#"><i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="home-product-info">
	<div class="home-special-offer-background-overlay">
		<div class="container">
			<div class="home-special-offer">
				<div class="discount-circle">
					<div class="abs-holder">
						<div class="save">Save</div>
						<div class="percent">20%</div>
					</div>
				</div>
				<div class="entry-content">
					<div class="title">15 Day Store Special on 9m3 Skip Bins</div>
					<div class="desc">BIN SERVICES - Perth , Fremantle, Kwinana, Rockingham, Mandurahm, Pinjarra, Waroona, Harbey Australind, Bunbury, Busselton, Margert River</div>
					<a  herf="#" class="button">find information </a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="home-product-holder">
		<div class="container">
			<h2> <i class="fa fa-arrow-circle-down"></i> Select the right bin for your projects</h2>
			<div class="home-products">
				<div class="home-product">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="product placeholder">
						</div>
						<div class="col-xl-4 col-md-6">
							<div class="title">4 Cubic Metre Skip</div>
							<ul>
								<li>Garden & Household clean-up</li>
								<li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
								<li>Heavy Loads (dirt, bricks or rubble)</li>
								<li>Heavy Loads </li>
							</ul>
						</div>
						<div class="col-xl-4 col-lg-12">
							<div class="home-product-circles">
								<div class="row">
									<div class="offset-md-2 offset-lg-3 offset-xl-0 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="circle">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 4 trailers
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-slider-truck-copy.svg" alt="Product Trailer">
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-3 col-md-4  col-sm-6  col-6">
										<div class="circle">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 16 wheelie bins
												</div> 
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="bin">
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="abs-holder-button">
						get a quote for this skip bin
					</div>
				</div>

				<div class="home-product">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="product placeholder">
						</div>
						<div class="col-xl-4 col-md-6">
							<div class="title">4 Cubic Metre Skip</div>
							<ul>
								<li>Garden & Household clean-up</li>
								<li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
								<li>Heavy Loads (dirt, bricks or rubble)</li>
								<li>Heavy Loads </li>
							</ul>
						</div>
						<div class="col-xl-4 col-lg-12">
							<div class="home-product-circles">
								<div class="row">
									<div class="offset-md-2 offset-lg-3 offset-xl-0 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="circle">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 4 trailers
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-slider-truck-copy.svg" alt="Product Trailer">
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-3 col-md-4  col-sm-6  col-6">
										<div class="circle">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 16 wheelie bins
												</div> 
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="bin">
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="abs-holder-button">
						get a quote for this skip bin
					</div>
				</div>

				<div class="home-product">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="product placeholder">
						</div>
						<div class="col-xl-4 col-md-6">
							<div class="title">4 Cubic Metre Skip</div>
							<ul>
								<li>Garden & Household clean-up</li>
								<li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
								<li>Heavy Loads (dirt, bricks or rubble)</li>
								<li>Heavy Loads </li>
							</ul>
						</div>
						<div class="col-xl-4 col-lg-12">
							<div class="home-product-circles">
								<div class="row">
									<div class="offset-md-2 offset-lg-3 offset-xl-0 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="circle">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 4 trailers
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-slider-truck-copy.svg" alt="Product Trailer">
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-3 col-md-4  col-sm-6  col-6">
										<div class="circle">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 16 wheelie bins
												</div> 
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="bin">
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="abs-holder-button">
						get a quote for this skip bin
					</div>
				</div>

				<div class="home-product">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="product placeholder">
						</div>
						<div class="col-xl-4 col-md-6">
							<div class="title">4 Cubic Metre Skip</div>
							<ul>
								<li>Garden & Household clean-up</li>
								<li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
								<li>Heavy Loads (dirt, bricks or rubble)</li>
								<li>Heavy Loads </li>
							</ul>
						</div>
						<div class="col-xl-4 col-lg-12">
							<div class="home-product-circles">
								<div class="row">
									<div class="offset-md-2 offset-lg-3 offset-xl-0 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="circle">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 4 trailers
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-slider-truck-copy.svg" alt="Product Trailer">
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-3 col-md-4  col-sm-6  col-6">
										<div class="circle">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 16 wheelie bins
												</div> 
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="bin">
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="abs-holder-button">
						get a quote for this skip bin
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php
get_footer();