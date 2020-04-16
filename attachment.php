<?php get_header(); ?>
<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?php _e( 'Attachment', 'jf' );  ?></h1>
    </div>
</section><!-- #page-title end -->
<!-- Content
============================================= -->
<section id="content">

    <div class="container clearfix">

        <!-- Post Content
        ============================================= -->
        <div class="postcontent nobottommargin clearfix">

        <!-- Posts
        ============================================= -->
        <div id="posts">
            <a href="<?php echo $post->guid; ?>">
                <?php _e( 'Direct Download', 'jf' ); ?>
            </a>

            <?php the_title(); ?>
            <?php the_content(); ?>
           
        </div><!-- #posts end -->

        </div><!-- .postcontent end -->
        <?php get_sidebar(); ?>
    </div>
    <div class="line"></div>
    </div>

</section><!-- #content end -->

<?php get_footer(); ?>