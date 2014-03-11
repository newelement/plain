var globalScrollCheck = false;
var viewportWidth = $(window).width();
var map, centerListener;
var $contactMap = $("#contact-map");

function loadMap(){

    var center = new google.maps.LatLng(34.01492058295735,-86.00770783393516);

    var drag = ( Modernizr.touch )? false : true;

    var myOptions = {
        zoom: 16,
        scrollwheel: false,
        draggable: drag,
        //panControl: false,
        center: center,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // Create the initial map
    map = new google.maps.Map($contactMap, myOptions);

    // re-centers map when a user re-sizes browser
    var homeLatlng = map.getCenter();
    centerListener = google.maps.event.addDomListener(window, 'resize', function() {
        map.setCenter(homeLatlng);
    });

}

function addSticky(){
    var fromTop = $(this).scrollTop();
    $('body').toggleClass("sticky", (fromTop > 60));
}

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
            addSticky();
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
    
    if( $contactMap.length ){
        loadMap();
    }
    
    $('.share-box').click(function(e){
        e.preventDefault();
    });
    
    $('.twitter-share').sharrre({
      share: {
        twitter: true
      },
      template: '<a class="share-box" href="#"><i class="fa fa-twitter fa-fw"></i> <span class="share-name">Twitter</span> <span class="social-count">{total}</span></a>',
      enableHover: false,
      enableTracking: true,
      click: function(api){
        api.simulateClick();
        api.openPopup('twitter');
      }
    });
    
    $('.facebook-share').sharrre({
      share: {
        facebook: true
      },
      template: '<a class="share-box" href="#"><i class="fa fa-facebook fa-fw"></i> <span class="share-name">Facebook</span> <span class="social-count">{total}</span></a>',
      enableHover: false,
      enableTracking: true,
      click: function(api){
        api.simulateClick();
        api.openPopup('facebook');
      }
    });
    
    $('.googleplus-share').sharrre({
      share: {
        googlePlus: true
      },
      template: '<a class="share-box" href="#"><i class="fa fa-google-plus fa-fw"></i> <span class="share-name">Google &plus;</span> <span class="social-count">{total}</span></a>',
      enableHover: false,
      enableTracking: true,
      click: function(api){
        api.simulateClick();
        api.openPopup('googlePlus');
      },
      urlCurl : 'sharrre.php'
    });
    
    $('.pinterest-share').sharrre({
      share: {
        pinterest: true
      },
      template: '<a class="share-box" href="#"><i class="fa fa-pinterest fa-fw"></i> <span class="share-name">Pinterest</span> <span class="social-count">{total}</span></a>',
      enableHover: false,
      enableTracking: true,
      click: function(api){
        api.simulateClick();
        api.openPopup('pinterest');
      },
      urlCurl : 'sharrre.php'
    });
    

});