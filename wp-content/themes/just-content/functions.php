<?php
/***
*
THEME SETUP
*
***/
add_action('after_setup_theme', 'justcontent_theme_setup');
function justcontent_theme_setup(){
    
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_image_size('blog-listing-image',1200,600,true);
        add_theme_support('title-tag');
        add_theme_support('post-formats', array('image','gallery','video','audio'));
        global $content_width;
        if (!isset( $content_width ) )
        $content_width = 800;
        
        add_editor_style( 'style.css' );
        //Load Header
        $justcontent_header_defaults = array(
        'default-image'          => '',
        'random-default'         => false,
        'width'                  => '1920',
        'height'                 => '450',
        'flex-height'            => false,
        'flex-width'             => false,
        'default-text-color'     => '',
        'header-text'            => false,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        );
        add_theme_support( 'custom-header', $justcontent_header_defaults );
        
        /**Custom Background**/
       
        $justcontent_background_args = array(
        'default-color' => '',
        'default-image' => get_template_directory_uri().'/img/geometry2.png',
        'wp-head-callback' => 'justcontent_custom_background_cb',
        );
        add_theme_support( 'custom-background', $justcontent_background_args );
        /**Registering Primary Menu**/
        register_nav_menu( 'primary', __('Main Menu','justcontent') );
        
        load_theme_textdomain('justcontent', get_template_directory() . '/languages');
        
function justcontent_custom_background_cb() {
  $background = set_url_scheme( get_background_image() );
  $color = get_theme_mod( 'background_color', get_theme_support( 'custom-background', 'default-color' ) );

  if ( ! $background && ! $color )
    return;

  $style = $color ? "background-color: #$color;" : '';

  if ( $background ) {
    $image = " background-image: url('$background');";

    $repeat = get_theme_mod( 'background_repeat', get_theme_support( 'custom-background', 'default-repeat' ) );
    if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
      $repeat = 'repeat';
    $repeat = " background-repeat: $repeat;";

    $position = get_theme_mod( 'background_position_x', get_theme_support( 'custom-background', 'default-position-x' ) );
    if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
      $position = 'left';
    $position = " background-position: top $position;";

    $attachment = get_theme_mod( 'background_attachment', get_theme_support( 'custom-background', 'default-attachment' ) );
    if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
      $attachment = 'scroll';
    $attachment = " background-attachment: $attachment;";

    $style .= $image . $repeat . $position . $attachment;
  }
?>
<style type="text/css" id="custom-background-css">
body.custom-background { <?php echo trim( $style ); ?> }
</style>
<?php
}
}
/***
*
LOAD CSS AND JS STYLES
*
***/
    add_action('wp_enqueue_scripts', 'justcontent_load_scripts');
    function justcontent_load_scripts() {
        wp_enqueue_script('justcontent_bootstrap', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'',true);
        wp_enqueue_script('justcontent_slicknav', get_template_directory_uri().'/js/jquery.slicknav.min.js',array('jquery'),'',true);
        wp_enqueue_script('justcontent_matchHeight',get_template_directory_uri().'/js/jquery.matchHeight.js',array('jquery'),'',true);
        wp_enqueue_script('justcontent_init',get_template_directory_uri().'/js/theme_init.js',array('jquery'),'',true);
        wp_localize_script('justcontent_init', 'init_vars', array(
            'label' => __('Menu', 'justcontent')
        ));
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
}
add_action('wp_enqueue_scripts', 'justcontent_load_styles');
function justcontent_load_styles(){ 
        wp_enqueue_style( 'justcontent_bootstrap-theme', get_template_directory_uri().'/css/bootstrap-theme.min.css','','','all' );
        wp_enqueue_style( 'justcontent_bootstrap', get_template_directory_uri().'/css/bootstrap.min.css','','','all' );
        wp_enqueue_style( 'justcontent_font-awesome', get_template_directory_uri().'/css/font-awesome.min.css','','','all' );
        wp_enqueue_style( 'justcontent_hovercss',get_template_directory_uri().'/css/hover.css','','','all');
        wp_enqueue_style( 'justcontent_slicknav',get_template_directory_uri().'/css/slicknav.css','','','all');
        wp_enqueue_style( 'justcontent_elegant-font',get_template_directory_uri().'/fonts/elegant_font/HTML_CSS/style.css','','','all');
        wp_enqueue_style( 'justcontent_style', get_stylesheet_uri(),'','','all' );
}    
add_action('wp_head', 'justcontent_add_ie_html5_shim');
function justcontent_add_ie_html5_shim () {
        echo '<!--[if lt IE 9]>';
        echo '<script src="'.get_template_directory_uri().'/js/html5shiv.js"></script>';
        echo '<![endif]-->';
}
/***
*
SIDEBARS INITIALIZATION
*
***/
add_action('widgets_init', 'justcontent_widgets_init');
function justcontent_widgets_init() {
    register_sidebar(array(
        'name' => __('Main Sidebar', 'justcontent' ),
        'id'   => 'sidebar',
        'description' => __('This is the widgetized sidebar.', 'justcontent' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Footer Sidebar 1', 'justcontent' ),
        'id'   => 'footer-sidebar-1',
        'description' => __('This is the widgetized sidebar 1 from left to the right.', 'justcontent' ),
        'before_widget' => '<div id="%1$s" class="footerwidget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Footer Sidebar 2', 'justcontent' ),
        'id'   => 'footer-sidebar-2',
        'description' => __('This is the widgetized sidebar 2 from left to the right.', 'justcontent' ),
        'before_widget' => '<div id="%1$s" class="footerwidget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
}
/***
*
THEME FUNCTIONS
*
***/
function justcontent_get_post_format($pid){ 
    $justcontent_post_format = get_post_format($pid);
    
    switch($justcontent_post_format){
    
        case false:
        return 'document';
    
        case 'video':
        return 'film';
        
        case 'audio':
        return 'mic_alt';
        
        case 'link':
        return 'link_alt';
        
        case 'gallery':
        return 'images';
        
        case 'image':
        return 'image';
        
        case 'quote':
        return 'quotations_alt';
    }
}
function justcontent_excerpt_length( $length ) {
    return 80;
}
add_filter( 'excerpt_length', 'justcontent_excerpt_length', 999 );
function justcontent_get_video(){
    global $justcontent_videos;
    $post_id = get_the_ID();

    if( empty( $justcontent_videos ) ) $justcontent_videos = array();
    if( isset( $justcontent_videos[$post_id]) ) return $justcontent_videos[$post_id];

    $content = get_the_content();
    $content = apply_filters( 'the_content', $content );
    $content = str_replace( ']]>', ']]&gt;', $content );
    $content = trim($content);
    
    $pformat = justcontent_get_post_format($post_id);
    
    if($pformat=='image'):
        list($line, $content) = explode("\n", $content."\n", 2);
    else:
        list($line, $content) = explode("\n", $content, 2);
    endif;
    
    if ( preg_match('/\<\s*(iframe|object|embed|img)/i', $line) ) {
        $justcontent_videos[$post_id] = strip_tags($line, '<iframe><object><embed><img>');
    }
    else {
        $justcontent_videos[$post_id] = false;
    }

    return $justcontent_videos[$post_id];
}
/** THEME OPTIONS **/
add_action( 'admin_menu', 'justcontent_add_admin_menu' );
add_action( 'admin_init', 'justcontent_settings_init' );


function justcontent_add_admin_menu(  ) { 
    add_theme_page( __('JustContent','justcontent'), __('JustContent Settings','justcontent'), 'manage_options', 'justcontent', 'justcontent_options_page' );

}


function justcontent_settings_init(  ) { 

    register_setting( 'pluginPage', 'justcontent_settings' );

    add_settings_section(
        'justcontent_pluginPage_section', 
        __( 'General Settings For Theme.', 'justcontent' ), 
        'justcontent_settings_section_callback', 
        'pluginPage'
    );
    add_settings_field( 
        'justcontent_add_favicon', 
        __( 'Favicon URL', 'justcontent' ), 
        'justcontent_add_favicon_render', 
        'pluginPage', 
        'justcontent_pluginPage_section' 
    );
    add_settings_field( 
        'justcontent_footer_sidebars', 
        __( 'Select Footer Sidebars', 'justcontent' ), 
        'justcontent_footer_sidebars_render', 
        'pluginPage', 
        'justcontent_pluginPage_section' 
    );
    
    
}
function justcontent_footer_sidebars_render(  ) { 

    $options = get_option( 'justcontent_settings' );
    ?>
    <select name='justcontent_settings[justcontent_footer_sidebars]'>
        <option value="1" <?php selected( strip_tags($options['justcontent_footer_sidebars']), 1 ); ?>><?php echo __('1 Column','justcontent'); ?> </option>
        <option value="2" <?php selected( strip_tags($options['justcontent_footer_sidebars']), 2 ); ?>><?php echo __('2 Columns','justcontent'); ?></option>
    </select>

<?php }
function justcontent_add_favicon_render() { 

    $options = get_option( 'justcontent_settings' );
    $value = esc_url_raw($options['justcontent_add_favicon']);
    ?>
    <input type='text' name='justcontent_settings[justcontent_add_favicon]' value='<?php echo $value; ?>'>
    <?php
}
function justcontent_settings_section_callback(  ) {
     
    echo __('Premium Features', 'justcontent');
    echo'<ul style="background:#ffffff; padding:10px; width:90%;">
        <li>'.__('Favicon & Logo Upload through uploaded','justcontent').'</li>
        <li>'.__('Upload Logo & Favicon','justcontent').'</li>
        <li>'.__('Full Width Slider','justcontent').'</li>
        <li>'.__('Advanced Post Formats Options','justcontent').'</li>
        <li>'.__('Slider (enable/disable title & description)','justcontent').'</li>
        <li>'.__('Testimonials','justcontent').'</li>
        <li>'.__('Google Fonts','justcontent').'</li>
        <li>'.__('Color Picker','justcontent').'</li>
        <li>'.__('Gallery','justcontent').'</li>
        <li>'.__('1-4 Columns Widgetized Footer Sidebar','justcontent').'</li>
        </ul>
        <p>
        <a rel="nofollow" href="'.esc_url( 'http://ketchupthemes.com/just-content/').'" style="background:red; margin:5px 0; padding:10px 20px; color:#ffffff; margin-top:10px; text-decoration:none;">'.__('Update to Premium','justcontent').'</a></p>';
}
function justcontent_options_page() { 
?>
    <form action='options.php' method='post' name="settingsform">
     
        <h2><?php _e('Theme Options','justcontent'); ?></h2>
            <?php if( isset($_GET['settings-updated']) ) { ?>
            <div id="message" class="updated">
                <p><strong><?php _e('Settings saved.','justcontent') ?></strong></p>
            </div>
              
            <?php } ?>
        <?php
        settings_fields( 'pluginPage' );
        do_settings_sections( 'pluginPage' );
        submit_button();
        ?>
    </form>
    <?php
}
function justcontent_get_favicon(){
    $options = get_option('justcontent_settings');
    $favicon = $options['justcontent_add_favicon'];
    
    return $favicon;
}
function justcontent_footer_sidebars(){
    $options = get_option('justcontent_settings');
    $justcontent_footer_sidebars = $options['justcontent_footer_sidebars'];
    
    return $justcontent_footer_sidebars;
}
?>