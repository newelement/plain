var globalScrollCheck = false;
var viewportWidth = $(window).width();

function removeSticky(){

    $('body').removeClass("sticky");

}

$(document).ready(function() {

    $('.offcanvas-toggle').sidr({
        name: 'mobile-mav',
        source: '.main-nav',
        body : '#site-body'
    });

    $(window).on("scroll", function() {

        if(viewportWidth > 767){
            var fromTop = $(this).scrollTop();
            $('body').toggleClass("sticky", (fromTop > 60));
            globalScrollCheck = false;
        }

    });


    $(window).resize(function() {

        viewportWidth = $(window).width();

        if(viewportWidth < 768 && globalScrollCheck === false){
            removeSticky();
            globalScrollCheck = true;
        }

    });

});