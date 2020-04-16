<?php 
/*
* Template Name: Full Width Post
*/
__( 'Full Width Post', 'jf' );

get_header(); 

?>

<!-- Page Title
============================================= -->
    <section id="page-title">
    <div class="container clearfix">
        <h1><?php single_post_title(); ?></h1>
        <span>
            <?php 
                if( function_exists( 'the_subtitle' ) ){
                    the_subtitle(); 
                }
            ?>
        </span>
    </div>

</section><!-- #page-title end -->

<section id="content">

<div class="content-wrap">
    <?php
        if( have_posts() ) {
            while ( have_posts() ) {
                the_post();
            }
        }
    ?>
    <div class="container clearfix">

        <?php the_content(); ?>

        <div class="clear"></div>

    </div>

</div>

</section><!-- #content end -->

<?php get_footer(); ?>