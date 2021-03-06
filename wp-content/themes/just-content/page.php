<?php get_header();?>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="kt-main">
                <?php if(have_posts()):while(have_posts()):the_post();?>
                
                    <?php get_template_part('content',get_post_format());?>
                    
                <?php endwhile; ?>
                
                <!-- Comments Section -->
                
                <div class="row">
                            <div class="col-md-12">
                                <div id="kt-comments">
                                        <?php comments_template( '', true ); ?>
                                </div>
                            </div>
                        </div> 
            
                <!-- Comments Section ends here --> 
                <?php else: ?>
                <div class="kt-no-found-posts"><?php echo __('No Page found.Sorry.','justcontent'); ?></div>
                <?php endif;?>
                </div><!--#main-content-container ends here-->
            </div>
            <div class="col-md-3">
              <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer();?>