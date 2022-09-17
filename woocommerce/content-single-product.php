<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;


global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

    <?php

	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

    <div class="summary entry-summary">
        <?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
    </div>


    <?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	// do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php  
	$download = get_field('navod_na_rozlozenie_stromceka');
	// var_dump(	$download);
?>
 

<div class="woocommerce-tabs wc-tabs-wrapper">
    <ul class="tabs wc-tabs" role="tablist">
        <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
            <a href="#tab-description">
                Popis </a>
        </li>
   
		<?php if($download): ?>
		<li class="additional_information_tab" id="tab-title-tab-manual" role="tab"
            aria-controls="tab-manual">
            <a href="#tab-manual">
				Návod  </a>
        </li>
		<?php endif; ?>

		 
    </ul>

    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="">

		<?php the_content() ?>
    </div>
 
  
	<?php if($download): ?>
		<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab"
			id="tab-manual" role="tabpanel" aria-labelledby="tab-title-tab-manual"
			style="display: none;">
			<a href="<?php echo $download['url']; ?>" target="_blank" class="text-center" style=" text-decoration: none; display:flex; " >
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 489 489" style="enable-background:new 0 0 489 489; width: 30px; margin-right: 13px;" xml:space="preserve"> <g> <g> <path d="M329.2,327.2c-4.5,0-8.1,3.4-8.6,7.9c-3.9,38.6-36.5,68.7-76.2,68.7c-39.6,0-72.2-30.1-76.2-68.7    c-0.5-4.4-4.1-7.9-8.6-7.9h-104c-21.8,0-39.5,17.7-39.5,39.5v82.8c0,21.8,17.7,39.5,39.5,39.5h377.8c21.8,0,39.5-17.7,39.5-39.5    v-82.7c0-21.8-17.7-39.5-39.5-39.5H329.2V327.2z"/> <path d="M303.5,198.6l-30.9,30.9V28.1C272.6,12.6,260,0,244.5,0l0,0c-15.5,0-28.1,12.6-28.1,28.1v201.4l-30.9-30.9    c-9.5-9.5-24.7-11.9-35.9-4.4c-15.3,10.2-16.8,31.1-4.5,43.4l82.8,82.8c9.2,9.2,24.1,9.2,33.3,0l82.8-82.8    c12.3-12.3,10.8-33.2-4.5-43.4C328.2,186.6,313,189,303.5,198.6z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
				<span>
						<strong><?php echo $download['title']; ?></strong> 	<br>
						<?php echo $download['filename']; ?> <span>(<?php echo size_format( filesize( get_attached_file( $download['id'] ) ), 2 ); ?>)</span>
				</span> 
				 
			</a>
		</div>
	<?php endif; ?>


</div>

<h3>Parametre</h3>
<div class="properties-wrap">

		 

			<?php  


