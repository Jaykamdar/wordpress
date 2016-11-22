<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <?php if(justcontent_get_favicon() != '') : ?>
    <link rel="icon" href="<?php echo esc_url(justcontent_get_favicon()); ?>" type="image/x-icon">   
    <?php endif; ?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> 
</head>
<body <?php body_class(''); ?>>
<div id="kt-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" id="kt-logo">
                <h1 class="float" id="kt-bloginfo-name"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php the_title_attribute();?>"><?php echo get_bloginfo('name');?></a>
                </h1>
                <h2 id="kt-bloginfo-desc"><?php echo get_bloginfo('description');?></h2>
            </div>
        </div>
    </div>
</div><!--#header-area-container ends here-->
<div id="kt-main-nav">
<div class="container">
    <div class="row">
    <div class="col-md-12">
        <?php $justcontent_primary_menu_args =  
        array('theme_location'=>'primary',
              'container'=>false,
              'container_class'=>'',
              'container_id'=>'',
              'menu_class'=>'main-menu',
              'menu_id'=>'');
        wp_nav_menu($justcontent_primary_menu_args); ?> 
    </div>
    </div>
</div>
</div><!--#main-menu-container ends here-->
<?php if (get_header_image() != ''){    ?>
    <img style="margin-bottom:30px;" class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<?php } ?>