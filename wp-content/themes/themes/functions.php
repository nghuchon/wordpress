<?php
function tnt_widgets_init() {

    register_sidebar( array(
		'name' => __( 'Header', 'tnt' ),
		'id' => 'primary-widget-area',
		'description' => __( 'Change Logo', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    register_sidebar(array(
	   'name' => __( 'Footer', 'tnt' ),
		'id' => 'footer',
		'description' => __( 'Show footer', 'twentyten' ),
      	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
       ));
       register_sidebar(array(
	   'name' => __( 'Social', 'tnt' ),
		'id' => 'social',
		'description' => __( 'Show Social', 'twentyten' ),
      	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
       ));
}
add_action( 'widgets_init', 'tnt_widgets_init' );
class logo extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'logo', // Base ID
			'Logo header', // Name
			array( 'description' => __( 'Show logo header', 'text_domain	' ), ) // Args
		);
	}
	
	public function form( $instance_img ) {
		if ( $instance_img ) {
			$linkimg_2 = esc_attr( $instance_img[ 'linkimg_2' ] );	
		}
		?>
		
        <p>
		<label><?php _e( 'Url image logo:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'linkimg_2' ); ?>" name="<?php echo $this->get_field_name( 'linkimg_2' ); ?>" type="text" value="<?php echo $linkimg_2; ?>" />
		</p>
                
		<?php
	}
	public function update( $new_instance, $old_instance ) {
		$instance_img = $old_instance;
		$instance_img['linkimg_2'] = strip_tags( $new_instance['linkimg_2'] );
		return $instance_img;
	}

	public function widget( $args, $instance_img ) {
		extract( $args );
		
		$linkimg_2 = apply_filters( 'widget_title', $instance_img['linkimg_2'] );
		?>	
        <a href="<?php bloginfo("url");?>"><img src="<?php echo $linkimg_2;?>" alt="logo"/></a>
           
            
		<?php
	}
}
add_action( 'widgets_init', create_function( '', 'register_widget( "logo" );' ) );

class logofooter extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'logofooter', // Base ID
			'Logo footer', // Name
			array( 'description' => __( 'Show logo footer', 'text_domain	' ), ) // Args
		);
	}
	
	public function form( $instance_img ) {
		if ( $instance_img ) {
			$linkimg_2 = esc_attr( $instance_img[ 'linkimg_2' ] );	
		}
		?>
		
        <p>
		<label><?php _e( 'Url image logo:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'linkimg_2' ); ?>" name="<?php echo $this->get_field_name( 'linkimg_2' ); ?>" type="text" value="<?php echo $linkimg_2; ?>" />
		</p>
                
		<?php
	}
	public function update( $new_instance, $old_instance ) {
		$instance_img = $old_instance;
		$instance_img['linkimg_2'] = strip_tags( $new_instance['linkimg_2'] );
		return $instance_img;
	}

	public function widget( $args, $instance_img ) {
		extract( $args );
		
		$linkimg_2 = apply_filters( 'widget_title', $instance_img['linkimg_2'] );
		?>
        <div class="col-md-6 col-sm-4 col-xs-4">
            <div id="logo_footer">
                <a href="<?php bloginfo("url");?>"><img src="<?php echo $linkimg_2;?>" alt="logo"/></a>
            </div>
            
            <?php wp_nav_menu( array('menu' => 'menu footer','menu_class'=>'nav nav-pills')); ?>
        </div>
		<?php
	}
}
add_action( 'widgets_init', create_function( '', 'register_widget( "logofooter" );' ) );

class social extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'social', // Base ID
			'Social', // Name
			array( 'description' => __( 'Show social', 'text_domain	' ), ) // Args
		);
	}
	
	public function form( $instance_img ) {
		if ( $instance_img ) {
            $linkimg_1 = esc_attr( $instance_img[ 'linkimg_1' ] );
            $img1 = esc_attr( $instance_img[ 'img1' ] );
			
		}
		?>
		<p>
		<label><?php _e( 'Url icon social:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'img1' ); ?>" name="<?php echo $this->get_field_name( 'img1' ); ?>" type="text" value="<?php echo $img1; ?>" />
		</p>
        <p>
		<label><?php _e( 'Link social:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'linkimg_1' ); ?>" name="<?php echo $this->get_field_name( 'linkimg_1' ); ?>" type="text" value="<?php echo $linkimg_1; ?>" />
		</p>
        
		<?php
	}
	public function update( $new_instance, $old_instance ) {
		$instance_img = $old_instance;
        $instance_img['linkimg_1'] = strip_tags( $new_instance['linkimg_1'] );
		$instance_img['img1'] = strip_tags( $new_instance['img1'] );
       
		return $instance_img;
	}

	public function widget( $args, $instance_img ) {
		extract( $args );
		$linkimg_1 = apply_filters( 'widget_title', $instance_img['linkimg_1'] );
		$img1 = apply_filters( 'widget_title', $instance_img['img1'] );
		?>
        <li><a href="<?php echo $linkimg_1;?>" target="_blank"><img src="<?php echo $img1;?>"alt="social"/></a></li>
		<?php
	}
}
add_action( 'widgets_init', create_function( '', 'register_widget( "social" );' ) );

?>