// echo 'Ahoj';
				$vars = $product->get_available_variations();

				// echo get_post_meta( $var_id, "custom_field", true );



				// {{{ data.variation.custom_field }}}

 

				// var_dump(get_post_meta(get_the_id(),'custom_field',true););
			 
					// $vyska[] = array();
					// $vaha[] = array();
					// $pocet_korun[] = array();
					// $vyska_od_zeme[] = array();
					// $pocet_konarov[] = array();
					// $pocet_vetviciek[] = array();
					// $stojan[] = array();
					// $priemer[] = array();

					// echo '<pre>' . var_export($vars[0]['attributes']['attribute_pa_vyska'], true) . '</pre>';

 
					// var_dump($vars);

					foreach ($vars as $key => $val) {
						// var_dump($val);
						if($val['attributes']) {
							$vyska[] =  $val['attributes']['attribute_pa_vyska']; 
							// var_dump($val['attribute_pa_vyska']);
						}
						else {
							$vyska[$key] = '&nbsp;'; 
						}
						if($val['weight']!='') {
							$vaha[$key] = $val['weight']; 
						}
						else {
							$vaha[$key] = '&nbsp;'; 
						}
						if($val['pocet_korun']!='') {
							$pocet_korun[$key] = $val['pocet_korun']; 
						}
						// else {
						// 	$pocet_korun[$key] = '&nbsp;'; 
						// }
						if($val['vyska_od_zeme']!='') {
							$vyska_od_zeme[$key] = $val['vyska_od_zeme']; 
						}
						else {
							$vyska_od_zeme[$key] = '&nbsp;'; 
						}
						if($val['pocet_konarov']!='') {
							$pocet_konarov[$key] = $val['pocet_konarov']; 
						}
						// else {
						// 	$pocet_konarov[$key] = '&nbsp;'; 
						// }
						if($val['pocet_vetviciek']!='') {
							$pocet_vetviciek[$key] = $val['pocet_vetviciek']; 
						}
						// else {
						// 	$pocet_vetviciek[$key] = '&nbsp;'; 
						// }
						if($val['stojan']!='') {
							$stojan[$key] = $val['stojan']; 
						}
						// else {
						// 	$stojan[$key] = '&nbsp;'; 
						// }
						if($val['priemer']!='') {
							$priemer[$key] = $val['priemer']; 
						} 
						// else {
						// 	$priemer[$key] = '&nbsp;';
						// }
						if($val['druh_ihlicia']!='') {
							$druh_ihlicia[$key] = $val['druh_ihlicia']; 
						} 
						// else {
						// 	$druh_ihlicia[$key] = '&nbsp;';
						// }
						if($val['balenie']!='') {
							$balenie[$key] = $val['balenie']; 
						} 
						// else {
						// 	$balenie[$key] = '&nbsp;';
						// }
					}

					// var_dump($vyska);



					if($vyska !='') {
						echo '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-height.png" alt="Výška"><span>Výška</span><strong>';
						foreach ($vyska as $ky => $item) { echo $item . '<br>'; }
						echo '</strong></div>';
					}

					if($priemer !='') {
						echo '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-average.png" alt="Priemer"><span>Priemer</span><strong>';
						foreach ($priemer as $ky => $item) { echo $item . '<br>'; }
						echo '</strong></div>';
					}

					if($vyska_od_zeme !='') {
						echo '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-average.png" alt="vyska_od_zeme"><span>Výška od zeme</span><strong>';
						foreach ($vyska_od_zeme as $ky => $item) { echo $item . '<br>'; }
						echo '</strong></div>';
					}

					if($vyska_od_zeme !='') {
						echo '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-trunk.png" alt="vyska_od_zeme"><span>Výška od zeme</span><strong>';
						foreach ($vyska_od_zeme as $ky => $item) { echo $item . '<br>'; }
						echo '</strong></div>';
					}

					if($vaha !='') {
						echo '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-weight.png" alt="vaha"><span>Váha</span><strong>';
						foreach ($vaha as $ky => $item) { echo $item . '<br>'; }
						echo '</strong></div>';
					}

					if($pocet_korun !='') {
						echo '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-layers.png" alt="pocet_korun"><span>Počet korún</span><strong>';
						foreach ($pocet_korun as $ky => $item) { echo $item . '<br>'; }
						echo '</strong></div>';
					}

					if($pocet_konarov !='') {
						echo '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-prepitych.png" alt="pocet_konarov"><span>Počet konárov</span><strong>';
						foreach ($pocet_konarov as $ky => $item) { echo $item . '<br>'; }
						echo '</strong></div>';
					}

					if($pocet_vetviciek !='') {
						echo '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-twig.png" alt="pocet_vetviciek"><span>Počet vetvičiek</span><strong>';
						foreach ($pocet_vetviciek as $ky => $item) { echo $item . '<br>'; }
						echo '</strong></div>';
					}


					if($stojan !='') {
						echo '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-stand.png" alt="stojan"><span>Stojan</span><strong>';
						foreach ($stojan as $ky => $item) { echo $item . '<br>'; }
						echo '</strong></div>';
					}

					if($druh_ihlicia !='') {
						echo '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-needles.png" alt="stojan"><span>Druh ihličia</span><strong>';
						foreach ($druh_ihlicia as $ky => $item) { echo $item . '<br>'; }
						echo '</strong></div>';
					}


					if($balenie !='') {
						echo '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-size.png" alt="stojan"><span>Balenie</span><strong>';
						foreach ($balenie as $ky => $item) { echo $item . '<br>'; }
						echo '</strong></div>';
					}
					
			 
					
					
					// foreach ($formatted_attributes as $key => $value) {
						
					// 	$copy = '';

					// 	if( $key == 'Priemer' ) {
					// 		$copy = '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-average.png" alt="'.$key.'"><span>'.$key.'</span><strong>';
						
					// 	} 
					// 	if( $key == 'Výška' ) { 
					// 		$copy =  '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-height.png" alt="'.$key.'"><span>'.$key.'</span><strong>';
					// 	}
					// 	if( $key == 'Počet korún' ) {
					// 		$copy =  '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-layers.png" alt="'.$key.'"><span>'.$key.'</span><strong>';
					// 	}
					// 	if( $key == 'Počet konárov' ) {
					// 		$copy =  '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-prepitych.png" alt="'.$key.'"><span>'.$key.'</span><strong>';
					// 	}
					// 	if( $key == 'Stojan' ) {
					// 		$copy =  '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-stand.png" alt="'.$key.'"><span>'.$key.'</span><strong>';
					// 	}
					// 	if( $key == 'Výška od zeme' ) {
					// 		$copy =  '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-trunk.png" alt="'.$key.'"><span>'.$key.'</span><strong>';
					// 	}
					// 	if( $key == 'Počet vetvičiek' ) {
					// 		$copy =  '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-twig.png" alt="'.$key.'"><span>'.$key.'</span><strong>';
					// 		// sort($value);
							
					// 	}
					// 	if( $key == 'Váha' ) {
					// 		$copy =  '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-weight.png" alt="'.$key.'"><span>'.$key.'</span><strong>';
					// 		// sort($value);
					// 	}
					// 	if( $key == 'Druh ihličia' ) {
					// 		$copy =  '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-needles.png" alt="'.$key.'"><span>'.$key.'</span><strong>';
					// 	}
						
					// 	if( $key == 'Balenie' ) {
					// 		$copy =  '<div class="properties"><img src="'.get_bloginfo("stylesheet_directory").'/assets/img/icons/icons-size.png" alt="'.$key.'"><span>'.$key.'</span><strong>';
					// 	}
						
						
						
						// $value = explode(',', $value);

						// array_multisort(preg_replace('~\D+~','',$value),$value);
						// var_export($value);

						
					// 	foreach ($value as $key => $val) {
					// 		$copy= $copy . $val.'<br>';
					// 	}

					// 	$copy= $copy.'</strong></div>';
					// 	echo $copy;
				
						
					// }

					// print_r($formatted_attributes['Výška']);

					// return $formatted_attributes;

			?>
		</div>




<?php 
global $product; // If not set…

if( ! is_a( $product, 'WC_Product' ) ){
    $product = wc_get_product(get_the_id());
}

$args = array(
    'posts_per_page' => 3,
    'columns'        => 3,
    'orderby'        => 'rand',
    'order'          => 'desc',
);

$args['related_products'] = array_filter( array_map( 'wc_get_product', wc_get_related_products( $product->get_id(), $args['posts_per_page'], $product->get_upsell_ids() ) ), 'wc_products_array_filter_visible' );
$args['related_products'] = wc_products_array_orderby( $args['related_products'], $args['orderby'], $args['order'] );

// Set global loop values.
wc_set_loop_prop( 'name', 'related' );
wc_set_loop_prop( 'columns', $args['columns'] );

wc_get_template( 'single-product/related.php', $args );

// do_action( 'woocommerce_after_single_product' ); 
 
?>