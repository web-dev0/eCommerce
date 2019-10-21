<?php
/**
 * Slider Settings
 *
 * @package Buzz_Ecommerce
 */


function buzz_ecommerce_customize_register_service_box( $wp_customize ) {
    
    
    //Slider Section 
    $wp_customize->add_section( 'frontpage_service_box_section', array(
        'title'         => esc_html__( 'Service Box', 'buzz-ecommerce' ),
        'description'   => esc_html__('Service Box Section is set the service title, short descriptions and fontawesome icons. Drag "Service Item" sort these position.','buzz-ecommerce'),
        'priority'      => 2,
        'panel'         =>'buzz_ecommerce_homepage_setting'
    ) );



    /*****************************************************
     * Custom Add Slider 
     *****************************************************/
    $wp_customize->add_setting( 
        new Buzz_Ecommerce_Repeater_Setting( 
            $wp_customize, 
            'homepage_service_box_section', 
            array(
                'default' => array(
                    array(
                        'service_icons'     => esc_html__('fa fa-ambulance','buzz-ecommerce'),
                        'service_title'     => esc_html__('FREE DELIVERY','buzz-ecommerce'),
                        'service_short_desc'=> esc_html__('From $59.89','buzz-ecommerce'),
                    ),
                ),
                'sanitize_callback' => array( 'Buzz_Ecommerce_Repeater_Setting', 'sanitize_repeater_setting' ),
            ) 
        ) 
    );
    
    $wp_customize->add_control(
		new Buzz_Ecommerce_Repeater_Control(
			$wp_customize,
			'homepage_service_box_section',
			array(
				'section' => 'frontpage_service_box_section',				
				'label'	  => esc_html__( 'Service Box Add', 'buzz-ecommerce' ),
				'fields'  => array(
                    'service_icons' => array(
                        'type'        => 'font',
                        'label'       => esc_html__( 'Service Box Icons', 'buzz-ecommerce' ),
                        'description' => esc_html__( 'Click Service Box Icons And Select the Fontawesome Icons.Eg: fa fa-usd', 'buzz-ecommerce' ),
                    ),
                    'service_title' => array(
                        'type'        => 'text',
                        'label'       => esc_html__( 'Service Box Title', 'buzz-ecommerce' ),
                        'description' => esc_html__( 'Type the service title. Eg: BIG SAVING', 'buzz-ecommerce' ),
                    ),
                    'service_short_desc' => array(
                        'type'        => 'text',
                        'label'       => esc_html__( 'Service Box Short Desc', 'buzz-ecommerce' ),
                        'description' => esc_html__( 'Type the service sort Desce. Eg: Online 24 hours', 'buzz-ecommerce' ),
                    )
                ),
                'row_label' => array(
                    'type' => 'field',
                    'value' => esc_html__( 'Service Items', 'buzz-ecommerce' ),
                    'field' => 'link'
                )                        
			)
		)
	);
 

}
add_action( 'customize_register', 'buzz_ecommerce_customize_register_service_box' );