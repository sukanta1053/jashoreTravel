<?php
// Do not allow direct access to the file.
if(  ! defined( 'ABSPATH' ) ) {
    exit;
}

function all_colors_home_imagse () {
	?>
		<div class="all-home-imges">
		<?php for($i=1;$i<=3;$i++) { 
		if( get_theme_mod('all_colors_custom_img_'.$i)) {
			?>
				<div class="img-all-top">
				<?php if( get_theme_mod('all_colorsurl'.$i)) { ?>
				    <a href="<?php echo esc_url(get_theme_mod('all_colorsurl'.$i)); ?>">
				<?php } ?>
					<img src="<?php echo esc_url(get_theme_mod('all_colors_custom_img_'.$i)); ?>" alt="<?php esc_attr('Home Image ','all-colors'); ?>" />
				<?php if( get_theme_mod('all_colorsurl'.$i)) { ?>
					</a>
				<?php } ?>
				</div>
			<?php } 
		} 
		?>
		</div>
	<?php
}
add_action( 'customize_register', 'all_colors_customize_home_images' );
 
function all_colors_customize_home_images( $wp_customize ) {
/**
 * Recent Posts
 */
		$wp_customize->add_panel( 'seos__custom_images_panel' , array(
			'title'       => __( 'Homepage Images', 'all-colors' ),
			'priority'    => 2,	
		) );

		for ($im=1;$im<=3; $im++) {
			
		$wp_customize->add_section( 'seos_custom_images_sections'.$im , array(
			'title'       => __( 'Image '.$im, 'all-colors' ),
			'panel'     => 'seos__custom_images_panel',
			'priority'    => 2,
			'description' => __( 'Select IMG. The image will be activated.', 'all-colors' ),	
		) );
		
		$wp_customize->add_setting( 'all_colors_custom_img_'.$im, array (
			'default' => '',			
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'all_colors_custom_img_'.$im, array(
			'label'    => __( 'Image (URL)', 'all-colors' ),	
			'description' => __( 'Load IMG - width: 300px / height: 360px', 'all-colors' ),
			'section'  => 'seos_custom_images_sections'.$im,
			'settings' => 'all_colors_custom_img_'.$im,
		) ) );
/*
		$wp_customize->add_setting( 'all_colorstitle'.$im, array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_colorstitle'.$im, array(
			'label'    => __( 'Image Title', 'all-colors' ),
			'description' => __( 'The title of your Image. Will be activated:', 'all-colors' ),			
			'section'  => 'seos_custom_images_sections'.$im,
			'settings' => 'all_colorstitle'.$im,
			'type' => 'text',
		) ) );
		
		$wp_customize->add_setting( 'all_colorscontent'.$im, array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_colorscontent'.$im, array(
			'label'    => __( 'Image Content', 'all-colors' ),
			'description'    => __( 'Recommended max 200 characters length', 'all-colors' ),		
			'section'  => 'seos_custom_images_sections'.$im,
			'settings' => 'all_colorscontent'.$im,
			'type' => 'textarea',
		) ) );
*/	
				
		$wp_customize->add_setting( 'all_colorsurl'.$im, array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_colorsurl'.$im, array(
			'label'    => esc_attr__( 'Image URL', 'all-colors'),			
			'section'  => 'seos_custom_images_sections'.$im,
			'settings' => 'all_colorsurl'.$im,
			'type' => 'url',
		) ) );
	}
}

/**
 * Styles
 */ 	

add_action( 'wp_enqueue_scripts', 'all_colors_home_images_styles' );	

function all_colors_home_images_styles() {
	
		wp_enqueue_style( 'all-colors-home-images', get_template_directory_uri() . '/css/home-images.css' );

 		if (( is_front_page() or is_home()) and !has_header_image()) { $content_background = ".all-home-imges .img-all-top {bottom: 0 !important;}";} else {$content_background ="";}

        wp_add_inline_style( 'all-colors-style-css', 
		$content_background
		);
}