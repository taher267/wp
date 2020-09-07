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

//google font themeshaper
//https://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
function theme_slug_fonts_url() {
$fonts_url = '';
 
return $fonts_url;
}
