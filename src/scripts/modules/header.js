(function ($) {
    $(window).on('scroll',function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 200) {
            $("header").addClass("darkHeader");
        } else {
            $("header").removeClass("darkHeader");
        }
    });
    
    $('.mobile-opener').on('click',function() {
        $("header").toggleClass("mobile-menu-opened");
        $("body").toggleClass("no-scroll");
        $(this).toggleClass('active');
        $('.mobile-menu').fadeToggle();
        $('.buttons-holder a').fadeToggle();
    });

})(jQuery);
