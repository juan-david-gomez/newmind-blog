<?php 
		require_once('wp_bootstrap_navwalker.php');

		register_nav_menus(array(
				'principal'=>'Menú Principal'
		));

		if ( function_exists( 'add_theme_support' ) ) {
		    add_theme_support( 'post-thumbnails' );
		    // set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
		    // // additional image sizes
		    // // delete the next line if you do not need additional image sizes
		    add_image_size( 'thumb1200*400', 1200, 400, true );
		    add_image_size( 'thumb360*280', 360, 280, true );
		    // add_image_size( 'category-full', 783, 290, true );
		}
	



	    /**
		 * Enqueue scripts
		 *
		 * @param string $handle Script name
		 * @param string $src Script url
		 * @param array $deps (optional) Array of script names on which this script depends
		 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
		 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
		 */
		function recursos() {
			// wp_enqueue_script( '$handle', '$src', array( 'jquery' ), false, false);
			wp_enqueue_style( 'style', get_stylesheet_uri());
			wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css');
			wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');

			wp_enqueue_script('jquery',get_template_directory_uri().'/assets/plugins/jquery-1.10.2.js',array(),'',true);
			wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/plugins/bootstrap.min.js',array('jquery'),'',true);			
			wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js',array('jquery'),'',true);
			// wp_enqueue_script('skel-viewport',get_template_directory_uri().'/assets/js/skel-viewport.min.js',array('jquery'),'',true);
			// wp_enqueue_script('util',get_template_directory_uri().'/assets/js/util.js',array('jquery'),'',true);
			// wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js',array('jquery'),'',true);
		}
	
		add_action( 'wp_enqueue_scripts', 'recursos' );
?>