$(function(){//Формирование меню табов
    $(".main_field .tab").each(function(index){
        let id = $(this).attr("data-tab_id");
        let name = $(this).children(".tab_title").html();
        
        if ( index == 0 ){
            var is_active = "active";
        } else{
            var is_active = "";
        };

        $(".left_column .tab_menu").append(`<li><a data-tab_id="${id}" class="${is_active}" href="">${name}</a></li>`);
    }); 

});

$(function(){// Смена меню табов
    $(".tab_menu li a").on("click",function(event){
        event.preventDefault();

        $(".tab_menu li a").each(function(){
            $(this).removeClass("active");
        });
        $(this).addClass("active");

        let tab_id = $(this).attr("data-tab_id");

        $("body .main_field .tab").each(function(element){
            if ( $(this).attr("data-tab_id") != tab_id ){
                $(this).removeClass("active");
            } else{
                $(this).addClass("active");
            }
        });

    });
});