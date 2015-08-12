<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>

<?php get_template_part('hero'); ?>

    <div class="wrapper" id="wrapper-index">
        
	   <div class="container">
           
	       <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
               
                <main id="main" class="site-main" role="main">
                    
                   <?php
                   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $the_query = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts' ) ) );
                    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>

                        <?php
                            /* Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'content', get_post_format() );
                        ?>

                    <?php endwhile; ?>
                    
                    <?php understrap_paging_nav(); ?>
                    
                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
                    
                </main><!-- #main -->
               
	       </div><!-- #primary -->
        
           <?php get_sidebar(); ?>
           
       </div><!-- Container end -->
        
    </div><!-- Wrapper end -->

<?php get_footer(); ?>
