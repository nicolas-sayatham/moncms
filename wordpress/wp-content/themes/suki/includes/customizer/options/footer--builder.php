<?php
/**
 * Customizer settings: Footer > Builder
 *
 * @package Suki
 **/

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

$section = 'suki_section_footer_builder';

/**
 * ====================================================
 * Builder
 * ====================================================
 */

ob_start(); ?>
<span class="button button-secondary suki-builder-hide suki-builder-toggle"><span class="dashicons dashicons-no"></span><?php esc_html_e( 'Hide', 'suki' ); ?></span>
<span class="button button-primary suki-builder-show suki-builder-toggle"><span class="dashicons dashicons-edit"></span><?php esc_html_e( 'Footer Builder', 'suki' ); ?></span>
<?php $switcher = ob_get_clean();

// --- Blank: Footer Builder Switcher
$wp_customize->add_control( new Suki_Customize_Control_Blank( $wp_customize, 'footer_builder_actions', array(
	'section'     => $section,
	'settings'    => array(),
	'description' => $switcher,
	'priority'    => 10,
) ) );

// Widgets columns
$key = 'footer_widgets_bar';
$wp_customize->add_setting( $key, array(
	'default'     => suki_array_value( $defaults, $key ),
	'sanitize_callback' => array( 'Suki_Customizer_Sanitization', 'select' ),
) );
$wp_customize->add_control( $key, array(
	'type'        => 'select',
	'section'     => $section,
	'label'       => esc_html__( 'Widgets columns', 'suki' ),
	'choices'     => array(
		0 => esc_html__( '-- Disabled --', 'suki' ),
		1 => esc_html__( '1 column', 'suki' ),
		2 => esc_html__( '2 columns', 'suki' ),
		3 => esc_html__( '3 columns', 'suki' ),
		4 => esc_html__( '4 columns', 'suki' ),
		5 => esc_html__( '5 columns', 'suki' ),
		6 => esc_html__( '6 columns', 'suki' ),
	),
	'priority'    => 10,
) );

// ------
$wp_customize->add_control( new Suki_Customize_Control_HR( $wp_customize, 'hr_footer_builder', array(
	'section'     => $section,
	'settings'    => array(),
	'priority'    => 20,
) ) );

// Bottom bar elements
$config = suki_get_footer_builder_configurations();
$key = 'footer_elements';
$settings = array();
foreach ( $config['locations'] as $slug => $label ) {
	$settings[ $slug ] = $key . '_' . $slug;
}
foreach ( $settings as $setting ) {
	$wp_customize->add_setting( $setting, array(
		'default'     => suki_array_value( $defaults, $setting ),
		'sanitize_callback' => array( 'Suki_Customizer_Sanitization', 'builder' ),
	) );
}
$wp_customize->add_control( new Suki_Customize_Control_Builder( $wp_customize, $key, array(
	'settings'    => $settings,
	'section'     => $section,
	'label'       => esc_html__( 'Bottom bar elements', 'suki' ),
	'choices'     => $config['choices'],
	'labels'      => $config['locations'],
	'limitations' => array(),
	'priority'    => 20,
) ) );