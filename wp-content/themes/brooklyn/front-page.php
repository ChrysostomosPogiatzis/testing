<?php get_header(); ?>

<?php if( is_home() ) : ?>

    <div class="grid-container">
    	
        <?php $grid = ut_blog_has_sidebar() ? 'grid-75 tablet-grid-100 mobile-grid-100' : 'grid-100 tablet-grid-100 mobile-grid-100'; ?>
        
        <div id="primary" class="grid-parent <?php echo $grid; ?>">
            
            <?php if( apply_filters( 'unite_blog_layout', ot_get_option('ut_blog_layout', 'classic') ) == 'grid' ) : ?>          
            
                <div class="ut-blog-grid clearfix">    
            
            <?php endif; ?>                                 
                                  
                    <?php if ( have_posts() ) : ?>
        
                        <?php /* Start the Loop */ ?>
                    
                        <?php while ( have_posts() ) : the_post(); ?>
                    
                        <?php
                            
                            /* before article hook */
                            ut_before_article_hook();
                                
                            /* Include the Post-Format-specific template for the content.
                             * If you want to overload this in a child theme then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                             
                            get_template_part( 'partials/' . unite_get_template_path() . '/content', get_post_format() );
                            
                            /* after article hook */
                            ut_after_article_hook();
                            
                            $exclude_posts[] = get_the_ID();
                            
                        ?>
                    
                        <?php endwhile; ?>
        
                    <?php else : ?>
            
                        <?php get_template_part( 'no-results', 'index' ); ?>
            
                <?php endif; ?>
             
             
            <?php if( apply_filters( 'unite_blog_layout', ot_get_option('ut_blog_layout', 'classic') ) == 'grid' ) : ?>          
            
            </div>    
            
            <?php endif; ?>
             
        </div><!-- primary --> 
        
        <?php get_sidebar(); ?>
       
    </div><!-- grid-container -->   
   	
    <div class="ut-scroll-up-waypoint-wrap">
        <div class="ut-scroll-up-waypoint" data-section="section-to-main-content"></div>
    </div>
    
    <?php if( $wp_query->max_num_pages > 1 ) : ?>

        </div>

        <div id="ut-blog-navigation">

            <div class="grid-container">

                <div class="grid-100 mobile-grid-100 tablet-grid-100">

                <?php if ( have_posts() ) : ?>
                    <?php unitedthemes_content_nav( 'nav-below' ); ?>
                <?php endif; ?>

                </div><!-- .grid-100 -->

            </div><!-- .grid-container -->

        </div><!-- #ut-blog-navigation -->

        <div class="ut-empty-div">

    <?php endif; ?>  

<?php elseif( is_front_page() && ot_get_option( 'ut_site_layout', 'multisite' ) == 'multisite' ) : ?>

    
    <?php
    
        $ut_page_class     = get_post_meta( get_queried_object_id() , 'ut_section_class' , true);
        $ut_page_fullwidth = get_post_meta( get_queried_object_id() , 'ut_page_fullwidth' , true);
    
    ?>    
    
    
    <?php if( !$ut_page_fullwidth || $ut_page_fullwidth == 'off' ) : ?>
        
        <div class="grid-container">
    
    <?php endif; ?>
    
        <div id="primary" class="grid-parent grid-100 tablet-grid-100 mobile-grid-100 <?php echo $ut_page_class; ?>">
            
            <?php while ( have_posts() ) : the_post(); ?>
            
                <?php get_template_part( 'partials/content', 'front-page' ); ?>
            
            <?php endwhile; ?>
			
        </div>
    
    <?php if( !$ut_page_fullwidth || $ut_page_fullwidth == 'off' ) : ?>
        
        </div>
    
    <?php endif; ?>
    
    
<?php else: ?>

    <?php get_template_part( 'partials/section' ); ?>    

<?php endif;  ?>

<?php get_footer(); ?>