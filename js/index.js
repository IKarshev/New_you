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

    $(".close_price_list").on('click', function(event){
        event.preventDefault();

        $(".price_list").removeClass("show");
        $(".price_list").addClass("hide");
        $("body").css('height', "unset" );
        $("body").css('overflow-y', "unset" );

        if ( $(window).scrollTop() > 100 ){$("html, body").animate({scrollTop: 0}, 1000);}
    });

    $(".open_price_list").on('click', function(event){
        event.preventDefault();

        $(".price_list").removeClass("hide");
        $(".price_list").addClass("show");

        $("body").css('height', $(".price_list").css('height') );
        $("body").css('overflow-y', "scroll" );
        $("body").css('position', "relative" );

        if ( $(window).scrollTop() > 100 ){$("html, body").animate({scrollTop: 0}, 1000);}
    });

})

$(function(){//menu goto
    $(".go_to").on("click",function(event){
        event.preventDefault();

        if (window.location.pathname != $("nav li a").attr("href")){
            $(location).attr('href', $(this).attr("href") );
        }
        
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

// Инициализация слайдера на главной странице
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

// Инициализация слайдера на детальной странице просмотра новости
$(function(){
    $("#detaile_news .slider .slides_cont").slick({
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3500,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '40px',
        swipe: false,
        prevArrow: $("#detaile_news .slider_arrows .prev"),
        nextArrow: $("#detaile_news .slider_arrows .next"),
        responsive:[
            {
                breakpoint:1440,
                settings:{
                    centerPadding: '20px',
                },
            },
            {
                breakpoint:992,
                settings:{
                    centerPadding: '35px',
                },
            },
            {
                breakpoint:776,
                settings:{
                    centerPadding: '20px',
                    slidesToShow: 5,
                    swipe: true,
                    focusOnSelect: true,
                },
            },
            {
                breakpoint:620,
                settings:{
                    centerPadding: '20px',
                    slidesToShow: 3.5,
                    swipe: true,
                    focusOnSelect: true,
                },
            },
            {
                breakpoint:450,
                settings:{
                    centerPadding: '10px',
                    slidesToShow: 3,
                    swipe: true,
                    focusOnSelect: true,
                },
            },
        ],
    });
})

$(function(){//смена главного фото при пролистывании detail_news
    $("#detaile_news .slider .slides_cont").on('afterChange', function(event, slick, currentSlide, nextSlide){
        let image_href = $("#detaile_news .slide_cont.slick-current.slick-center img").attr("src");
        $("#detaile_news .img_container .big_img img").attr("src", image_href);
    });
});