$(function(){//burger
    $(".burger_btn").on('click', function(event){
        event.preventDefault();

        $(".burger_menu").toggleClass("open");
        $(".black_bg").toggleClass("active");
    });

    $(".black_bg").on('click', function(event){
        event.preventDefault();

        $(".burger_menu").toggleClass("open");
        $(".black_bg").toggleClass("active");
    });


})

$(function(){//price_list
    $(".price_list").hide();

    $(".close_price_list").on('click', function(event){
        event.preventDefault();

        $(".price_list").removeClass("show").addClass("hide").hide();
        $("body").css('height', "unset" );
        $("body").css('overflow-y', "unset" );

        if ( $(window).scrollTop() > 100 ){$("html, body").animate({scrollTop: 0}, 1000);}
    });

    $(".open_price_list").on('click', function(event){
        event.preventDefault();

        $(".price_list").show().removeClass("hide").addClass("show");
        $("body").css('height', $(".price_list").css('height') );
        $("body").css('overflow-y', "scroll" );
        $("body").css('position', "relative" );

        if ( $(window).scrollTop() > 100 ){$("html, body").animate({scrollTop: 0}, 1000);}
    });

})

$(function(){//menu goto
    $(".go_to").on("click",function(event){
        event.preventDefault();

        let scroll_to_element = $(this).attr("data-scroll_to");
        let element_top_tors = $(scroll_to_element).offset().top;
        if ( $(window).width() > 776 ){
            element_top_tors = element_top_tors - 100;
        } else{
            element_top_tors = element_top_tors - 36;
            $(".burger_menu").toggleClass("open");
            $(".black_bg").toggleClass("active");
        }

        $("html, body").animate({scrollTop: element_top_tors}, 1000);

    });
})

// Инициализация слайдера
$(function(){
    $("#SlickSlider .slider").slick({
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3500,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $(".arrows_container #left"),
        nextArrow: $(".arrows_container #right"),
        responsive:[
            {
                breakpoint:1440,
                settings:{
                    slidesToShow: 2,
                },
            },
            {
                breakpoint:992,
                settings:{
                    slidesToShow: 1.2,
                    centerMode:true,
                },
            },
            {
                breakpoint:776,
                settings:{
                    slidesToShow: 1,
                    centerMode:true,
                },
            },
        ],

    });
})

//to top button
$(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#to_top_btn').fadeIn();
        } else {
            $('#to_top_btn').fadeOut();
        }
    })

    $('#to_top_btn').on("click", function(){
        $("html, body").animate({scrollTop: 0}, 1000);
    });
    
})