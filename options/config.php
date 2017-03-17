<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "settings";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../options/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../options/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Settings', 'redux-framework-demo' ),
        'page_title'           => __( 'Theme Settings', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

   


    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Intro', 'redux-framework-demo' ),
        'id'               => 'intro',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-home',
        'fields'           => array(
            array(
                'id'       => 'motto',
                'type'     => 'Text',
                'title'    => __( 'Motto', 'redux-framework-demo' ),
                'subtitle' => __( 'Enter your Motto', 'redux-framework-demo' ),
                'default'  => 'We are LA’s premier provider of entertainment & event services'
            ),
            array(
                'id'       => 'services',
                'type'     => 'multi_text',
                'title'    => __('Services', 'redux-framework-demo'),
                'subtitle' => __('Enter your Services', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'customer_name',
                'type'     => 'Text',
                'title'    => __('Customer Name', 'redux-framework-demo'),
                'subtitle' => __("Enter your customer's name", 'redux-framework-demo'),
                'default'  => 'Event Eleven'
            ),
            array(
                'id'       => 'customer_comment',
                'type'     => 'Textarea',
                'title'    => __('Customer Comment', 'redux-framework-demo'),
                'subtitle' => __("Enter your customer's comment", 'redux-framework-demo'),
                'default'  => 'Weve worked with Tycho for the past 7 years on many events. Most notably, the SAG Awards Gala and they have always over delivered. No job is too small and always with a smile'
            ),
            array(
                'id'       => 'about_title',
                'type'     => 'Text',
                'title'    => __('About title', 'redux-framework-demo'),
                'subtitle' => __("Enter about section itle", 'redux-framework-demo'),
                'default'  => 'Your Full-Service Entertainment and Event Partner'
            ),
            array(
                'id'       => 'about',
                'type'     => 'Textarea',
                'title'    => __('Avout description', 'redux-framework-demo'),
                'subtitle' => __("Enter aboutn section description", 'redux-framework-demo'),
                'default'  => 'Our team of staffers and cleaners seamlessly execute best-in-class events while you produce and direct. Our team is trained in best-practices and committed to pre, during, and post event excellence.

From bartenders and security to cleaners and hostesses, Tycho Entertainment offers a full-suite of professional and detail-oriented staffing resources for any size event.',           
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Event Services', 'redux-framework-demo' ),
        'id'               => 'event-services',
        'subsection'       => false,
        'icon'             => 'el el-fire',        
        'fields'           => array(
            array (
                'id'       => 'event-1-title',
                'type'     => 'Text',
                'title'    => __( '#1 title', 'redux-framework-demo' ),
                'subtitle' => __( '#1 title', 'redux-framework-demo' ),
                'default'  => 'PRE-EVENT'
            ),
            array (
                'id'       => 'event-1-des',
                'type'     => 'Textarea',
                'title'    => __( '#1 description', 'redux-framework-demo' ),
                'subtitle' => __( '#1 description', 'redux-framework-demo' ),
                'default'  => 'We assist your production team or event coordinators with all aspects needed to set up the party on-time.'                
            ),
            array (
                'id'       => 'event-2-title',
                'type'     => 'Text',
                'title'    => __( '#2 title', 'redux-framework-demo' ),
                'subtitle' => __( '#2 title', 'redux-framework-demo' ),
                'default'  => 'DURING EVENT'                
            ),
            array (
                'id'       => 'event-2-des',
                'type'     => 'Textarea',
                'title'    => __( '#2 description', 'redux-framework-demo' ),
                'subtitle' => __( '#2 description', 'redux-framework-demo' ),
                'default'  => 'Here to assist in the logistics of keeping your party running smooth. Our event staffers are here to make your life easy.'
            ),
            array (
                'id'       => 'event-3-title',
                'type'     => 'Text',
                'title'    => __( '#3 title', 'redux-framework-demo' ),
                'subtitle' => __( '#3 title', 'redux-framework-demo' ),
                'default'  => 'POST-EVENT CLEANUP'
            ),
            array (
                'id'       => 'event-3-des',
                'type'     => 'Textarea',
                'title'    => __( '#3 description', 'redux-framework-demo' ),
                'subtitle' => __( '#3 description', 'redux-framework-demo' ),
                'default'  => 'From breakdown to final clean, your event will end like nobody was ever here.'
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Event Staffing', 'redux-framework-demo' ),
        'id'               => 'event-staffing',
        'subsection'       => false,
        'icon'             => 'el el-leaf',        
        'fields'           => array(
            array (
                'id'       => 'event-stafing-des',
                'type'     => 'Textarea',
                'title'    => __( 'Description', 'redux-framework-demo' ),
                'subtitle' => __( 'Enter Event Staffing Description', 'redux-framework-demo' ),
                'default'  => 'We bring you our expert team of professionals who work to keep your events clean, refreshed, and running smoothly.'
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Contact information', 'redux-framework-demo' ),
        'id'               => 'contact',
        'icon'             => 'el el-phone',
        'subsection'       => false,
        'fields'           => array(
            array (
                'id'       => 'tel',
                'type'     => 'Text',
                'title'    => __( 'Telphone', 'redux-framework-demo' ),
                'subtitle' => __( 'Enter telphone number', 'redux-framework-demo' ),
                'default'  => '818.840.9404'
            ),
            array (
                'id'       => 'address',
                'type'     => 'Text',
                'title'    => __( 'Address', 'redux-framework-demo' ),
                'subtitle' => __( 'Enter address', 'redux-framework-demo' ),
                'default'  => '3906 W. Burbank Blvd., Burbank, CA 91506'
            ),
            
        )
    ) );

     Redux::setSection( $opt_name, array(
        'title'            => __( 'Who We Are', 'redux-framework-demo' ),
        'id'               => 'who-we-are',
        'icon'             => 'el el-network',                
        'subsection'       => false,
        'fields'           => array(
            array (
                'id'       => 'who-1-title',
                'type'     => 'Text',
                'title'    => __( '#1 title', 'redux-framework-demo' ),
                'subtitle' => __( '#1 title', 'redux-framework-demo' ),
                'default'  => 'people'
            ),
            array (
                'id'       => 'who-1-des',
                'type'     => 'Textarea',
                'title'    => __( '#1 description', 'redux-framework-demo' ),
                'subtitle' => __( '#1 description', 'redux-framework-demo' ),
                'default'  => 'We work hard to provide the best people to power your event needs. Tycho Entertainment staffers are trained in event management and execution best-practices. We take pride in working behind the scenes to create the experience you imagined for you and your guest.'                
            ),
            array (
                'id'       => 'who-2-title',
                'type'     => 'Text',
                'title'    => __( '#2 title', 'redux-framework-demo' ),
                'subtitle' => __( '#2 title', 'redux-framework-demo' ),
                'default'  => 'values'                
            ),
            array (
                'id'       => 'who-2-des',
                'type'     => 'Textarea',
                'title'    => __( '#2 description', 'redux-framework-demo' ),
                'subtitle' => __( '#2 description', 'redux-framework-demo' ),
                'default'  => 'We believe in professionalism at every point of contact with our clients. With attention to detail at the cornerstone of our practice, we make managing your event frictionless and delightful. “At Your Service” is the philosophy of how we do business.'
            ),
            array (
                'id'       => 'who-3-title',
                'type'     => 'Text',
                'title'    => __( '#3 title', 'redux-framework-demo' ),
                'subtitle' => __( '#3 title', 'redux-framework-demo' ),
                'default'  => 'vision'
            ),
            array (
                'id'       => 'who-3-des',
                'type'     => 'Textarea',
                'title'    => __( '#3 description', 'redux-framework-demo' ),
                'subtitle' => __( '#3 description', 'redux-framework-demo' ),
                'default'  => 'At Tycho Entertainment, we view our clients as partners. Our relationship begins before your event and carries on through your next 10. We are committed to excellence and always “at your service.'
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
    'title' => __( 'Social', 'redux-framework-demo' ),
    'id'    => 'main_social',
    'desc'  => __( 'Social icon links', 'redux-framework-demo' ),
    'icon'  => 'el el-twitter',
    'fields' => array (
        array(
            'id'         => 'facebook',
            'type'       => 'Text',
            'section_id' => 'social_facebook',
            'title'      => 'Facebook',
            'subtitle'   => 'Enter facebook url'
        ),
        array(
            'id'         => 'twitter',
            'type'       => 'Text',
            'section_id' => 'social_twitter',
            'title'      => 'Twitter',
            'subtitle'   => 'Enter twitter url'
        ),
        array(
            'id'         => 'pinterest',
            'type'       => 'Text',
            'section_id' => 'social_pinterest',
            'title'      => 'Pinterest',
            'subtitle'   => 'Enter pinterest url'
        ),
        array(
            'id'         => 'linkedin',
            'type'       => 'Text',
            'section_id' => 'social_linkedin',
            'title'      => 'Linkedin',
            'subtitle'   => 'Enter linkedin url'
        ),
    )
) );

    if ( file_exists( dirname( __FILE__ ) . '/../README.md' ) ) {
        $section = array(
            'icon'   => 'el el-list-alt',
            'title'  => __( 'Documentation', 'redux-framework-demo' ),
            'fields' => array(
                array(
                    'id'       => '17',
                    'type'     => 'raw',
                    'markdown' => true,
                    'content_path' => dirname( __FILE__ ) . '/../README.md', // FULL PATH, not relative please
                    //'content' => 'Raw content here',
                ),
            ),
        );
        Redux::setSection( $opt_name, $section );
    }
    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

