<?php

/**
 * Default Sidebar
 * by www.unitedthemes.com
 */

// count the active sidebars to determine column sizes
$sidebars = is_active_sidebar( 'first-footer-widget-area' ) + is_active_sidebar( 'second-footer-widget-area' ) + is_active_sidebar( 'third-footer-widget-area' ) + is_active_sidebar( 'fourth-footer-widget-area' );

$sidebargrid = "grid-25";

if ($sidebars == "1") {
	
	// if only one - fullwidth
	$sidebargrid = "grid-100 tablet-grid-100 mobile-grid-100";

} elseif ($sidebars == "2") {
	
	// if two, split in half
	$sidebargrid = "grid-50 tablet-grid-50 mobile-grid-100";
	
} elseif ($sidebars == "3") {
	
	// if three, divide in thirds
	$sidebargrid = "grid-33 tablet-grid-33 mobile-grid-100";

} elseif ($sidebars == "4") {
	
	// if four, split in fourths
	$sidebargrid = "grid-25 tablet-grid-50 mobile-grid-100";
	
}

// cursor skin
$cursor_skin = ut_page_option( 'ut_footer_cursor_skin', 'global' ); ?>

<?php if ( $sidebars && ut_page_option( 'ut_footerarea', 'on' ) == 'on' && ut_search_result_status() ) : ?>
    
    <footer data-cursor-skin="<?php esc_attr_e( $cursor_skin ); ?>" class="footer ut-footer-has-widgets <?php echo ut_page_option('ut_footer_skin' , 'ut-footer-light'); ?> ut-footer-fullwidth-<?php echo ut_page_option( 'ut_footerarea_width', 'off' ); ?> ut-footer-mobile-<?php echo ut_page_option( 'ut_footerarea_hide_on_mobile', 'off' ); ?>">
        
        <div class="ut-footer-area ut-footer-area-<?php echo ut_page_option( 'ut_footerarea_spacing', 'content' ); ?>">

            <div class="grid-container">

            <?php if (is_active_sidebar( 'first-footer-widget-area' )) : ?>

                <div class="<?php echo $sidebargrid;?>">
                    <ul class="sidebar">
                        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                    </ul>
                </div>

            <?php endif;?>

            <?php if (is_active_sidebar( 'second-footer-widget-area' )) :?>

                <div class="<?php echo $sidebargrid;?>">
                    <ul class="sidebar">
                        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                    </ul>
                </div>

            <?php endif;?>

            <?php if( $sidebars == "4" ) { echo '<div class="clear hide-on-desktop hide-on-mobile"></div>'; } ?>

            <?php if (is_active_sidebar( 'third-footer-widget-area' )) : ?>

                <div class="<?php echo $sidebargrid;?>">
                    <ul class="sidebar">
                        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
                    </ul>
                </div>

            <?php endif;?>

            <?php if (is_active_sidebar( 'fourth-footer-widget-area' )) : ?>

                <div class="<?php echo $sidebargrid;?>">
                    <ul class="sidebar">
                        <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
                    </ul>
                </div>

            <?php endif;?>

            </div>

        </div>

        <div class="clear"></div>
        
<?php else: ?>
    
    <footer data-cursor-skin="<?php esc_attr_e( $cursor_skin ); ?>" class="footer <?php echo ut_page_option('ut_footer_skin' , 'ut-footer-light'); ?> ut-footer-fullwidth-<?php echo ut_page_option( 'ut_footerarea_width', 'off' ); ?>">
    
<?php endif;?>