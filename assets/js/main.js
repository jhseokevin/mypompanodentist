'use strict';

$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
                // nav:true
            },
            600: {
                items: 2,
                // nav:false
            },
            900: {
                items: 2,
                // nav:false
            },
            1000: {
                items: 3,
                // nav:true,
                loop: true
            }
        }
    });


    $('.play').on('click', function () {
        owl.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function () {
        owl.trigger('stop.owl.autoplay')
    })
});





$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('.stick--area').addClass("sticky");
  }
  else{
    $('.stick--area').removeClass("sticky");
  }
});
$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('.stick--areadesktop').addClass("sticky");
  }
  else{
    $('.stick--areadesktop').removeClass("sticky");
  }
});


$(document).ready(function(){
    $('#year').text(new Date(). getFullYear());
})


$(document).ready(function () {
    $(window).on("resize", function (e) {
        checkScreenSize();
    });

    checkScreenSize();
    
    function checkScreenSize(){
        var newWindowWidth = $(window).width();
        if (newWindowWidth < 992) {
            $(".menu-item-has-children>a").click(function($e){
                $e.preventDefault();
                console.log("clicked");
                if ($(this).hasClass("opened")) {
                    $(this).parents(".menu-item-has-children").children("ul").hide();
                    $(this).removeClass("opened");
                }
                else{
                    $(this).addClass("opened");
                    $(this).parents(".menu-item-has-children").children("ul").show();
                }
            }); 
        }
    }
});