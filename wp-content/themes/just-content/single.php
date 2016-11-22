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
                 
                <!-- Pagination -->
                <div id="kt-pagination">
                    <div class="alignleft">
                    <?php previous_posts_link(__( '&laquo; Newer posts', 'justcontent' )); ?>
                    </div>
                    <div class="alignright">
                    <?php next_posts_link(__( 'Older posts &raquo;', 'justcontent' )); ?>
                    </div>
                </div>
                <!-- Pagination Ends Here -->
                <?php else:?>
                <div class="kt-no-found-posts"><?php echo __('No Posts found.Sorry.','justcontent');?></div>
                <?php endif;?>
                </div><!--#main-content-container ends here-->
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

<?php get_footer();?>