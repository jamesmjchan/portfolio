//javaScript




$('html').removeClass('no-js');
$('html').addClass('js');

//animation on hamburger menu 
$('.mobile-menu-btn').click( function() {

    $(this).toggleClass('open');

    //hidden the img when click on the hamburger menu
    $('.logo__img').slideToggle('800');

    $('.mobile-primary-menu').slideToggle('800');

});


// var $body = $('.index');
// var $nav = $('.home-mobile-nav');
// var $overlay = $('<div class="overlay"></div>');
// var $mobileButton  = $('.mobile-button');

// $body.prepend($overlay);
// $overlay.append($nav.clone());

// var $homeMobileButton = $('.home-mobile-button');

// $homeMobileButton.click(function(){
//     $overlay.toggleClass('open');
// });

