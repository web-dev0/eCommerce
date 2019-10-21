<?php
/**
 * Products Category Settings
 *
 * @package Buzz_Ecommerce
 */

function buzz_ecommerce_customize_register_product_category_section( $wp_customize ) {
    
    //Products Category
    $wp_customize->add_section( 'products_category_section', array(
        'title'    => esc_html__( 'Products Category', 'buzz-ecommerce' ),
        'priority' => 3,
        'panel'    =>'buzz_ecommerce_homepage_setting'
	) );
	


    
    /** Category Section Hear */
    $wp_customize->add_setting(
		'products_categorys', 
		array(
			'default' => buzz_ecommerce_get_multiple_product_categories(),
			'sanitize_callback' => 'buzz_ecommerce_sanitize_multiple_check' //						
		)
	);

	$wp_customize->add_control(
		new Buzz_Ecommerce_MultiCheck_Control(
			$wp_customize,
			'products_categorys',
			array(
				'section'     => 'products_category_section',
				'label'       => esc_html__( 'Products Category', 'buzz-ecommerce' ),
                'description' => esc_html__( 'Select the Products Category Section.', 'buzz-ecommerce' ),
				'choices'     => buzz_ecommerce_get_products_categories( )
			)
		)
	);

	
    
    

}
add_action( 'customize_register', 'buzz_ecommerce_customize_register_product_category_section' );
