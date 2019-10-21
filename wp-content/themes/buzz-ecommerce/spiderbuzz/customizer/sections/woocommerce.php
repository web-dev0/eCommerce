<?php
/**
 * Woocommerce Settings
 *
 * @package Buzz_Ecommerce
 */
function buzz_ecommerce_customize_woocommerce_settings( $wp_customize ) {

    $wp_customize->add_panel( 'buzz_ecommerce_woocommerce', array(
        'title'      => esc_html__( 'Woocommerce Settings', 'buzz-ecommerce' ),
        'priority'   => 100
    ) );
    
    //Woocommerce Settings
    $wp_customize->add_section( 'buzz_ecommerce_buzz_ecommerce_page_sections', array(
        'title'    => esc_html__( 'Shop Page Settings', 'buzz-ecommerce' ),
        'priority' => 2,
        'panel'    => 'buzz_ecommerce_woocommerce'
    ) );

    

    //Woocommerce Shop Page Settings
    $wp_customize->add_setting(
        'buzz_ecommerce_woocommerce_products_per_page',
        array(
            'default'           => 12,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
		'buzz_ecommerce_woocommerce_products_per_page',
		array(
			'section'	  => 'buzz_ecommerce_buzz_ecommerce_page_sections',
			'label'		  => esc_html__( 'Shop Page Products', 'buzz-ecommerce' ),
			'description' => esc_html__( 'Number of products in shop page.', 'buzz-ecommerce' ),
            'type'        => 'number',
            'priority'    => 1
		)		
    );

    //Woocommerce Shop Page Settings
    $wp_customize->add_setting(
        'buzz_ecommerce_woocommerce_loop_columns',
        array(
            'default'           => 3,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
		'buzz_ecommerce_woocommerce_loop_columns',
		array(
			'section'	  => 'buzz_ecommerce_buzz_ecommerce_page_sections',
			'label'		  => esc_html__( 'Shop Page Products Columns', 'buzz-ecommerce' ),
			'description' => esc_html__( 'Display the Shop Page Columns', 'buzz-ecommerce' ),
            'type'        => 'number',
            'priority'    => 1
		)		
    );

    // 
    //Woocommerce Settings
    $wp_customize->add_section( 'buzz_ecommerce_woocommerce_single_page_sections', array(
        'title'    => esc_html__( 'Single Page Settings', 'buzz-ecommerce' ),
        'priority' => 1,
        'panel'    => 'buzz_ecommerce_woocommerce'
    ) );

    //Woocommerce Social Share in Single page
    $wp_customize->add_setting(
        'buzz_ecommerce_social_share_enable',
        array(
            'default'           => true,
            'sanitize_callback' => 'buzz_ecommerce_sanitize_checkbox'
        )
    );
    $wp_customize->add_control(
		new Buzz_Ecommerce_Toggle_Control( 
			$wp_customize,
			'buzz_ecommerce_social_share_enable',
			array(
				'section'	  => 'buzz_ecommerce_woocommerce_single_page_sections',
				'label'		  => esc_html__( 'Disable Social Share', 'buzz-ecommerce' ),
                'description' => esc_html__( 'Enable/Disable Social Share.', 'buzz-ecommerce' ),
                'priority'    => 1
			)
		)
    );

    //Woocommerce Shop Page Settings
    $wp_customize->add_setting(
        'buzz_ecommerce_woocommerce_related_products_posts_per_page',
        array(
            'default'           => 3,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
		'buzz_ecommerce_woocommerce_related_products_posts_per_page',
		array(
			'section'	  => 'buzz_ecommerce_woocommerce_single_page_sections',
			'label'		  => esc_html__( 'Single Page Related Products Count', 'buzz-ecommerce' ),
			'description' => esc_html__( 'Number of Related Products Count.', 'buzz-ecommerce' ),
            'type'        => 'number',
            'priority'    => 2
		)		
    );

    //Woocommerce Shop page Settings
    $wp_customize->add_setting(
        'buzz_ecommerce_woocommerce_related_products_columns',
        array(
            'default'           => 3,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
		'buzz_ecommerce_woocommerce_related_products_columns',
		array(
			'section'	  => 'buzz_ecommerce_woocommerce_single_page_sections',
			'label'		  => esc_html__( 'Single Page Related Products Columns', 'buzz-ecommerce' ),
			'description' => esc_html__( 'Number of related products columns.', 'buzz-ecommerce' ),
            'type'        => 'number',
            'priority'    => 3
		)		
    );



}
add_action( 'customize_register', 'buzz_ecommerce_customize_woocommerce_settings' );