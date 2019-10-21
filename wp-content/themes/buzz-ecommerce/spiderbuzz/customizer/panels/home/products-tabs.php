<?php
/**
 * Products Tabs  Settings
 *
 * @package Buzz_Ecommerce
 */

function buzz_ecommerce_customize_register_products_tab( $wp_customize ) {
   
    
    //Products Category
    $wp_customize->add_section( 'products_tab_section', array(
        'title'    => esc_html__( 'Products Tabs', 'buzz-ecommerce' ),
        'priority' => 5,
        'panel'    =>'buzz_ecommerce_homepage_setting'
	) );
    
    

	//Products Tab Title
    $wp_customize->add_setting(
        'products_tabs_title',
        array(
            'default'           => esc_html__( 'POPULOR PRODUCTS', 'buzz-ecommerce' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'			=>	'postMessage',
        )
    );
    
    $wp_customize->add_control(
		'products_tabs_title',
		array(
			'section'	  => 'products_tab_section',
			'label'		  => esc_html__( 'Products Tab Header Title', 'buzz-ecommerce' ),
			'description' => esc_html__( 'Products Tab Header Title Display', 'buzz-ecommerce' ),
            'type'        => 'text'
		)		
	);
	
	//select refresh
	$wp_customize->selective_refresh->add_partial( 'products_tabs_title', array(
        'selector' 			=> '#products_tabs_title',
        'render_callback' 	=> 'buzz_ecommerce_products_tabs_title',
    ) );
	
	
    /******************************************************************************
	 * 					Category Section Hear 
	 ***************************************************************************/
    $wp_customize->add_setting(
		'products_tabs_multiple_cat', 
		array(
			'default' 			=> array(buzz_ecommerce_get_default_products_categories()),
			'sanitize_callback' => 'buzz_ecommerce_sanitize_multiple_check',
			'transport'			=>	'postMessage',						
		)
	);

	$wp_customize->add_control(
		new Buzz_Ecommerce_MultiCheck_Control(
			$wp_customize,
			'products_tabs_multiple_cat',
			array(
				'section'     => 'products_tab_section',
				'label'       => esc_html__( 'Products Tab Category', 'buzz-ecommerce' ),
                'description' => esc_html__( 'Select the Products Tab Section Categories.', 'buzz-ecommerce' ),
				'choices'     => buzz_ecommerce_get_products_categories( )
			)
		)
	);

	//Products Category Number of Products
	$wp_customize->add_setting(
        'products_tab_number_of_products',
        array(
            'default'           => 8,
            'sanitize_callback' => 'absint',
        )
    );
    
    $wp_customize->add_control(
		'products_tab_number_of_products',
		array(
			'section'	  => 'products_tab_section',
			'label'		  => esc_html__( 'Number of Products', 'buzz-ecommerce' ),
			'description' => esc_html__( 'Number of Products Display on Tab Section.', 'buzz-ecommerce' ),
            'type'        => 'number'
		)		
	);
	
	//add the background images options
    $wp_customize->add_setting('buzz_commerce_products_tab_background_images', array(
        'default'           => esc_url( get_template_directory_uri().'/assets/images/tab-background-img.png' ),
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'buzz_commerce_products_tab_background_images', array(
        'label'             => esc_html__('Section Background Images', 'buzz-ecommerce'),
        'section'           => 'products_tab_section',
        'settings'          => 'buzz_commerce_products_tab_background_images',
        'priority'          => 2
    )));
    

}
add_action( 'customize_register', 'buzz_ecommerce_customize_register_products_tab' );