<?php  

// 1. Add custom field input @ Product Data > Variations > Single Variation
 
add_action( 'woocommerce_variation_options_pricing', 'bbloomer_add_custom_field_to_variations', 10, 3 );
 
function bbloomer_add_custom_field_to_variations( $loop, $variation_data, $variation ) {
   woocommerce_wp_text_input( array(
'id' => 'custom_field[' . $loop . ']',
'class' => 'short',
'label' => __( 'Výška od zeme', 'woocommerce' ),
'value' => get_post_meta( $variation->ID, 'custom_field', true )
   ) );
}
 
// -----------------------------------------
// 2. Save custom field on product variation save
 
add_action( 'woocommerce_save_product_variation', 'bbloomer_save_custom_field_variations', 10, 2 );
 
function bbloomer_save_custom_field_variations( $variation_id, $i ) {
   $custom_field = $_POST['custom_field'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'custom_field', esc_attr( $custom_field ) );
}
 
// -----------------------------------------
// 3. Store custom field value into variation data
 
add_filter( 'woocommerce_available_variation', 'bbloomer_add_custom_field_variation_data' );
 
function bbloomer_add_custom_field_variation_data( $variations ) {
   $variations['custom_field'] = '<div class="woocommerce_custom_field">Výška od zeme: <span>' . get_post_meta( $variations[ 'variation_id' ], 'custom_field', true ) . '</span></div>';
   return $variations;
}

// -----------------------------------------

add_action( 'woocommerce_variation_options_pricing', 'bbloomer_add_custom_field2_to_variations', 10, 3 );
function bbloomer_add_custom_field2_to_variations( $loop, $variation_data, $variation ) {
   woocommerce_wp_text_input( array(
'id' => 'custom_field[' . $loop . ']',
'class' => 'short',
'label' => __( 'Počet korún', 'woocommerce' ),
'value' => get_post_meta( $variation->ID, 'custom_field', true )
   ) );
}
 
add_action( 'woocommerce_save_product_variation', 'bbloomer_save_custom_field2_variations', 10, 2 );
function bbloomer_save_custom_field2_variations( $variation_id, $i ) {
   $custom_field = $_POST['custom_field'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'custom_field', esc_attr( $custom_field ) );
}
 
add_filter( 'woocommerce_available_variation', 'bbloomer_add_custom_field2_variation_data' );
function bbloomer_add_custom_field2_variation_data( $variations ) {
   $variations['custom_field'] = '<div class="woocommerce_custom_field">Počet korún: <span>' . get_post_meta( $variations[ 'variation_id' ], 'custom_field', true ) . '</span></div>';
   return $variations;
}

// -----------------------------------------

add_action( 'woocommerce_variation_options_pricing', 'bbloomer_add_custom_field3_to_variations', 10, 3 );
function bbloomer_add_custom_field3_to_variations( $loop, $variation_data, $variation ) {
   woocommerce_wp_text_input( array(
'id' => 'custom_field[' . $loop . ']',
'class' => 'short',
'label' => __( 'Počet konárov', 'woocommerce' ),
'value' => get_post_meta( $variation->ID, 'custom_field', true )
   ) );
}
 
add_action( 'woocommerce_save_product_variation', 'bbloomer_save_custom_field3_variations', 10, 2 );
function bbloomer_save_custom_field3_variations( $variation_id, $i ) {
   $custom_field = $_POST['custom_field'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'custom_field', esc_attr( $custom_field ) );
}
 
add_filter( 'woocommerce_available_variation', 'bbloomer_add_custom_field3_variation_data' );
function bbloomer_add_custom_field3_variation_data( $variations ) {
   $variations['custom_field'] = '<div class="woocommerce_custom_field">Počet konárov: <span>' . get_post_meta( $variations[ 'variation_id' ], 'custom_field', true ) . '</span></div>';
   return $variations;
}
 
// -----------------------------------------

add_action( 'woocommerce_variation_options_pricing', 'bbloomer_add_custom_field4_to_variations', 10, 3 );
function bbloomer_add_custom_field4_to_variations( $loop, $variation_data, $variation ) {
   woocommerce_wp_text_input( array(
'id' => 'custom_field[' . $loop . ']',
'class' => 'short',
'label' => __( 'Počet vetvičiek', 'woocommerce' ),
'value' => get_post_meta( $variation->ID, 'custom_field', true )
   ) );
}
 
add_action( 'woocommerce_save_product_variation', 'bbloomer_save_custom_field4_variations', 10, 2 );
function bbloomer_save_custom_field4_variations( $variation_id, $i ) {
   $custom_field = $_POST['custom_field'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'custom_field', esc_attr( $custom_field ) );
}
 
add_filter( 'woocommerce_available_variation', 'bbloomer_add_custom_field4_variation_data' );
function bbloomer_add_custom_field4_variation_data( $variations ) {
   $variations['custom_field'] = '<div class="woocommerce_custom_field">Počet vetvičiek: <span>' . get_post_meta( $variations[ 'variation_id' ], 'custom_field', true ) . '</span></div>';
   return $variations;
}

// -----------------------------------------

add_action( 'woocommerce_variation_options_pricing', 'bbloomer_add_custom_field5_to_variations', 10, 3 );
function bbloomer_add_custom_field5_to_variations( $loop, $variation_data, $variation ) {
   woocommerce_wp_text_input( array(
'id' => 'custom_field[' . $loop . ']',
'class' => 'short',
'label' => __( 'Stojan', 'woocommerce' ),
'value' => get_post_meta( $variation->ID, 'custom_field', true )
   ) );
}
 
add_action( 'woocommerce_save_product_variation', 'bbloomer_save_custom_field5_variations', 10, 2 );
function bbloomer_save_custom_field5_variations( $variation_id, $i ) {
   $custom_field = $_POST['custom_field'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'custom_field', esc_attr( $custom_field ) );
}
 
add_filter( 'woocommerce_available_variation', 'bbloomer_add_custom_field5_variation_data' );
function bbloomer_add_custom_field5_variation_data( $variations ) {
   $variations['custom_field'] = '<div class="woocommerce_custom_field">Stojan: <span>' . get_post_meta( $variations[ 'variation_id' ], 'custom_field', true ) . '</span></div>';
   return $variations;
}

// -----------------------------------------




?>