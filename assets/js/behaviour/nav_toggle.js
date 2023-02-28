// $('nav .nav_toggle_button').click(
//     ()=>
//     {
//         $('nav .wrapper').toggleClass('condensed_nav');
//         $('.body').toggleClass('body_when_nav_is_condensed');
//         $('header').toggleClass('expended_header');
//     }
//     )
//     $(window).resize(function () { 
//         if ($(window).width() < 700)
//         {
//             $('nav .wrapper').addClass('condensed_nav');
//             $('.body').addClass('body_when_nav_is_condensed');
//         $('header').addClass('expended_header');
//     }
// });
// $(window).resize(function () { 
//     if ($(window).width() > 700)
//     {
//         $('nav .wrapper').removeClass('condensed_nav');
//         $('header').removeClass('expended_header');
//         $('.body').removeClass('body_when_nav_is_condensed');

//     }
// });

$('nav .nav > .container > ul > li').mouseover(function(event) {
    $(event.currentTarget).find('.subnav').show();
    console.table($(event.currentTarget))
  });
  $('nav .nav > .container > ul > li').mouseleave(function(event) {
    $(event.currentTarget).find('.subnav').hide();
  });