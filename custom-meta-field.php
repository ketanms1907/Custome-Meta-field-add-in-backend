/* Register metabox for related case study on solution page */
function adding_custom_meta_boxes() {
	//global $post;
	global $post;

    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'solution-template.php' )
        {
   
		add_meta_box( 
			'related_case_studies',
			__( 'Related Case Studies' ),
			'render_related_case_studies',
			array('page'),
			'normal',
			'default'
		);
		}else{
			add_meta_box( 
			'related_case_studies',
			__( 'Related Case Studies' ),
			'render_related_case_studies',
			array('solutions','products'),
			'normal',
			'default'
			);
		}
	}
}
 
add_action( 'add_meta_boxes', 'adding_custom_meta_boxes' );

