<?php

/**
 * Add our Customizer content
 */
function perfect_customize_register( $wp_customize ) {

   // Add all your Customizer content (i.e. Panels, Sections, Settings & Controls) here...

      /**
     * Add our Header & Navigation Panel
     */

    $wp_customize->add_panel( 'advertisement_panel',
    array(
        'title' => __( 'Advertisement Section', 'victorry' ),
        'description' => esc_html__( 'Add Your Advertisement Banner', 'victorry' ), // Include html tags such as 

        'priority' => 160, // Not typically needed. Default is 160
        'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
        'theme_supports' => '', // Rarely needed
        'active_callback' => '', // Rarely needed
    )
    );

     /**
            * Add our Section
         */
        $wp_customize->add_section( 'advertisement_top_section',
            array(
            'title' => __( 'Top Panel Banner', 'victorry' ),
            'description' => esc_html__( 'Add Your Top Pannel Advertisement Banner.', 'victorry' ),
            'panel' => 'advertisement_panel', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
            )
        );

        /**
            * Add our Section For The Middle Page Customizer Advertisement Banner 
         */
        $wp_customize->add_section( 'advertisement_middlepage_section',
            array(
            'title' => __( 'Middle Page Banner', 'victorry' ),
            'description' => esc_html__( 'Add Your Middle Page Panel Advertisement Banner.', 'victorry' ),
            'panel' => 'advertisement_panel', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
            )
        );

        $wp_customize->add_setting( 'advertisement_top_banner_settings',
            array(
                'default' => '', // Optional.
                'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
                'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'theme_supports' => '', // Optional. Rarely needed
                'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
                'sanitize_callback' => 'absint', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
                'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
                'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
            )
        );

        /**
            * Add our Settings For The Middle Page Customizer Advertisement Banner 
         */

        $wp_customize->add_setting( 'advertisement_middlepage_banner_settings',
        array(
            'default' => '', // Optional.
            'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
            'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
            'theme_supports' => '', // Optional. Rarely needed
            'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
            'sanitize_callback' => 'absint', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
            'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
            'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
        )
        );


        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'advertisement_top_banner_settings',
                            array(
                                'label' => __( 'Top Panel Advertisement Banner' ),
                                'description' => esc_html__( 'Choose Your Top Panel Advertisement Banner' ),
                                'section' => 'advertisement_top_section',
                                'flex_width' => false, // Optional. Default: false
                                'flex_height' => true, // Optional. Default: false
                                'width' => 720, // Optional. Default: 150
                                'height' => 90, // Optional. Default: 150
                                'button_labels' => array( // Optional.
                                    'select' => __( 'Select Image' ),
                                    'change' => __( 'Change Image' ),
                                    'remove' => __( 'Remove' ),
                                    'default' => __( 'Default' ),
                                    'placeholder' => __( 'No image selected' ),
                                    'frame_title' => __( 'Select Image' ),
                                    'frame_button' => __( 'Choose Image' ),
                                )
                            )
        ));

        /**
            * Add our Controls For The Middle Page Customizer Advertisement Banner 
         */

        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'advertisement_middlepage_banner_settings',
            array(
                'label' => __( 'Middle Page Advertisement Banner' ),
                'description' => esc_html__( 'Choose Your Middle Page Advertisement Banner' ),
                'section' => 'advertisement_middlepage_section',
                'flex_width' => false, // Optional. Default: false
                'flex_height' => true, // Optional. Default: false
                'width' => 720, // Optional. Default: 150
                'height' => 90, // Optional. Default: 150
                'button_labels' => array( // Optional.
                    'select' => __( 'Select Image' ),
                    'change' => __( 'Change Image' ),
                    'remove' => __( 'Remove' ),
                    'default' => __( 'Default' ),
                    'placeholder' => __( 'No image selected' ),
                    'frame_title' => __( 'Select Image' ),
                    'frame_button' => __( 'Choose Image' ),
                )
            )
        ));


    $wp_customize->add_panel( 'add_contacts_panel',
    array(
        'title' => __( 'Contacts Section', 'victorry' ),
        'description' => esc_html__( 'Adjust your Website Contacts', 'victorry' ), // Include html tags such as 

        'priority' => 160, // Not typically needed. Default is 160
        'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
        'theme_supports' => '', // Rarely needed
        'active_callback' => '', // Rarely needed
    )
    );

     /**
            * Add our Section
         */
        $wp_customize->add_section( 'telephone_number_section',
            array(
            'title' => __( 'Telephone Number', 'victorry' ),
            'description' => esc_html__( 'Edit And Place Your Website Telephone Number.', 'victorry' ),
            'panel' => 'add_contacts_panel', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
            )
        );

        $wp_customize->add_setting( 'telephone_number_settings',
            array(
                'default' => '', // Optional.
                'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
                'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'theme_supports' => '', // Optional. Rarely needed
                'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
                'sanitize_callback' => 'sanitize_text_field', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
                'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
                'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
            )
        );

        $wp_customize->add_control( 'telephone_number_settings',
            array(
                'label' => __( 'Telephone Number', 'victorry' ),
                'description' => esc_html__( 'Enter Your Website Telephone Number' , 'victorry'),
                'section' => 'telephone_number_section',
                'priority' => 10, // Optional. Order priority to load the control. Default: 10
                'type' => 'text', // Can be either text, email, url, number, hidden, or date
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'input_attrs' => array( // Optional.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __( 'Enter Telephone Number ...', 'victorry' ),
                ),
            )
        );

         /**
            * Add our Section
         */
        $wp_customize->add_section( 'website_email_section',
            array(
            'title' => __( 'Website Contact Email', 'victorry' ),
            'description' => esc_html__( 'Edit And Place Your Website Email Contact..', 'victorry' ),
            'panel' => 'add_contacts_panel', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
            )
        );

        $wp_customize->add_setting( 'website_email_settings',
            array(
                'default' => '', // Optional.
                'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
                'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'theme_supports' => '', // Optional. Rarely needed
                'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
                'sanitize_callback' => 'sanitize_email', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
                'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
                'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
            )
        );

        $wp_customize->add_control( 'website_email_settings',
            array(
                'label' => __( 'Website Email Contact', 'victorry' ),
                'description' => esc_html__( 'Enter Your Website Email Contact' , 'victorry'),
                'section' => 'website_email_section',
                'priority' => 10, // Optional. Order priority to load the control. Default: 10
                'type' => 'email', // Can be either text, email, url, number, hidden, or date
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'input_attrs' => array( // Optional.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __( 'Enter Website Contact Email ...', 'victorry' ),
                ),
            )
        );





    
    /**
     * Add our Header & Navigation Panel
     */
        $wp_customize->add_panel( 'social_media_panel',
            array(
                'title' => __( 'Social Media Section', 'victorry' ),
                'description' => esc_html__( 'Adjust your Social Media Links', 'victorry' ), // Include html tags such as 

                'priority' => 160, // Not typically needed. Default is 160
                'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
                'theme_supports' => '', // Rarely needed
                'active_callback' => '', // Rarely needed
            )
        );


      

        /**
            * Add our Section
         */
        $wp_customize->add_section( 'twitter_link_section',
            array(
            'title' => __( 'Twitter', 'victorry' ),
            'description' => esc_html__( 'Edit And Place Your Link For Twitter.', 'victorry' ),
            'panel' => 'social_media_panel', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
            )
        );

        $wp_customize->add_setting( 'twitter_page_link',
            array(
                'default' => '', // Optional.
                'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
                'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'theme_supports' => '', // Optional. Rarely needed
                'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
                'sanitize_callback' => 'esc_url_raw', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
                'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
                'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
            )
        );

        $wp_customize->add_control( 'twitter_page_link',
            array(
                'label' => __( 'Twitter URL', 'victorry' ),
                'description' => esc_html__( 'Copy And Paste The URL associated with your Twitter Account' , 'victorry'),
                'section' => 'twitter_link_section',
                'priority' => 10, // Optional. Order priority to load the control. Default: 10
                'type' => 'url', // Can be either text, email, url, number, hidden, or date
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'input_attrs' => array( // Optional.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __( 'Enter URL ...', 'victorry' ),
                ),
            )
        );


        /**
            * Add our Section
         */
        $wp_customize->add_section( 'facebook_link_section',
            array(
            'title' => __( 'Facebook', 'victorry' ),
            'description' => esc_html__( 'Edit And Place Your Link For Facebook.', 'victorry' ),
            'panel' => 'social_media_panel', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
            )
        );

        $wp_customize->add_setting( 'facebook_page_link',
            array(
                'default' => '', // Optional.
                'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
                'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'theme_supports' => '', // Optional. Rarely needed
                'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
                'sanitize_callback' => 'esc_url_raw', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
                'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
                'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
            )
        );

        $wp_customize->add_control( 'facebook_page_link',
            array(
                'label' => __( 'Facebook URL', 'victorry' ),
                'description' => esc_html__( 'Copy And Paste The URL associated with your Facebook Account', 'victorry' ),
                'section' => 'facebook_link_section',
                'priority' => 10, // Optional. Order priority to load the control. Default: 10
                'type' => 'url', // Can be either text, email, url, number, hidden, or date
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'input_attrs' => array( // Optional.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __( 'Enter URL ...' , 'victorry'),
                ),
            )
        );

         /**
            * Add our Section
         */
        $wp_customize->add_section( 'instagram_link_section',
            array(
            'title' => __( 'Instagram', 'victorry' ),
            'description' => esc_html__( 'Edit And Place Your Link For Instagram.', 'victorry' ),
            'panel' => 'social_media_panel', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
            )
        );

        $wp_customize->add_setting( 'instagram_page_link',
            array(
                'default' => '', // Optional.
                'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
                'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'theme_supports' => '', // Optional. Rarely needed
                'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
                'sanitize_callback' => 'esc_url_raw', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
                'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
                'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
            )
        );

        $wp_customize->add_control( 'instagram_page_link',
            array(
                'label' => __( 'Instagram URL', 'victorry' ),
                'description' => esc_html__( 'Copy And Paste The URL associated with your Instagram Account', 'victorry' ),
                'section' => 'instagram_link_section',
                'priority' => 10, // Optional. Order priority to load the control. Default: 10
                'type' => 'url', // Can be either text, email, url, number, hidden, or date
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'input_attrs' => array( // Optional.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __( 'Enter URL ...', 'victorry' ),
                ),
            )
        );


        /**
            * Add our Section
         */
        $wp_customize->add_section( 'youtube_link_section',
            array(
            'title' => __( 'YouTube', 'victorry' ),
            'description' => esc_html__( 'Edit And Place Your Link For YouTube.', 'victorry' ),
            'panel' => 'social_media_panel', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
            )
        );

        $wp_customize->add_setting( 'youtube_page_link',
            array(
                'default' => '', // Optional.
                'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
                'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'theme_supports' => '', // Optional. Rarely needed
                'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
                'sanitize_callback' => 'esc_url_raw', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
                'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
                'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
            )
        );

        $wp_customize->add_control( 'youtube_page_link',
            array(
                'label' => __( 'YouTube URL', 'victorry' ),
                'description' => esc_html__( 'Copy And Paste The URL associated with your YouTube Account', 'victorry' ),
                'section' => 'youtube_link_section',
                'priority' => 10, // Optional. Order priority to load the control. Default: 10
                'type' => 'url', // Can be either text, email, url, number, hidden, or date
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'input_attrs' => array( // Optional.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __( 'Enter URL ...', 'victorry' ),
                ),
            )
        );



};
add_action( 'customize_register', 'perfect_customize_register' );
