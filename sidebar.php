 <!-- Sidebar
    ============================================= -->
<div class="sidebar nobottommargin col_last">
    <div class="sidebar-widgets-wrap">
        <?php
            if( is_active_sidebar( 'jf_sidebar' ) ) {
                dynamic_sidebar( 'jf_sidebar' );
            }
        ?>
    </div>
</div>

</div><!-- .sidebar end -->