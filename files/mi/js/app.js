jQuery.noConflict();
(function( $ ) {
    $(function() {
        var shrinkHeader = 200;
        $(window).scroll(function() {
            var scroll = getCurrentScroll();
            if ( scroll >= shrinkHeader ) {
                $('#header').addClass('shrink');
                $("#logo").find("img").attr("src","files/ecc-logo-einzeilig.png");
            }
            else {
                $('#header').removeClass('shrink');
                $("#logo").find("img").attr("src","files/Eisenschmidt_Consulting_Crew.png");
            }
        });
        function getCurrentScroll() {
            return window.pageYOffset || document.documentElement.scrollTop;
        }
    });
})(jQuery);