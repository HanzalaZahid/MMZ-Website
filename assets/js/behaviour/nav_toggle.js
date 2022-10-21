$('nav .nav_toggle_button').click(
    ()=>
    {
        $('nav .wrapper').toggleClass('condensed_nav');
        $('header').toggleClass('expended_header');
    }
)
$(window).resize(function () { 
    if ($(window).width() < 700)
    {
        $('nav .wrapper').addClass('condensed_nav');
        $('header').addClass('expended_header');
    }
});
$(window).resize(function () { 
    if ($(window).width() > 700)
    {
        $('nav .wrapper').removeClass('condensed_nav');
        $('header').removeClass('expended_header');
    }
});