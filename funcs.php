add_theme_support;
register_default_headers;

//sidebar register
function twentytwenty_sidebar_registration() {

	register_sidebar(
		array_merge(
			array(
					'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
					'after_title'   => '</h2>',
					'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
					'after_widget'  => '</div></div>',
				),
			array(
				'name'        => __( 'Footer #1', 'twentytwenty' ),
				'id'          => 'sidebarjaza',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);

}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );



// Adding Google fonts to the editor

// function jaza_editor_styles() {
// add_editor_style( array( 'editor-style.css', theme_slug_fonts_url() ) );
// $OpenSans=('editor-style.css','//fonts.googleapis.com/css?family=Open+Sans:ital,wght@0,400;1,400;1,700');
// $Roboto=(array('editor-style.css','//fonts.googleapis.com/css?family=Roboto:ital,wght@0,100;0,300;0,500;1,100;1,400'));
// add_editor_style( array($OpenSans , $Roboto);
// }
// add_action( 'after_setup_theme', 'jaza_editor_styles' );

// Adding fonts to the Custom Header screen
function jaza_custom_header_fonts() {
wp_enqueue_style( 'openSans-style', '//fonts.googleapis.com/css?family=Open+Sans:ital,wght@0,400;1,400;1,700' );
wp_enqueue_style( 'roboto-style', '//fonts.googleapis.com/css?family=Roboto:ital,wght@0,100;0,300;0,500;1,100;1,400' );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'jaza_custom_header_fonts' );




//google font themeshaper
//https://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/

