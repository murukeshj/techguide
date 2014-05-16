<?php
/**
 * Template Name: Tag Cloud Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main" >     
                    <div style="margin:10px 10px 10px 20px;">
                        <div>
                            <h5>Popular tags</h5>
                            <?php
                                wp_tag_cloud('number=0');
                            ?>
                        </div>
                        <div>
                            <h5>Categories</h5>
                        </div>
                        <div style="margin:0px 10px 10px 20px;">                        
                            <?php
                                $ag = array('show_count' => 1,
                                            'title_li' => __( '' ));
                                wp_list_categories($ag);
                            ?>
                        </div>
                    </div>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
