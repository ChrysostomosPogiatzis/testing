<?php if ( ! defined( 'UT_THEME_VERSION') ) exit( 'No direct script access allowed' );
/**
 * Builds the Theme Option UI.
 *
 * @uses      ot_register_settings()
 *
 * @package   OptionTree
 * @author    Derek Herman <derek@valendesigns.com>
 * @copyright Copyright (c) 2012, Derek Herman
 */

/* get the settings array */
$get_settings = _ut_theme_options();

/* sections array */
$sections = isset( $get_settings['sections'] ) ? $get_settings['sections'] : array();

/* settings array */
$settings = isset( $get_settings['settings'] ) ? $get_settings['settings'] : array();

/* build the Theme Options */
if ( function_exists( 'ot_register_settings' ) ) {

  ot_register_settings( array(
      array(
        'id'                  => 'option_tree',
        'pages'               => array( 
          array(
            'id'              => 'ot_theme_options',
            'parent_slug'     => apply_filters( 'ot_theme_options_parent_slug', 'unite-welcome-page' ),
            'page_title'      => apply_filters( 'ot_theme_options_page_title', __( 'Theme Options', 'unitedthemes' ) ),
            'menu_title'      => apply_filters( 'ot_theme_options_menu_title', __( 'Theme Options', 'unitedthemes' ) ),
            'capability'      => apply_filters( 'ot_theme_options_capability', 'edit_theme_options' ),
            'menu_slug'       => 'ut_theme_options',
            'icon_url'        => apply_filters( 'ot_theme_options_icon_url', null ),
            'position'        => apply_filters( 'ot_theme_options_position', null ),
            'updated_message' => apply_filters( 'ot_theme_options_updated_message', __( 'Theme Options updated.', 'unitedthemes' ) ),
            'reset_message'   => apply_filters( 'ot_theme_options_reset_message', __( 'Theme Options reset.', 'unitedthemes' ) ),
            'button_text'     => apply_filters( 'ot_theme_options_button_text', __( 'Save Changes', 'unitedthemes' ) ),
            'screen_icon'     => 'themes',
            'sections'        => $sections,
            'settings'        => $settings
          )
        )
      )
    ) 
  );

}

/* End of file ot-ui-theme-options.php */
/* Location: ./option-tree/ot-ui-theme-options.php */