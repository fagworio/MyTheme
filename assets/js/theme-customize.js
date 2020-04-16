/**
 * Theme Customize Jquery.
 */
(function($){
    wp.customize( 'jf_header_show_search', ( value ) => {
        value.bind( ( newValue ) => {
            if ( newValue ) {
                $("#top-search").show();
            }else {
                $("#top-search").hide();
            }
        });
    });

    wp.customize( 'jf_header_show_cart', ( value ) => {
        value.bind( ( newValue ) => {
            if ( newValue ) {
                $("#top-cart").show();
            }else {
                $("#top-cart").hide();
            }
        });
    });

    wp.customize( 'jf_footer_copyright_text', ( value ) => {
        value.bind( ( newValue ) => {
            $("#jf-copyright-text").text(newValue);
        });
    });


})(jQuery);
