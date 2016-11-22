<div <?php post_class('kt-article');?> id="post-<?php the_ID();?>">
                <!--Blog Meta go here-->
                    <div class="kt-meta">
                        <div class="row">
                            <div class="col-md-1 col-sm-6 col-xs-6">
                                <div class="kt-post-format">
                                <?php $justcontent_format = justcontent_get_post_format(get_the_ID());?>
                                <span class="icon_<?php echo $justcontent_format;?>"></span>
                                </div>   
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 pull-right">
                                <div class="kt-calendar">
                                <span class="kt-post-date pull-right">
                                    <?php echo the_time(get_option('date_format'));?>
                                </span>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-article-contents">
                        <h1 class="text-center"><a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>" class="grow">
                        <?php 
                        $justcontent_thetitle = get_the_title($post->ID);
                        $justcontent_origpostdate = get_the_date(get_option('date_format'), $post->post_parent);
                        if($justcontent_thetitle == null):
                            echo $justcontent_origpostdate; 
                        else:
                            the_title();
                        endif;
                        ?>
                        </a></h1>
                        <?php if(!is_page()): ?>
                        <div class="kt-categories">
                            <span class="icon_pushpin"></span>
                            <?php echo get_the_category_list( ',','',get_the_ID()); ?>
                        </div>
                        <?php endif; ?>
                        <div class="kt-image-container">
                        <?php 
                        if($justcontent_format == 'film' || $justcontent_format =='mic_alt' || $justcontent_format=='image'):
                            if(is_single()): ''; else: 
                            echo justcontent_get_video();
                            endif; 
                        elseif(has_post_thumbnail()):
                            the_post_thumbnail('blog-listing-image',array('class'=>'img-responsive kt-image'));
                        endif;
                        ?>    
                        <a href="<?php the_permalink();?>" class="kt-overlay push"></a>
                        </div>
                        
                        <?php if(is_page() || is_singular() || is_single()):
                        the_content();
                        else:
                        ?>
                        <p><?php the_excerpt();
                        endif;
                        ?></p>
                        <!--if is a single page or a post-->
                        <?php if(is_single() || is_singular() || is_page()):?>
                            <?php if(has_tag()):?>
                            <hr>
                                <div class="kt-tags">
                                <?php
                                    echo get_the_tag_list('<p><i class="icon_tag_alt"></i>'.__(' Tags: ','justcontent').' ',', ','</p>');
                                ?>
                                </div> 
                                <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'justcontent' ) . '</span>', 'after' => '</div>' ) ); ?>
                                <div class="clear"></div>   
                            <?php endif; ?>
                        <?php else: ?>
                            <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>" 
                            class="kt-read-more outline-outward"><?php echo __('Read More Here!','justcontent');?></a>
                            <a href="#">
                            <span class="comments-number pull-right">
                            <i class="icon_comment_alt"></i><?php echo get_comments_number();?></span>
                            </a><!--.comments-number ends here-->
                        <?php endif;?>
                </div><!--.blog-listing-contents-->
</div><!--.blog-listing-post ends here-->