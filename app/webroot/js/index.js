$(document).ready(function () {
    /* code for scrolling */
    $('a[href*=#]:not([href=#])').click(function () {
        if ($(".menuIcon").is(":visible")) {
            $(".headerMenu").slideToggle();
        }
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }


    });

    /* faq slider */
    $("#lightSlider").lightSlider({
        slideWidth: 960,
        loop: true
    });
    $("#testslider").lightSlider({
        slideWidth: 960
    });

    $("#howTab").easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: false, // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view
        activate: function (event) {} // Callback function if tab is switched                            
    });


});