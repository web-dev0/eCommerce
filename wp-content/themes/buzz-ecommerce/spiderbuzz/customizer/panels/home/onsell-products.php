<?php
/**
 * Onsell Products  Settings
 *
 * @package Buzz_Ecommerce
 */
function buzz_ecommerce_customize_register_onsell_products( $wp_customize ) {
   
    
    //Products Category
    $wp_customize->add_section( 'onsell_products_section', array(
        'title'    => esc_html__( 'Onsell Products', 'buzz-ecommerce' ),
        'priority' => 5,
        'panel'    =>'buzz_ecommerce_homepage_setting'
	) );

	//Products Tab Title
    $wp_customize->add_setting(
        'onsell_products_title',
        array(
            'default'           => esc_html__( 'ONSELL PRODUCTS', 'buzz-ecommerce' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'			=>	'postMessage',
        )
    );
    
    $wp_customize->add_control(
		'onsell_products_title',
		array(
			'section'	  => 'onsell_products_section',
			'label'		  => esc_html__( 'Products  Header Title', 'buzz-ecommerce' ),
			'description' => esc_html__( 'Products Header Title Display', 'buzz-ecommerce' ),
            'type'        => 'text'
		)		
	);
	
	
	
    //Products Category Number of Products
	$wp_customize->add_setting(
        'products_onsell_number_of_products',
        array(
            'default'           => 8,
            'sanitize_callback' => 'absint',
        )
    );
    
    $wp_customize->add_control(
		'products_onsell_number_of_products',
		array(
			'section'	  => 'onsell_products_section',
			'label'		  => esc_html__( 'Number of Products', 'buzz-ecommerce' ),
			'description' => esc_html__( 'Number of Products Display on Tab Section.', 'buzz-ecommerce' ),
            'type'        => 'number'
		)		
    );
    

}
add_action( 'customize_register', 'buzz_ecommerce_customize_register_onsell_products' );