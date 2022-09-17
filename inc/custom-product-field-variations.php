<?php  
 

add_action( 'woocommerce_variation_options_pricing', 'bbloomer_add_custom_field_to_variations', 10, 3 );
function bbloomer_add_custom_field_to_variations( $loop, $variation_data, $variation ) {
   woocommerce_wp_text_input( array( 'id' => 'pocet_korun[' . $loop . ']','class' => 'short','label' => __( 'Počet korún', 'woocommerce' ), 'value' => get_post_meta( $variation->ID, 'pocet_korun', true ) ) );
   woocommerce_wp_text_input( array( 'id' => 'vyska_od_zeme[' . $loop . ']','class' => 'short','label' => __( 'Výška od zeme', 'woocommerce' ), 'value' => get_post_meta( $variation->ID, 'vyska_od_zeme', true ) ) );
   woocommerce_wp_text_input( array( 'id' => 'pocet_konarov[' . $loop . ']','class' => 'short','label' => __( 'Počet konárov', 'woocommerce' ), 'value' => get_post_meta( $variation->ID, 'pocet_konarov', true ) ) );
   woocommerce_wp_text_input( array( 'id' => 'pocet_vetviciek[' . $loop . ']','class' => 'short','label' => __( 'Počet vetvičiek', 'woocommerce' ), 'value' => get_post_meta( $variation->ID, 'pocet_vetviciek', true ) ) );
   woocommerce_wp_text_input( array( 'id' => 'stojan[' . $loop . ']','class' => 'short','label' => __( 'Stojan&nbsp;&nbsp;&nbsp;', 'woocommerce' ), 'value' => get_post_meta( $variation->ID, 'stojan', true ) ) );
   woocommerce_wp_text_input( array( 'id' => 'priemer[' . $loop . ']','class' => 'short','label' => __( 'Priemer', 'woocommerce' ), 'value' => get_post_meta( $variation->ID, 'priemer', true ) ) );
   woocommerce_wp_text_input( array( 'id' => 'druh_ihlicia[' . $loop . ']','class' => 'short','label' => __( 'Druh ihličia', 'woocommerce' ), 'value' => get_post_meta( $variation->ID, 'druh_ihlicia', true ) ) );
   woocommerce_wp_text_input( array( 'id' => 'balenie[' . $loop . ']','class' => 'short','label' => __( 'Balenie', 'woocommerce' ), 'value' => get_post_meta( $variation->ID, 'balenie', true ) ) );
}
 
add_action( 'woocommerce_save_product_variation', 'bbloomer_save_custom_field_variations', 10, 2 );
function bbloomer_save_custom_field_variations( $variation_id, $i ) { 
   $custom_field = $_POST['pocet_korun'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'pocet_korun', esc_attr( $custom_field ) );
   $custom_field = $_POST['vyska_od_zeme'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'vyska_od_zeme', esc_attr( $custom_field ) );
   $custom_field = $_POST['pocet_konarov'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'pocet_konarov', esc_attr( $custom_field ) );
   $custom_field = $_POST['pocet_vetviciek'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'pocet_vetviciek', esc_attr( $custom_field ) );
   $custom_field = $_POST['stojan'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'stojan', esc_attr( $custom_field ) );
   $custom_field = $_POST['priemer'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'priemer', esc_attr( $custom_field ) );
   $custom_field = $_POST['druh_ihlicia'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'druh_ihlicia', esc_attr( $custom_field ) );
   $custom_field = $_POST['balenie'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'balenie', esc_attr( $custom_field ) );
}
 

// Add New Variation Settings
add_filter( 'woocommerce_available_variation', 'load_variation_settings_fields' );
function load_variation_settings_fields( $variations ) {
	// duplicate the line for each field 
	$variations['pocet_korun'] = get_post_meta( $variations[ 'variation_id' ], 'pocet_korun', true );
	$variations['vyska_od_zeme'] = get_post_meta( $variations[ 'variation_id' ], 'vyska_od_zeme', true );
	$variations['pocet_konarov'] = get_post_meta( $variations[ 'variation_id' ], 'pocet_konarov', true );
	$variations['pocet_vetviciek'] = get_post_meta( $variations[ 'variation_id' ], 'pocet_vetviciek', true );
	$variations['stojan'] = get_post_meta( $variations[ 'variation_id' ], 'stojan', true );
	$variations['priemer'] = get_post_meta( $variations[ 'variation_id' ], 'priemer', true );
	$variations['druh_ihlicia'] = get_post_meta( $variations[ 'variation_id' ], 'druh_ihlicia', true );
	$variations['balenie'] = get_post_meta( $variations[ 'variation_id' ], 'balenie', true );
	return $variations;
}


?>