<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<figure class="woocommerce-product-gallery__wrapper">
		<?php
		if ( $post_thumbnail_id ) {
			$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
		} else {
			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			$html .= '</div>';
		}

		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

		do_action( 'woocommerce_product_thumbnails' );
		?>
	</figure>
	<div class="product-image-instant-quote-holder">
		<div class="title">
			instant element
		</div>
		<div class="desc">Sed at leo id tellus laoreet vehicula. Etiam aliquet ligula eget posuere sollicitudin. Nam imperdiet eleifend purus sit amet pretium. Nunc scelerisque magna justo, eu faucibus risus consectetur non. Suspendisse id mollis lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam mattis</div>
		<!-- <div class="product-price-holder">
			<?php echo $product->get_price_html(); ?> <div class="inc-gst">inc. GST</div>
		</div> -->
		<?php
			$available_variations = $product->get_available_variations();
			$attributes = $product->get_variation_attributes();

			$attribute_keys  = array_keys( $attributes );
			$variations_json = wp_json_encode( $available_variations );
			$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );

			do_action( 'woocommerce_before_add_to_cart_form' ); ?>

			<form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
				<?php do_action( 'woocommerce_before_variations_form' ); ?>

				<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
					<p class="stock out-of-stock"><?php echo esc_html( apply_filters( 'woocommerce_out_of_stock_message', __( 'This product is currently out of stock and unavailable.', 'woocommerce' ) ) ); ?></p>
				<?php else : ?>
					<table class="variations" cellspacing="0">
						<tbody>
							<?php foreach ( $attributes as $attribute_name => $options ) : ?>
								<tr>
									<td class="label"><label for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>"><?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?></label></td>
									<td class="value">
										<?php
											wc_dropdown_variation_attribute_options(
												array(
													'options'   => $options,
													'attribute' => $attribute_name,
													'product'   => $product,
												)
											);
											echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) ) : '';
										?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>

					<div class="single_variation_wrap">
						<?php
							/**
							 * Hook: woocommerce_before_single_variation.
							 */
							do_action( 'woocommerce_before_single_variation' );

							/**
							 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
							 *
							 * @since 2.4.0
							 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
							 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
							 */
							do_action( 'woocommerce_single_variation' );

							/**
							 * Hook: woocommerce_after_single_variation.
							 */
							do_action( 'woocommerce_after_single_variation' );
						?>
					</div>
				<?php endif; ?>

				<?php do_action( 'woocommerce_after_variations_form' ); ?>
			</form>

			<?php
			do_action( 'woocommerce_after_add_to_cart_form' );

		?>
	</div>

</div>
