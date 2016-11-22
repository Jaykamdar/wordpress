<?php if(is_active_sidebar('footer-sidebar-1') && is_active_sidebar('footer-sidebar-2')): ?>
<div id="kt-footer">
    <div class="container">
        <div class="row">
        <?php 
              $justcontent_fsn = esc_html(justcontent_footer_sidebars()); 
              if($justcontent_fsn == 1):
        ?>
               <div class="col-md-12 kt-sidebar">
                    <?php if (!dynamic_sidebar( 'footer-sidebar-1')): ?>
                        <div class="pre-widget">
                            <h3><?php _e('Widgetized Sidebar', 'justcontent'); ?></h3>
                            <p><?php _e('This panel is active and ready for you to add 
                            some widgets via the WP Admin', 'justcontent'); ?></p>
                        </div>
                    <?php endif; ?>
                </div>    
        <?php elseif($justcontent_fsn == 2): ?>
                <div class="col-md-6 kt-sidebar">
                    <?php if (!dynamic_sidebar( 'footer-sidebar-1')): ?>
                        <div class="pre-widget">
                            <h3><?php _e('Widgetized Sidebar', 'justcontent'); ?></h3>
                            <p><?php _e('This panel is active and ready for you to add 
                            some widgets via the WP Admin', 'justcontent'); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 kt-sidebar">
                    <?php if (!dynamic_sidebar( 'footer-sidebar-2')): ?>
                        <div class="pre-widget">
                            <h3><?php _e('Widgetized Sidebar', 'justcontent'); ?></h3>
                            <p><?php _e('This panel is active and ready for you to add 
                            some widgets via the WP Admin', 'justcontent'); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
        <?php else: ?>
               <div class="col-md-12 kt-sidebar">
                    <?php if (!dynamic_sidebar( 'footer-sidebar-1')): ?>
                        <div class="pre-widget">
                            <h3><?php _e('Widgetized Sidebar', 'justcontent'); ?></h3>
                            <p><?php _e('This panel is active and ready for you to add 
                            some widgets via the WP Admin', 'justcontent'); ?></p>
                        </div>
                    <?php endif; ?>
                </div>    
        <?php endif ;?>    
        </div>
    </div>
</div>
<?php endif; ?>

<div id="kt-copyright" class="text-center">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>
                <a rel="nofollow" href="<?php echo esc_url( __( 'http://www.ketchupthemes.com/just-content/', 'justcontent')); ?>"><?php printf( __( 'Just Content', 'justcontent' )); ?></a> 
                <?php echo __('&copy;','justcontent'); ?> 
                <?php echo date('Y'); ?>
                <?php echo get_bloginfo('name'); ?>
            </p>

        </div>
    </div>
</div>
</div>
<!--#footer-area-container ends here-->
<?php wp_footer(); ?>
</body>
</html>
