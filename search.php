<?php get_header(); ?>

<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?php _e('Search Results for: ', 'jf'); ?> <?php the_search_query(); ?></h1>
    </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

       <div class="container clearfix">

        <!-- Post Content
        ============================================= -->
        <div class="postcontent nobottommargin clearfix">
	    <!-- Search Box
        ============================================= -->
        <div class="col_full card">
            <div class="card-header"><?php _e( 'What are you searhing for today?', 'jf' ); ?></div>
            <div class="card-body">
                <?php get_search_form(); ?>
            </div>
        </div>
        <!-- Search Box End -->
        <!-- Posts
        ============================================= -->
        <div id="posts">
            <?php 

                if( have_posts() ) {
                    while( have_posts() ) {
                        the_post();
                        // content-excert.php
                        get_template_part( 'partials/post/content-excert' );
                        // 1) content-excert.php, 2) content.php
                        //get_template_part( 'partials/post/content', 'excert' );
                    }
                }
            ?>
           
        </div><!-- #posts end -->

        <!-- Pagination
        ============================================= -->
        <div class="row mb-3">
           
            <div class="col-12">
            <?php 
                next_posts_link( '&larr; Older' ); 
                previous_posts_link( 'Newer &rarr;' );
            
            ?>
         
            <!-- <a href="#" class="btn btn-outline-secondary float-left">
                
            </a>
            <a href="#" class="btn btn-outline-dark float-right">
               
            </a> -->
            </div>
        </div>
        <!-- .pager end -->

        </div><!-- .postcontent end -->
        <?php get_sidebar(); ?>
    </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>