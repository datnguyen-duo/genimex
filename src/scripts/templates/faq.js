
(function ($) {
    
    $('.single-faq').on('click', function(){
        $(this).toggleClass('active');
        $(this).find('.faq-description').slideToggle();
    })

})(jQuery);